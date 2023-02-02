<?php

namespace App\Controller;

use App\Entity\Follow;
use App\Entity\OptionBloc;
use App\Entity\SkillBloc;
use App\Entity\Parcour;
use App\Entity\Student;
use App\Entity\Ue;
use App\Form\OptionBlocType;
use App\Form\SelectUeType;
use App\Form\SkillBlocType;
use App\Form\UeType;
use App\Repository\ChoiceRepository;
use App\Repository\FollowRepository;
use App\Repository\OptionBlocRepository;
use App\Repository\SkillBlocRepository;
use App\Repository\ParcourRepository;
use App\Repository\StudentRepository;
use App\Repository\UeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
#[Route('/admin/parcour')]
class BlocController extends AbstractController
{
    #[Route('/{id}/bloc', name: 'app_bloc_index', methods: ['GET', 'POST'])]
    #[Route('/{id}/bloc/{selectedBloc}', name: 'app_bloc_selected_index', methods: ['GET', 'POST'])]
    public function index(Request $request, SkillBlocRepository $blocRepository, Parcour $parcour,
                          ParcourRepository $parcourRepository,UeRepository $ueRepository, $selectedBloc = 0): Response
    {
        $skillBloc = new SkillBloc();
        $formSkillBloc = $this->createForm(SkillBlocType::class, $skillBloc);
        $formSkillBloc->handleRequest($request);

        $optionBloc = new OptionBloc();
        $formOptionBloc = $this->createForm(OptionBlocType::class, $optionBloc);

        $ue = new Ue();
        $formUe = $this->createForm(UeType::class, $ue);


        $ueByYear = $ueRepository->findByYearId($parcour->getYear()->getId());
        $ueSelected = new Ue();
        $formSelectUe = $this->createForm(SelectUeType::class, $ueSelected, ['ueOfYear' => $ueByYear]);

        if ($formSkillBloc->isSubmitted() && $formSkillBloc->isValid()) {
            $skillBloc->setParcour($parcour);
            $blocRepository->save($skillBloc, true);

            return $this->redirectToRoute('app_bloc_index', ['id' => $parcour->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bloc/index.html.twig', [
            'skillBlocs' => $parcour->getSkillBlocs(),
            'bloc' => $skillBloc,
            'formSkillBloc' => $formSkillBloc,
            'formEditSkillBloc' => $formSkillBloc,
            'selectedParcourId' => $parcour->getId(),
            'parcours' => $parcourRepository->findAll(),
            'formUe' => $formUe,
            'formUeEdit' => $formUe,
            'selectedBloc' => $selectedBloc,
            'formSelectUe' => $formSelectUe,
            'formOptionBloc' => $formOptionBloc,
            'formEditOptionBloc' => $formOptionBloc
        ]);
    }
    #[Route('/{id}/bloc/{skillBloc}/optionBloc/new', name: 'app_bloc_new_option', methods: ['POST'])]
    public function addOptionBloc(Request $request, OptionBlocRepository $optionBlocRepository, $id, SkillBloc $skillBloc): Response
    {
        $optionBloc = new OptionBloc();
        $form = $this->createForm(OptionBlocType::class, $optionBloc);
        $form->handleRequest($request);
        $optionBloc->setSkillBloc($skillBloc);
        if ($form->isSubmitted() && $form->isValid()) {
            $optionBlocRepository->save($optionBloc, true);
        }
        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/bloc/{skillBloc}/optionBloc/{optionBloc}/ue/add', name: 'app_bloc_new_ue_to_option', methods: ['POST'])]
    public function addUeToOptionBloc(Request $request, $id, SkillBloc $skillBloc, OptionBloc $optionBloc, UeRepository $ueRepository): Response
    {
        /**
         * @var Ue $ue
         */
        $ue = new Ue();
        $form = $this->createForm(SelectUeType::class, $ue);
        $form->handleRequest($request);
        $ue = $ueRepository->findOneBy(['id' => $ue->getId()]);
        $ue->addOptionBloc($optionBloc);
        if ($form->isSubmitted()) {
            $ueRepository->save($ue, true);
        }
        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/bloc/{skillBloc}/ue/selected', name: 'app_bloc_new_selected', methods: ['POST'])]
    public function addSelectedUeToSkillBloc(Request $request, UeRepository $ueRepository, $id, SkillBloc $skillBloc): Response
    {
        $ue = new Ue();
        $form = $this->createForm(SelectUeType::class, $ue);
        $form->handleRequest($request);
        $ue = $ueRepository->findOneBy(['id' => $ue->getId()]);
        $ue->addSkillBloc($skillBloc);
        if ($form->isSubmitted()) {
            $ueRepository->save($ue, true);
        }
        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc->getId()], Response::HTTP_SEE_OTHER);
    }
    #[Route('/ue/new', name: 'app_bloc_new', methods: ['POST'])]
    public function newUE(SerializerInterface $serializer, Request $request, UeRepository $ueRepository, EntityManagerInterface $em): JsonResponse
    {
        $ue = new Ue();
        $data = $request->request->all()['ue'];
        $ue->setName($data['name'])
            ->setNbGroup($data['nbGroup'])
            ->setCapacityGroup($data['capacityGroup'])
        ;
        for($i = 0; $i < $ue->getNbGroup(); $i++){
            $newFollow = new Follow();
            $newFollow->setGroupNum($i+1)
            ->setUe($ue);
            $em->persist($newFollow);
            $ue->addFollow($newFollow);
        }
        $ueRepository->save($ue, true);
        $dataToSend = ['id' => $ue->getId(), 'name' => $ue->getName()];
        $data = $serializer->serialize([$dataToSend], JsonEncoder::FORMAT);
        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}/bloc/{skillBloc}/ue/{ue}/edit', name: 'app_bloc_ue_edit', methods: ['POST'])]
    public function editUe(Request $request, Ue $ue, $id, $skillBloc, UeRepository $ueRepository): Response
    {
        $form = $this->createForm(UeType::class, $ue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ueRepository->save($ue, true);
        }
        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc], Response::HTTP_SEE_OTHER);

    }

    #[Route('/{id}/bloc/{skillBloc}/optionBloc/{optionBloc}/edit', name: 'app_option_bloc_edit', methods: ['POST'])]
    public function editOptionBloc(Request $request, $id, SkillBloc $skillBloc, OptionBloc $optionBloc, OptionBlocRepository $optionBlocRepository): Response
    {
        $form = $this->createForm(OptionBlocType::class, $optionBloc);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $optionBlocRepository->save($optionBloc, true);
        }
        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/bloc/{skillBloc}/optionBloc/{optionBloc}/delete', name: 'app_option_bloc_delete', methods: ['POST'])]
    public function deleteOptionBloc(Request $request, $id, SkillBloc $skillBloc, OptionBloc $optionBloc, OptionBlocRepository $optionBlocRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$optionBloc->getId(), $request->request->get('_token'))) {
            $optionBlocRepository->remove($optionBloc, true);
        }
        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/bloc/{bloc}/edit', name: 'app_bloc_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SkillBloc $bloc, SkillBlocRepository $blocRepository, $id): Response
    {
        $form = $this->createForm(SkillBlocType::class, $bloc);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $blocRepository->save($bloc, true);
        }
        return $this->redirectToRoute('app_bloc_index', ['id' => $id], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/bloc/{bloc}/delete', name: 'app_bloc_delete', methods: ['POST'])]
    public function delete(Request $request, $id, SkillBloc $bloc, SkillBlocRepository $blocRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bloc->getId(), $request->request->get('_token'))) {
            $blocRepository->remove($bloc, true);
        }

        return $this->redirectToRoute('app_bloc_index', ['id' => $id], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/bloc/{skillBloc}/ue/{ue}/delete', name: 'app_skill_bloc_ue_delete', methods: ['POST'])]
    public function deleteUe(Request $request, $id, SkillBloc $skillBloc, Ue $ue, UeRepository $ueRepository): Response
    {
        $ue->removeSkillBloc($skillBloc);
        if ($this->isCsrfTokenValid('delete'.$ue->getId(), $request->request->get('_token'))) {
            $ueRepository->save($ue, true);
        }

        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/bloc/{skillBloc}/optionBloc/{optionBloc}/ue/{ue}/delete', name: 'app_option_bloc_ue_delete', methods: ['POST'])]
    public function deleteUeFromOpionBloc(Request $request, $id, SkillBloc $skillBloc,OptionBloc $optionBloc, Ue $ue, UeRepository $ueRepository): Response
    {
        $ue->removeOptionBloc($optionBloc);
        if ($this->isCsrfTokenValid('delete'.$ue->getId(), $request->request->get('_token'))) {
            $ueRepository->save($ue, true);
        }

        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $skillBloc->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{parcour}/ue/{ue}', name: 'app_students_choices_by_ue', methods: ['GET', 'POST'])]
    public function StudentsChoicesByUe(Parcour $parcour,
                                        StudentRepository $studentRepository, Ue $ue): Response
    {
        $students = $studentRepository->findByChoiceUEPriority($ue->getId());
        $sudentNoneFollowUe = $studentRepository->findStudentNoneFollowUe($ue->getId());
        $sudentFollowUe = $studentRepository->findStudentFollowUe($ue->getId());
        dump($sudentFollowUe);
        return $this->render('ue/followers.html.twig', [
            'students' => $students,
            'parcour' => $parcour,
            'currentUe' => $ue,
            'sudentNoneFollowUe' => $sudentNoneFollowUe,
            'sudentFollowUe' => $sudentFollowUe,
        ]);
    }

    #[Route('/{parcour}/ue/{ue}/liste-de-suivi', name: 'app_students_pursue', methods: ['GET', 'POST'])]
    public function persueListe(Parcour $parcour,
                                        StudentRepository $studentRepository, Ue $ue): Response
    {
        $students = $ue->getStudentsPursue();

        return $this->render('ue/student_pursue.html.twig', [
            'students' => $students,
            'currentParcour' => $parcour,
            'currentUe' => $ue,
        ]);
    }
    #[Route('/{parcour}/ue/{ue}/manage-groupe', name: 'app_students_pursue_manage_groupe', methods: ['GET', 'POST'])]
    public function manageGroupPursue(Parcour $parcour,
                                StudentRepository $studentRepository, Ue $ue): Response
    {
        $followers = $studentRepository->findStudentFollowUe($ue->getId());
        $overflowGrpNum = [];
        $overflow = false;
        if(count($followers) > 0){
            $students = $studentRepository->findStudentPursueUEOrderedByName($ue->getId());
            foreach ($ue->getFollows() as $grp){
                if (count($grp->getStudents()) > $ue->getCapacityGroup()){
                    $overflow = true;
                    $overflowGrpNum[] = $grp->getGroupNum();
                }
            }
        }else {
            $students = $ue->getStudentsPursue();
        }


        return $this->render('ue/manage_groups.html.twig', [
            'students' => $students,
            'currentParcour' => $parcour,
            'currentUe' => $ue,
            'overflow' => $overflow,
            'overflowGrpNum'=> $overflowGrpNum,
        ]);
    }

    #[Route('/{parcour}/ue/{ue}/alphabetical-destribution', name: 'app_students_alphabetical_distribution', methods: ['GET', 'POST'])]
    public function alphabeticalDistributionOfStudentIntoGroups(Parcour $parcour, Ue $ue, EntityManagerInterface $em,
                                                                FollowRepository $followRepository): Response
    {
        $students = $ue->getStudentsPursue();
        if(count($students) == 0){
            return $this->redirectToRoute('app_students_pursue_manage_groupe', ['parcour' => $parcour->getId(), 'ue' => $ue->getId()], Response::HTTP_SEE_OTHER);
        }
        foreach ($ue->getFollows() as $follow){
            $followRepository->remove($follow, true);
        }
        for($i = 0; $i < ($ue->getNbGroup()); $i++){
            $follow = (new Follow())->setGroupNum( $i + 1)
                ->setUe($ue)
            ;
            $em->persist($follow);
            $ue->addFollow($follow);
        }
        $em->flush();
        $arraystudents = $students->toArray();

        usort($arraystudents, function ($a, $b) {
            return strcmp($a->getUser()->getLastName(), $b->getUser()->getLastName());
        });

        $reparitionate = array_chunk($arraystudents, $ue->getCapacityGroup());

        $groups = $ue->getFollows()->getValues();
        for($i = 0; $i <$ue->getNbGroup(); $i++){
            if(!isset($reparitionate[$i])){
                break;
            }
            foreach ($reparitionate[$i] as $s){
                $groups[$i]->addStudent($s);
                $s->addFollow($groups[$i]);
            }
        }

        $overflow = false;
        for($j = $ue->getNbGroup(); $j < count($reparitionate); $j++){
            if(!isset($reparitionate[$j])){
                break;
            }
            $overflow = true;
            foreach ($reparitionate[$j] as $s){
                $groups[$i - 1]->addStudent($s);
                $s->addFollow($groups[$i - 1]);
                $overflowGrpNum[] = $groups[$i - 1]->getGroupNum();
            }
        }
        $em->flush();
        return $this->redirectToRoute('app_students_pursue_manage_groupe', ['parcour' => $parcour->getId(), 'ue' => $ue->getId()], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{parcour}/ue/{ue}/random', name: 'app_students_random_distribution', methods: ['GET', 'POST'])]
    public function randomDistributionOfStudentIntoGroups(Parcour $parcour,
                                        StudentRepository $studentRepository, Ue $ue, EntityManagerInterface $em,
                                                          FollowRepository $followRepository): Response
    {
        $students = $studentRepository->findByChoiceUEPriority($ue->getId());
        if(count($students) == 0){
            return $this->redirectToRoute('app_students_choices_by_ue', ['parcour' => $parcour->getId(), 'ue' => $ue->getId()], Response::HTTP_SEE_OTHER);
        }
        $studentsNumber = count($students);
        foreach ($ue->getFollows() as $follow){
            $followRepository->remove($follow, true);
        }
        for($i = 0; $i < ($ue->getNbGroup()); $i++){
            $follow = (new Follow())->setGroupNum( $i + 1);
            $em->persist($follow);
            $ue->addFollow($follow);
        }
        $em->flush();
        $ueNbGroup = count($ue->getFollows());
        $grpCapacity = $ue->getCapacityGroup();
        $maxCapacity = $ueNbGroup * $ue->getCapacityGroup();
        $currentCapacity = 0;
        $currentGrp = -1;
        while ($studentsNumber > 0) {
            $studentIndex = rand(0, $studentsNumber - 1);
            $studentsNumber--;
            $student = array_splice($students, $studentIndex, 1)[0];

            if($maxCapacity > $currentCapacity){
                if(($currentCapacity % $grpCapacity) == 0){
                    $currentGrp++;
                }
                ($ue->getFollows()->getValues()[$currentGrp])->addStudent($student);
                $currentCapacity++;
            }
        }
        $em->flush();
        $students = $studentRepository->findByChoiceUEPriority($ue->getId());
        return $this->redirectToRoute('app_students_choices_by_ue', ['parcour' => $parcour->getId(), 'ue' => $ue->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{parcour}/ue/{ue}/student/{student}/set_group', name: 'set_student_group', methods: ['GET', 'POST'])]
    public function setStudentGroup(Request $request, Parcour $parcour,
                                    StudentRepository $studentRepository, Ue $ue,
                                    Student $student, FollowRepository $followRepository, EntityManagerInterface $em): Response
    {
        $grpChosed = $request->request->get('select-grp');
        if($grpChosed != ''){
            if($followRepository->findByUeAndStudent($ue->getId(), $student->getId()) != null){
                $student->removeFollow($followRepository->findByUeAndStudent($ue->getId(), $student->getId()));
            }
            $student->addFollow($followRepository->find($grpChosed));
        } else {
            if($followRepository->findByUeAndStudent($ue->getId(), $student->getId()) != null){
                $student->removeFollow($followRepository->findByUeAndStudent($ue->getId(), $student->getId()));
            }
        }
        $em->flush();
        return $this->redirectToRoute('app_students_choices_by_ue', ['parcour' => $parcour->getId(), 'ue' => $ue->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{parcour}/ue/{ue}/{newUE}/student/{student}/set_ue_pursue', name: 'set_student_pursue', methods: ['GET', 'POST'])]
    public function setStudentPursue(Parcour $parcour, Ue $ue, Ue $newUE,
                                     Student $student, EntityManagerInterface $em): Response
    {
        $student->removePursue($ue);
        $ue->removeStudentsPursue($student);
        $newUE->addStudentsPursue($student);
        $student->addPursue($newUE);
        $em->flush();
        return $this->redirectToRoute('app_students_pursue', ['parcour' => $parcour->getId(), 'ue' => $ue->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{parcour}/ue/{ue}/student/{student}/get_Choice', name: 'get_student_choices_under_optionBloc', methods: ['GET'])]
    public function getStudentChoice(SerializerInterface $serializer, Parcour $parcour,Ue $ue, Student $student,
                                     ChoiceRepository $choiceRepository, EntityManagerInterface $em,
                                     StudentRepository $studentRepository, UeRepository $ueRepository): Response
    {
        $choicesUnderOptionBloc = $choiceRepository->findStudentChoiceUnderOptionBloc($ue->getId(), $student->getId());
        $i = 0;
        $choiceData = [];
        foreach ($choicesUnderOptionBloc as $choice){
            $choiceData[$i] = [
                'id' => $choice->getId(),
                'priority' => $choice->getPriority(),
                'student' => $student->getId(),
                'studentName' => $student->getUser()->getFirstName().' '.$student->getUser()->getLastName(),
                'ue' =>
                [
                    'id' =>$choice->getUe()->getId(),
                    'name' => $choice->getUe()->getName(),
                    'currentCapacity' => count($choice->getUe()->getStudentsPursue()),
                    'capacityMax' => $choice->getUe()->getNbGroup() * $choice->getUe()->getCapacityGroup(),
                ]
            ];
            $i++;
        }
        $data = $serializer->serialize(['dataChoice' =>$choiceData, 'dataStudent'=>['studentName' => $student->getUser()->getFirstName().' '.$student->getUser()->getLastName()]], 'json');
        return new JsonResponse($data, Response::HTTP_OK, [], true);;
    }
}
