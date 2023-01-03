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
use function Monolog\error;
use function Symfony\Component\String\length;
use function Symfony\Component\VarExporter\__get;

#[Route('/etudiant')]
class EtudiantController extends AbstractController
{
    #[Route('/choix_options', name: 'etudiant_home', methods: ['GET', 'POST'])]
    public function index(): Response
    {
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
    #[Route('/choix_options/add', name: 'add_choice', methods: ['POST'])]
    public function add(Request $request, UeRepository $ueRepository, EntityManagerInterface $em, BlocRepository $blocRepository): Response
    {
        $user = $this->getUser();
        $errors = [];
        /*$now = new \DateTime();
        if(($user->getPromotion()->getDateLimiteChoixOptions()->format('U') - $now->format('U')) < 0 ){
            $errors[] = 'délai de choix est dépassé, veuillez contacter votre responsable de formation';
        }*/
        $blocs = array_map(function($e) {
                return is_object($e) ? $e->getId() : 0;
            }, $user->getPromotion()->getParcour()->getBlocs()->getValues());

        $uesPossible = $ueRepository->findBy(['bloc' => $blocs, 'status' => 1]);
        $uesPossibleHash = [];
        $uesPossibleIds = array_map(function($e) {
                return is_object($e) ? $e->getId() : 0;
            },$uesPossible);
        foreach ($uesPossible as $ue){
            $uesPossibleHash[$ue->getId()] = $ue;
        }
        $ueChosed = $request->request->all('choices');
        if(($blocRepository->getNbUePossible($user->getPromotion()->getParcour()) != count($ueChosed)) || array_diff($uesPossibleIds, $ueChosed)){
            $errors[] = 'les UEs choisi ne corespond pas à votre parcoure';
        }
        //Ajouter les UEs optionnelles
        $currentGroupe = 0;
        foreach ($ueChosed as $ueId){
            $ue = $uesPossibleHash[''.$ueId];
            if($ue->getCurrentCapacity() == ($ue->getNbGroup()* $ue->getCapacityGroup())){
                $errors[] = 'Capacité des groupe atteinte veillez contacter votre responsable de l\'année pour trouver une solution';
            } else {
                $currentGroupe = round($ue->getCurrentCapacity() / $ue->getCapacityGroup()) + 1;
                $ue->setCapacityGroup($ue->getCapacityGroup() + 1);
            }
            $choice = (new Choice())
                ->setUser($user)
                ->setUe($ue)
                ->setGroupe($currentGroupe);
            $em->persist($choice);
        }
        //Ajouter les UEs obligatoires
        foreach ($ueRepository->findBy(['bloc' => $blocs, 'status' => 2]) as $ue){
            if($ue->getCurrentCapacity() == ($ue->getNbGroup()* $ue->getCapacityGroup())){
                $errors[] = 'Capacité des groupe atteinte veillez contacter votre responsable de l\'année pour trouver une solution';
            } else {
                $currentGroupe = round($ue->getCurrentCapacity() / $ue->getCapacityGroup()) + 1;
                $ue->setCapacityGroup($ue->getCapacityGroup() + 1);
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
            ]);
        }
        return $this->render('etudiant/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
//    private function getGroup(Ue $ue){
//        $ue->
//    }
}
