<?php

namespace App\Controller;

use App\Entity\Choice;
use App\Entity\Student;
use App\Entity\Ue;
use App\Repository\ChoiceRepository;
use App\Repository\FollowRepository;
use App\Repository\SkillBlocRepository;
use App\Repository\StudentRepository;
use App\Repository\UeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use function Symfony\Bundle\FrameworkBundle\Controller\redirectToRoute;

#[Route('/etudiant')]
class EtudiantController extends AbstractController
{
    #[Route('/choix_options', name: 'etudiant_home', methods: ['GET', 'POST'])]
    public function index(StudentRepository $studentRepository, UeRepository $ueRepository): Response
    {

        /**
         * @var Student $student
         */
        $student = $this->getUser()->getStudents()->first();
        $validateUes = [];

        if($student == null) {
            return $this->render('etudiant/index.html.twig', [
                'errors' => [],
                'currentChoice' => [],
                'student' => $student,
                'validatedUesByOptionBloc' => []
            ]);
        }
        foreach ($student->getParcour()->getSkillBlocs() as $skillBloc){
            foreach ($skillBloc->getOptionBlocs() as $optionBloc){
                $validateUes[$optionBloc->getId()] = $ueRepository->findValidatedUesInOptionBloc($optionBloc->getId(), $student->getId());
            }
        }

        $choicesKeys = array_map(function (Choice $c) {
            return 'student-'.$this->getUser()->getStudents()->first()->getId().'-ue-'.$c->getUe()->getId();
            }, $student->getChoices()->getValues());
        $choicesValues = array_map(function (Choice $c) {
            return $c->getPriority();
        }, $student->getChoices()->getValues());

        $associativeChoices = array_combine($choicesKeys, $choicesValues);

        return $this->render('etudiant/index.html.twig', [
            'errors' => [],
            'currentChoice' => $associativeChoices,
            'student' => $student,
            'validatedUesByOptionBloc' => $validateUes,
        ]);
    }
    #[Route('/suivi', name: 'etudiant_pursue', methods: ['GET', 'POST'])]
    public function pursue(StudentRepository $studentRepository, UeRepository $ueRepository, FollowRepository $followRepository): Response
    {

        /**
         * @var Student $student
         */
        $student = $this->getUser()->getStudents()->first();
        $validateUes = [];

        if($student == null) {
            return $this->render('etudiant/index.html.twig', [
                'errors' => [],
                'currentChoice' => [],
                'student' => $student,
                'validatedUesByOptionBloc' => []
            ]);
        }
        foreach ($student->getParcour()->getSkillBlocs() as $skillBloc){
            foreach ($skillBloc->getUes()  as $ueObligatoire){
                $pursueKeys[] = 'student-'.$this->getUser()->getStudents()->first()->getId().'-skillBloc-'.$skillBloc->getId().'-ue-'.$ueObligatoire->getId();
                $pursueValues[] = $followRepository->findByUeAndStudent($ueObligatoire->getId(), $this->getUser()->getStudents()->first()->getId());
            }
            foreach ($skillBloc->getOptionBlocs() as $optionBloc){
                $validateUes[$optionBloc->getId()] = $ueRepository->findValidatedUesInOptionBloc($optionBloc->getId(), $student->getId());
                foreach ($optionBloc->getUes() as $ueOtional){
                    $pursueKeys[] = 'student-'.$this->getUser()->getStudents()->first()->getId().'-skillBloc-'.$skillBloc->getId().'-ue-'.$ueOtional->getId();
                    $pursueValues[] = $followRepository->findByUeAndStudent($ueOtional->getId(), $this->getUser()->getStudents()->first()->getId());
                }
            }
        }
        $associativePursue = array_combine($pursueKeys, $pursueValues);
        return $this->render('etudiant/pursue.html.twig', [
            'errors' => [],
            'currentPursue' => $associativePursue,
            'student' => $student,
            'validatedUesByOptionBloc' => $validateUes,
        ]);
    }


    #[Route('/choix_options/save', name: 'save_choice', methods: ['POST'])]
    public function addChoice(SerializerInterface $serializer, Request $request, EntityManagerInterface $em,
                              ChoiceRepository $choiceRepository, UeRepository $ueRepository): JsonResponse
    {
        /**
         * @var Student $student
         */
        $student = $this->getUser()->getStudents()->first();
        $skillBlocs = $student->getParcour()->getSkillBlocs();
        $data = $request->request->all();
        //Avant d'ajouter les choix on supprime les antécédents
        foreach ($student->getChoices() as $choice){
            $choiceRepository->remove($choice, true);
        }

        /**
         * @var Ue $pursue
         * @var Ue $ue
         */
        //Vidé la list de suivis
        foreach ($student->getPursue() as $pursue){
            $student->removePursue($pursue);
            $pursue->removeStudentsPursue($student);
        }

        //ajouter le choix de l'etudiant
        foreach ($skillBlocs as $skillBloc){
            foreach ($skillBloc->getOptionBlocs() as $optionBloc){
                $validateUesByOptionBloc = count($ueRepository->findValidatedUesInOptionBloc($optionBloc->getId(), $student->getId()));
                foreach ($optionBloc->getUes() as $ue){
                    // Verifier la date du choix

                    if(isset($data['optionBloc-'.$optionBloc->getId().'-ue-'.$ue->getId().'-priority']) && $data['optionBloc-'.$optionBloc->getId().'-ue-'.$ue->getId().'-priority'] != ''){
                        $priority = $data['optionBloc-'.$optionBloc->getId().'-ue-'.$ue->getId().'-priority'];
                        $choice = new Choice();
                        $choice->setStudent($student)
                            ->setUe($ue)
                            ->setPriority($priority + $validateUesByOptionBloc);

                        if($priority + $validateUesByOptionBloc <= $optionBloc->getNbUeToChose()){
                            $student->addPursue($ue);
                            $ue->addStudentsPursue($student);
                        }
                        $em->persist($choice);
                    }
                }
            }
        }
        $em->flush();
        $response = $serializer->serialize(['message' => 'Choix enregister'], JsonEncoder::FORMAT);
        return new JsonResponse($response, Response::HTTP_OK, [], true);
    }

    #[Route('/choix_options/save-old', name: 'save_choice_old', methods: ['POST'])]
    public function add(Request $request, UeRepository $ueRepository, EntityManagerInterface $em,
                        SkillBlocRepository $blocRepository, StudentRepository $studentRepository): Response
    {
        $edit = false;
        $user = $studentRepository->findOneBy(['user' => $this->getUser(), 'active' => true]);
        if($user == null) {
            $errors[] = 'Vous n\'êtes pas encore ajouter à une promotion, Contacter votre responsable de master';
            return $this->render('etudiant/index.html.twig', [
                'errors' => $errors,
                'currentChoice' => [],
                'student' => $user
            ]);
        }
        $errors = [];
        // choix enregistré dans la BD
        $currentChoice = array_map(function($e){
            return $e->getUe()->getId();
        }, $user->getChoices()->getValues());

        if(count($currentChoice) > 0){
            $edit = true;
        }
        //Choix envoyer
        $ueChosed = $request->request->all('choices');

        //All blocs
        $blocs = array_map(function($e) {
            return is_object($e) ? $e->getId() : 0;
        }, $user->getPromotion()->getParcour()->getBlocs()->getValues());

        //UE obligatoires
        $ueMandatory =  $ueRepository->findBy(['bloc' => $blocs, 'status' => 2]);
        $ueMandatoryIds = array_map(function($e) {
            return is_object($e) ? $e->getId() : 0;
        },$ueMandatory);

        //Si le choix envoyer est deja enregistré dans la BD
        if($edit && !array_diff(array_values(array_diff($ueChosed, $currentChoice)), $ueMandatoryIds)){
            return $this->redirectToRoute('etudiant_home', [
                'errors' => [],
                'currentChoice' => $currentChoice
            ], Response::HTTP_SEE_OTHER);
        }

        //Verification de la datelimite
        /*$now = new \DateTime();
        if(($user->getPromotion()->getDateLimiteChoixOptions()->format('U') - $now->format('U')) < 0 ){
            $errors[] = 'délai de choix est dépassé, veuillez contacter votre responsable de formation';
            return $this->render('etudiant/index.html.twig', [
                'errors' => $errors,
                'currentChoice' => $currentChoice,
                'student' => $user
            ]);
        }*/

        //Delete current Choice to save a new choice
        if($edit){
            /**
             * @var Choice $choice
             */
            foreach ($user->getChoices() as $choice){
                $choice->getUe()->setCurrentCapacity($choice->getUe() - 1);
                $em->remove($choice);
            }
        }
        $em->flush();

        // UE optionnelle possible
        $uesPossible = $ueRepository->findBy(['bloc' => $blocs, 'status' => 1]);
        $uesPossibleHash = [];
        $uesPossibleIds = array_map(function($e) {
                return is_object($e) ? $e->getId() : 0;
            },$uesPossible);
        foreach ($uesPossible as $ue){
            $uesPossibleHash[$ue->getId()] = $ue;
        }
        // Verifier si les nouvaux choix sont autorisés
        if(($blocRepository->getNbUePossible($user->getPromotion()->getParcour()) != count($ueChosed)) || (count(array_values(array_diff($ueChosed, $uesPossibleIds))) > 0) ){
            $errors[] = 'les UEs choisi ne corespond pas à votre parcoure';
            return $this->render('etudiant/index.html.twig', [
                'errors' => $errors,
                'currentChoice' => $currentChoice,
            ]);
        }

        //Ajouter les UEs optionnelles
        foreach ($ueChosed as $ueId){
            $ue = $uesPossibleHash[''.$ueId];
            if($ue->getCurrentCapacity() >= ($ue->getNbGroup()* $ue->getCapacityGroup())){
                $errors[] = 'Capacité des groupe atteinte veillez contacter votre responsable de l\'année pour trouver une solution';
                return $this->render('etudiant/index.html.twig', [
                    'errors' => $errors,
                    'currentChoice' => $currentChoice,
                    'student' => $user
                ]);
            } else {
                $currentGroupe = round(($ue->getCurrentCapacity() + 1) / $ue->getCapacityGroup()) + 1;
                if(!$edit){
                    $ue->setCurrentCapacity($ue->getCurrentCapacity() + 1);
                }
            }
            $choice = (new Choice())
                ->setStudent($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }

        //Ajouter les UEs obligatoires
        foreach ($ueMandatory as $ue){
            if($ue->getCurrentCapacity() >= ($ue->getNbGroup()* $ue->getCapacityGroup())){
                $errors[] = 'Capacité des groupes atteinte veillez contacter votre responsable de l\'année pour trouver une solution';
                return $this->render('etudiant/index.html.twig', [
                    'errors' => $errors,
                    'currentChoice' => $currentChoice,
                    'student' => $user
                ]);
            } else {
                $currentGroupe = round(($ue->getCurrentCapacity() + 1) / $ue->getCapacityGroup()) + 1;
                if(!$edit){
                    $ue->setCurrentCapacity($ue->getCurrentCapacity() + 1) ;
                }
            }
            $choice = (new Choice())
                ->setStudent($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }
        if(count($errors) > 0){
            return $this->render('etudiant/index.html.twig', [
                'errors' => $errors,
                'currentChoice' => $currentChoice,
                'student' => $user
            ]);
        }
        $em->flush();
        return $this->render('etudiant/index.html.twig', [
            'errors' => [],
            'currentChoice' => $currentChoice,
            'student' => $user
        ]);
    }
}
