<?php

namespace App\Controller;

use App\Entity\Choice;
use App\Entity\Promotion;
use App\Entity\Student;
use App\Entity\User;
use App\Entity\Year;
use App\Form\UserType;
use App\Repository\ParcourRepository;
use App\Repository\SkillBlocRepository;
use App\Repository\ChoiceRepository;
use App\Repository\PromotionRepository;
use App\Repository\StudentRepository;
use App\Repository\UeRepository;
use App\Repository\UserRepository;
use App\Repository\YearRepository;
use Doctrine\ORM\EntityManagerInterface;
use SpecShaper\EncryptBundle\Encryptors\EncryptorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Faker;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use function Doctrine\Common\Collections\first;
use function Symfony\Component\Console\Helper\render;

#[Route('/admin/year')]
class StudentController extends AbstractController
{
    #[Route('/{year}/student', name: 'app_student_index', methods: ['GET', 'POST'])]
    public function index(EntityManagerInterface $em, Request $request, UserRepository $userRepository,
                          UserPasswordHasherInterface $passwordHasher, EncryptorInterface $encryptor, Year $year,
                          StudentRepository $studentRepository, YearRepository $yearRepository, ParcourRepository $parcourRepository): Response
    {
        $user = new User();
        $student = new Student();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $formUpload = $this->createFormBuilder()
            ->add('submitFile', FileType::class)
            ->getForm();


        if ($form->isSubmitted() && $form->isValid()) {
            $faker = Faker\Factory::create('fr_FR');
            $fakePassword = $faker->password;
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $fakePassword
            );
            //si user n'existe pas
            //create user et student
            $existingUser = $userRepository->findOneBy(['email' => $user->getEmail()]);
            if(!$existingUser){
                $user->setRoles(['ROLE_ETUDIANT'])
                    ->setPassword($hashedPassword)
                    ->setEncrypted($encryptor->encrypt($fakePassword));

                $student->setUser($user)
                    ->setYear($year)
                    ->setParcour($parcourRepository->find($request->get('student-parcours')))
                ;

                $em->persist($student);
                $userRepository->save($user, true);
                $em->flush();
            }
            return $this->redirectToRoute('app_student_index', ['year' => $year->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('student/index.html.twig', [
            'students' => $studentRepository->findBy(['year' => $year->getId()]),
            'user' => $user,
            'form' => $form,
            'formEdit' => $form,
            'selectedYear' => $year,
            'formUpload' => $formUpload,
            'years' => $yearRepository->findAll(),
            'parcours' => $parcourRepository->findBy(['year'=>$year->getId()]),
        ]);
    }

    #[Route('/{year}/student/{user}/edit', name: 'app_student_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $year, User $user, UserRepository $userRepository,
                         YearRepository $yearRepository,
                         EntityManagerInterface $em): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $newYear = $yearRepository->findOneBy(['id' => $request->request->get('change-promotion-select')]);
        /**
         * @var Student $student
         */
        $student = $user->getStudents()->first();
        if($year != $request->request->get('change-promotion-select')){
            $student->setParcour(null);
        }
        $student->setYear($newYear);
        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);
            $em->flush();
        }
        return $this->redirectToRoute('app_student_index', ['year' => $year], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{year}/student/{student}/update/parcours', name: 'update_student_parcours', methods: ['POST'])]
    public function updateStudentParcour(SerializerInterface $serializer, Request $request, $year, Student $student,
                                         ParcourRepository $parcourRepository, EntityManagerInterface $em): JsonResponse
    {
        $selectedParcours = $parcourRepository->find($request->get('student-parcours'));
        $student->setParcour($selectedParcours);
        $em->persist($student);
        $em->flush();
        $data = $serializer->serialize(['message' => 'parcours changed'], JsonEncoder::FORMAT);
        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }
    #[Route('/{year}/student/upload', name: 'app_student_upload', methods: ['GET', 'POST'])]
    function upload(Request $request, Year $year, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher, EncryptorInterface $encryptor)
    {
        $form = $this->createFormBuilder()
            ->add('submitFile', FileType::class)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile */
            $file = $form->get('submitFile')->getData();

            // Open the file
            if (($handle = fopen($file->getPathname(), "r")) !== false) {
                // Read and process the lines.
                // Skip the first line if the file includes a header
                $data = fgetcsv($handle);
                while (($data = fgetcsv($handle)) !== false) {
                    // Do the processing: Map line to entity, validate if needed
                    $user = new User();
                    $student = new Student();
                    // Assign fields
                    $faker = Faker\Factory::create('fr_FR');
                    $fakePassword = $faker->password;
                    $hashedPassword = $passwordHasher->hashPassword(
                        $user,
                        $fakePassword
                    );
                    $user->setFirstName($data[0])
                        ->setLastName($data[1])
                        ->setEmail($data[2])
                        ->setRoles(['ROLE_ETUDIANT'])
                        ->setPassword($hashedPassword)
                        ->setEncrypted($encryptor->encrypt($fakePassword));
                    $em->persist($user);

                    $student->setUser($user)
                        ->setYear($year);
                    $em->persist($student);
                }
                fclose($handle);
                $em->flush();
            }
        }
        return $this->redirectToRoute('app_student_index', ['year' => $year->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{year}/student/{user}/delete', name: 'app_student_delete', methods: ['POST'])]
    public function delete(Request $request, $year, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_student_index', ['year' => $year], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{year}/student/send', name: 'app_student_send', methods: ['POST'])]
    public function sendEmail(MailerInterface $mailer, Year $year,
                              EncryptorInterface $encryptor): Response
    {
        foreach ($year->getStudents() as $student){
            $email = (new TemplatedEmail())
                ->from('ne-pas-repondre@upjv.fr')
                ->to($student->getUser()->getEmail())
                ->subject('[upjv] Choix d\'options')
                ->htmlTemplate('emails/studentAccount.html.twig')
                ->context([
                    'firstName' => $student->getUser()->getFirstName(),
                    'lastName' => $student->getUser()->getLastName(),
                    'emailStudent' => $student->getUser()->getEmail(),
                    'password' => $encryptor->decrypt($student->getUser()->getEncrypted())
                ])
            ;
            $mailer->send($email);
        }
        return $this->redirectToRoute('app_student_index', ['year' => $year->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{promotion}/student/{student}/choice', name: 'admin_app_student_choice', methods: ['GET', 'POST'])]
    public function choiceMade(Promotion $promotion, Student $student, UeRepository $ueRepository): Response
    {
        // choix enregistré dans la BD
        $currentChoiceObjects = $student->getChoices()->getValues();
        $currentChoice = array_map(function($e){
            return $e->getUe()->getId();
        },$currentChoiceObjects);

        //All blocs
        $blocs = array_map(function($e) {
            return is_object($e) ? $e->getId() : 0;
        }, $student->getPromotion()->getParcour()->getBlocs()->getValues());

        //All Ues
        $allUe = $ueRepository->findBy(['bloc' => $blocs]);

        $grp = [];
        foreach ($currentChoiceObjects as $choice){
            $grp[$choice->getUe()->getId()] = $choice->getGroupe();
        }
        foreach ($allUe as $ue){
            if(!isset($grp[$ue->getId()])){
                $grp[$ue->getId()] = 1;
            }
        }
        return $this->render("student/studentChoices.html.twig", [
            "errors" => [],
            "currentUser" => $student,
            "currentChoice" => $currentChoice,
            "grp" => $grp,
            "promotion" => $promotion,
            "student" => $student,
        ]);
    }

    #[Route('/{promotion}/student/{student}/choice/save', name: 'admin_app_student_choice_save', methods: ['POST'])]
    public function choiceSave(Request $request, Promotion $promotion, Student $student, EntityManagerInterface $em, UeRepository $ueRepository, SkillBlocRepository $blocRepository): Response
    {
        $edit = false;
        // choix enregistré dans la BD
        $user = $student;
        $currentChoiceObjects = $student->getChoices()->getValues();

        //Choix envoyer
        $ueChosed = $request->request->all('choices');

        //All blocs
        $blocs = array_map(function($e) {
            return is_object($e) ? $e->getId() : 0;
        }, $user->getPromotion()->getParcour()->getBlocs()->getValues());

        //All Ues
        $allUe = $ueRepository->findBy(['bloc' => $blocs]);

        //UE obligatoires
        $ueMandatory =  $ueRepository->findBy(['bloc' => $blocs, 'status' => 2]);
        $ueMandatoryIds = array_map(function($e) {
            return is_object($e) ? $e->getId() : 0;
        },$ueMandatory);
        $currentChoice = array_map(function($e){
            return $e->getUe()->getId();
        }, $currentChoiceObjects);

        if(count($currentChoice) > 0){
            $edit = true;
        }
        //Si le choix envoyer est deja enregistré dans la BD
        // on change juste les groupe de chaque UE Choisi
        if($edit && !array_diff(array_values(array_diff($ueChosed, $currentChoice)), $ueMandatoryIds)){
            foreach ($currentChoiceObjects as $savedChoice){
                $savedChoice->setGroupe($request->request->get('select-ue-'.$savedChoice->getUe()->getId()));
            }
            $em->flush();
            return $this->redirectToRoute('admin_app_student_choice', [
                'promotion' => $promotion->getId(),
                'student' => $student->getId()
            ], Response::HTTP_SEE_OTHER);
        }
        //Delete current Choice to save a new choice
        if($edit){
            foreach ($user->getChoices() as $choice) {
                $em->remove($choice);
            }
            $em->flush();
        }

        // UE optionnelle possible
        $uesPossible = $ueRepository->findBy(['bloc' => $blocs, 'status' => 1]);
        $uesPossibleHash = [];
        $uesPossibleIds = array_map(function($e) {
            return is_object($e) ? $e->getId() : 0;
        },$uesPossible);
        foreach ($uesPossible as $ue){
            $uesPossibleHash[$ue->getId()] = $ue;
        }
        $grp = [];
        foreach ($currentChoiceObjects as $choice){
            $grp[$choice->getUe()->getId()] = $choice->getGroupe();
        }
        foreach ($allUe as $ue){
            if(!isset($grp[$ue->getId()])){
                $grp[$ue->getId()] = 1;
            }
        }

        // Verifier si les nouvaux choix sont autorisés
        if(($blocRepository->getNbUePossible($user->getPromotion()->getParcour()) != count($ueChosed)) || (count(array_values(array_diff($ueChosed, $uesPossibleIds))) > 0) ){
            $errors[] = 'les UEs choisi ne corespond pas à votre parcoure';
            return $this->render("student/studentChoices.html.twig", [
                "errors" => $errors,
                "currentUser" => $student,
                "currentChoice" => $currentChoice,
                "grp" => $grp,
                "promotion" => $promotion,
                "student" => $student,
            ]);
        }

        //Ajouter les UEs optionnelles

        foreach ($ueChosed as $ueId){
            $ue = $uesPossibleHash[''.$ueId];
            $currentGroupe = $request->request->get('select-ue-'.$ueId);
            if(!$edit){
                $ue->setCurrentCapacity($ue->getCurrentCapacity() + 1);
            }
            $choice = (new Choice())
                ->setStudent($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe)
            ;
            $em->persist($choice);
        }

        //Ajouter les UEs obligatoires
        foreach ($ueMandatory as $ue){
            $currentGroupe =$request->request->get('select-ue-'.$ueId);
            if(!$edit){
                $ue->setCurrentCapacity($ue->getCurrentCapacity() + 1);
            }
            $choice = (new Choice())
                ->setStudent($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }

        $em->flush();
        return $this->render("student/studentChoices.html.twig", [
            'errors' => [],
            "Success" => 'Choix d\'option enregistré',
            "currentUser" => $student,
            "currentChoice" => $currentChoice,
            "grp" => $grp,
            "promotion" => $promotion,
            "student" => $student,
        ]);
    }


    #[Route('/{year}/student/{student}/validated_ues', name: 'add_validated_ues', methods: ['GET', 'POST'])]
    public function addValidatedUes(SerializerInterface $serializer, Request $request,
                                    Year $year, Student $student, UeRepository $ueRepository,
                                    StudentRepository $studentRepository)
    {
        //Choix envoyer
        $validatedUes = $request->request->all('validates-ues');
        if($request->isMethod('post')){
            foreach ($student->getValidatedUes() as $validUe){
                $student->removeValidatedUe($validUe);
                $validUe->removeValidateStudent($student);
            }
            foreach ($validatedUes as $validatedUeId){
                $ueObj = $ueRepository->find($validatedUeId);
                $ueObj->addValidateStudent($student);
                $student->addValidatedUe($ueObj);
            }
            $studentRepository->save($student, true);

            $data = $serializer->serialize(['message' => 'validated ues saved !'], JsonEncoder::FORMAT);
            return new JsonResponse($data, Response::HTTP_OK, [], true);
        }

        return $this->render("student/studentValidatedUes.html.twig", [
            "student" => $student,
        ]);
    }

    #[Route('/{year}/student/set-year-parcour', name: 'set_year_parcours_group', methods: ['GET', 'POST'])]
    public function setGroupStudentYearParcours(EntityManagerInterface $em, Request $request,
                                    Year $year, Student $student, ParcourRepository $parcourRepository,
                                    StudentRepository $studentRepository, YearRepository $yearRepository)
    {
        $studentYear = $request->request->all('student-year');
        $newYear = $request->request->get('select-student-year');
        $studentParcours = $request->request->all('student-parcour');
        $newParcour = $request->request->get('select-student-parcours');
        if($studentParcours != null){
            foreach($studentParcours as $studentId){
                $s = $studentRepository->find($studentId);
                foreach ($s->getPursue() as $ueP){
                    $s->removePursue($ueP);
                    $ueP->removeStudentsPursue($s);
                }
                foreach ($s->getFollows() as $f){
                    $s->removeFollow($f);
                    $f->removeStudent($s);
                }
                foreach ($s->getValidatedUes() as $v){
                    $s->removeValidatedUe($v);
                    $v->removeValidateStudent($s);
                }
                foreach ($s->getChoices() as $c){
                    $s->removeChoice($c);
                }
                $s->setParcour($parcourRepository->find($newParcour));
            }
        } else {
            foreach($studentYear as $studentId){
                $s = $studentRepository->find($studentId);
                foreach ($s->getPursue() as $ueP){
                    $s->removePursue($ueP);
                    $ueP->removeStudentsPursue($s);
                }
                foreach ($s->getFollows() as $f){
                    $s->removeFollow($f);
                    $f->removeStudent($s);
                }
                foreach ($s->getValidatedUes() as $v){
                    $s->removeValidatedUe($v);
                    $v->removeValidateStudent($s);
                }
                foreach ($s->getChoices() as $c){
                    $s->removeChoice($c);
                }
                $s->setYear($yearRepository->find($newYear));
            }
        }
        $em->flush();
        return $this->redirectToRoute('app_student_index', ['year' => $year->getId()], Response::HTTP_SEE_OTHER);
    }
}
