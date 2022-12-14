<?php

namespace App\Controller;

use App\Entity\Choice;
use App\Repository\BlocRepository;
use App\Repository\UeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Bundle\FrameworkBundle\Controller\redirectToRoute;

#[Route('/etudiant')]
class EtudiantController extends AbstractController
{
    #[Route('/choix_options', name: 'etudiant_home', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        $currentChoice = array_map(function($e){
            return $e->getUe()->getId();
        },$this->getUser()->getChoices()->getValues());
        return $this->render('etudiant/index.html.twig', [
            'errors' => [],
            'currentChoice' => $currentChoice,
        ]);
    }
    #[Route('/choix_options/save', name: 'save_choice', methods: ['POST'])]
    public function add(Request $request, UeRepository $ueRepository, EntityManagerInterface $em, BlocRepository $blocRepository): Response
    {
        $edit = false;
        $user = $this->getUser();
        $errors = [];
        // choix enregistrĂ© dans la BD
        $currentChoice = array_map(function($e){
            return $e->getUe()->getId();
        },$this->getUser()->getChoices()->getValues());

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

        //Si le choix envoyer est deja enregistrĂ© dans la BD
        if($edit && !array_diff(array_values(array_diff($ueChosed, $currentChoice)), $ueMandatoryIds)){
            return $this->redirectToRoute('etudiant_home', [
                'errors' => [],
                'currentChoice' => $currentChoice
            ], Response::HTTP_SEE_OTHER);
        }

        //Verification de la datelimite
        /*$now = new \DateTime();
        if(($user->getPromotion()->getDateLimiteChoixOptions()->format('U') - $now->format('U')) < 0 ){
            $errors[] = 'dĂ©lai de choix est dĂ©passĂ©, veuillez contacter votre responsable de formation';
            return $this->render('etudiant/index.html.twig', [
                'errors' => $errors,
                'currentChoice' => $currentChoice,
            ]);
        }*/

        //Delete current Choice to save a new choice
        if($edit){
            foreach ($user->getChoices() as $choice){
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
        // Verifier si les nouvaux choix sont autorisĂ©s
        if(($blocRepository->getNbUePossible($user->getPromotion()->getParcour()) != count($ueChosed)) || (count(array_values(array_diff($ueChosed, $uesPossibleIds))) > 0) ){
            $errors[] = 'les UEs choisi ne corespond pas Ă  votre parcoure';
            return $this->render('etudiant/index.html.twig', [
                'errors' => $errors,
                'currentChoice' => $currentChoice,
            ]);
        }

        //Ajouter les UEs optionnelles
        foreach ($ueChosed as $ueId){
            $ue = $uesPossibleHash[''.$ueId];
            if($ue->getCurrentCapacity() == ($ue->getNbGroup()* $ue->getCapacityGroup())){
                $errors[] = 'CapacitĂ© des groupe atteinte veillez contacter votre responsable de l\'annĂ©e pour trouver une solution';
                return $this->render('etudiant/index.html.twig', [
                    'errors' => $errors,
                    'currentChoice' => $currentChoice,
                ]);
            } else {
                $currentGroupe = round($ue->getCurrentCapacity() / $ue->getCapacityGroup()) + 1;
                if(!$edit){
                    $ue->setCurrentCapacity($ue->getCurrentCapacity() + 1);
                }
            }
            $choice = (new Choice())
                ->setUser($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }

        //Ajouter les UEs obligatoires
        foreach ($ueMandatory as $ue){
            if($ue->getCurrentCapacity() == ($ue->getNbGroup()* $ue->getCapacityGroup())){
                $errors[] = 'CapacitĂ© des groupe atteinte veillez contacter votre responsable de l\'annĂ©e pour trouver une solution';
                return $this->render('etudiant/index.html.twig', [
                    'errors' => $errors,
                    'currentChoice' => $currentChoice,
                ]);
            } else {
                $currentGroupe = round($ue->getCurrentCapacity() / $ue->getCapacityGroup()) + 1;
                if(!$edit){
                    $ue->setCurrentCapacity($ue->getCurrentCapacity() + 1);
                }
            }
            $choice = (new Choice())
                ->setUser($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }
        if(count($errors) > 0){
            return $this->render('etudiant/index.html.twig', [
                'errors' => $errors,
                'currentChoice' => $currentChoice,
            ]);
        }
        $em->flush();
        return $this->render('etudiant/index.html.twig', [
            'errors' => [],
            'currentChoice' => $currentChoice,
        ]);
    }
}
