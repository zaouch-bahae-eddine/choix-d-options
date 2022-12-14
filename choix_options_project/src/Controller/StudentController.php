<?php

namespace App\Controller;

use App\Entity\Choice;
use App\Entity\Promotion;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\BlocRepository;
use App\Repository\PromotionRepository;
use App\Repository\UeRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use SpecShaper\EncryptBundle\Encryptors\EncryptorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Faker;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
#[Route('/admin/promotion')]
class StudentController extends AbstractController
{
    #[Route('/{promotion}/student', name: 'app_student_index', methods: ['GET', 'POST'])]
    public function index(Request $request, UserRepository $userRepository, PromotionRepository $promotionRepository, Promotion $promotion, UserPasswordHasherInterface $passwordHasher, EncryptorInterface $encryptor): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $formUpload = $this->createFormBuilder()
            ->add('submitFile', FileType::class)
            ->getForm();
        $faker = Faker\Factory::create('fr_FR');
        $fakePassword = $faker->password;
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $fakePassword
        );
        $user->setRoles(['ROLE_ETUDIANT'])
        ->setPromotion($promotion)
        ->setPassword($hashedPassword)
        ->setEncrypted($encryptor->encrypt($fakePassword));

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_student_index', ['promotion' => $promotion->getId()], Response::HTTP_SEE_OTHER);
        }
        return $this->render('student/index.html.twig', [
            'users' => $userRepository->findByRoleAndPromotion('ROLE_ETUDIANT', $promotion->getId()),
            'user' => $user,
            'form' => $form,
            'formEdit' => $form,
            'promotionId' => $promotion->getId(),
            'formUpload' => $formUpload,
            'promotions' => $promotionRepository->findAll()
        ]);
    }

    #[Route('/{promotion}/student/{student}/edit', name: 'app_student_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $promotion, User $student, UserRepository $userRepository, PromotionRepository $promotionRepository): Response
    {
        $form = $this->createForm(UserType::class, $student);
        $form->handleRequest($request);
        $student->setPromotion($promotionRepository->findOneBy(['id' => $request->request->get('change-promotion-select')]));
        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($student, true);
        }
        return $this->redirectToRoute('app_student_index', ['promotion' => $promotion], Response::HTTP_SEE_OTHER);

    }

    #[Route('/{promotion}/student/upload', name: 'app_student_upload', methods: ['GET', 'POST'])]
    function upload(Request $request, Promotion $promotion, EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher, EncryptorInterface $encryptor)
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
                    $student = new User();
                    // Assign fields
                    $faker = Faker\Factory::create('fr_FR');
                    $fakePassword = $faker->password;
                    $hashedPassword = $passwordHasher->hashPassword(
                        $student,
                        $fakePassword
                    );
                    $student->setFirstName($data[0])
                        ->setLastName($data[1])
                        ->setEmail($data[2])
                        ->setPromotion($promotion)
                        ->setRoles(['ROLE_ETUDIANT'])
                        ->setPassword($hashedPassword)
                        ->setEncrypted($encryptor->encrypt($fakePassword));

                    $em->persist($student);
                }
                fclose($handle);
                $em->flush();
            }
        }
        return $this->redirectToRoute('app_student_index', ['promotion' => $promotion->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{promotion}/student/{student}/delete', name: 'app_student_delete', methods: ['POST'])]
    public function delete(Request $request, $promotion, User $student, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $userRepository->remove($student, true);
        }

        return $this->redirectToRoute('app_student_index', ['promotion' => $promotion], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{promotion}/student/send', name: 'app_student_send', methods: ['POST'])]
    public function sendEmail(MailerInterface $mailer, Promotion $promotion, UserRepository $userRepository, EncryptorInterface $encryptor): Response
    {
        foreach ($userRepository->findByRoleAndPromotion('ROLE_ETUDIANT', $promotion->getId()) as $student){
            $email = (new TemplatedEmail())
                ->from('ne-pas-repondre@upjv.fr')
                ->to($student->getEmail())
                ->subject('[upjv] Choix d\'options')
                ->htmlTemplate('emails/studentAccount.html.twig')
                ->context([
                    'firstName' => $student->getFirstName(),
                    'lastName' => $student->getLastName(),
                    'emailStudent' => $student->getEmail(),
                    'password' => $encryptor->decrypt($student->getEncrypted())
                ])
            ;
            $mailer->send($email);
        }
        return $this->redirectToRoute('app_student_index', ['promotion' => $promotion->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{promotion}/student/{student}/choice', name: 'admin_app_student_choice', methods: ['GET', 'POST'])]
    public function choiceMade(Promotion $promotion, User $student, UeRepository $ueRepository): Response
    {
        // choix enregistr?? dans la BD
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
            "promotionId" => $promotion->getId(),
            "studentId" => $student->getId(),
        ]);
    }

    #[Route('/{promotion}/student/{student}/choice/save', name: 'admin_app_student_choice_save', methods: ['POST'])]
    public function choiceSave(Request $request, Promotion $promotion, User $student, EntityManagerInterface $em,UeRepository $ueRepository, BlocRepository $blocRepository): Response
    {
        $edit = false;
        // choix enregistr?? dans la BD
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
        //Si le choix envoyer est deja enregistr?? dans la BD
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

        // Verifier si les nouvaux choix sont autoris??s
        if(($blocRepository->getNbUePossible($user->getPromotion()->getParcour()) != count($ueChosed)) || (count(array_values(array_diff($ueChosed, $uesPossibleIds))) > 0) ){
            $errors[] = 'les UEs choisi ne corespond pas ?? votre parcoure';
            return $this->render("student/studentChoices.html.twig", [
                "errors" => $errors,
                "currentUser" => $student,
                "currentChoice" => $currentChoice,
                "grp" => $grp,
                "promotionId" => $promotion->getId(),
                "studentId" => $student->getId(),
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
                ->setUser($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }

        //Ajouter les UEs obligatoires
        foreach ($ueMandatory as $ue){
            $currentGroupe =$request->request->get('select-ue-'.$ueId);
            if(!$edit){
                $ue->setCurrentCapacity($ue->getCurrentCapacity() + 1);
            }
            $choice = (new Choice())
                ->setUser($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }

        $em->flush();
        return $this->render("student/studentChoices.html.twig", [
            'errors' => [],
            "Success" => 'Choix d\'option enregistr??',
            "currentUser" => $student,
            "currentChoice" => $currentChoice,
            "grp" => $grp,
            "promotionId" => $promotion->getId(),
            "studentId" => $student->getId(),
        ]);
    }
}
