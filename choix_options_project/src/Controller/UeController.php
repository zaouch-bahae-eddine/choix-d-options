<?php

namespace App\Controller;

use App\Entity\Follow;
use App\Entity\Promotion;
use App\Entity\Student;
use App\Entity\Ue;
use App\Form\UeType;
use App\Repository\FollowRepository;
use App\Repository\UeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/admin/bloc')]
class UeController extends AbstractController
{
    #[Route('/{bloc}/bloc/ues', name: 'app_ue_index', methods: ['GET'])]
    public function index(UeRepository $ueRepository): Response
    {
        return $this->render('ue/index.html.twig', [
            'ues' => $ueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ue_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UeRepository $ueRepository): Response
    {
        $ue = new Ue();
        $form = $this->createForm(UeType::class, $ue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ueRepository->save($ue, true);

            return $this->redirectToRoute('app_ue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ue/new.html.twig', [
            'ue' => $ue,
            'form' => $form,
        ]);
    }

    #[Route('/{parcour}/skillBloc/{skillBloc}/ue/{ue}/edit', name: 'app_ue_edit', methods: ['POST'])]
    public function edit(Request $request, Ue $ue, UeRepository $ueRepository, $parcour, $skillBloc,
                         EntityManagerInterface $em, FollowRepository $followRepository): Response
    {
        $oldUeGroupNumber = $ue->getNbGroup();
        $follows = $ue->getFollows()->toArray();
        $form = $this->createForm(UeType::class, $ue);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           //dd($oldUeGroupNumber , $ue->getNbGroup());
            if($oldUeGroupNumber < $ue->getNbGroup()){
                for($i = $oldUeGroupNumber; $i < $ue->getNbGroup(); $i++){
                    $newFollow = new Follow();
                    $newFollow->setGroupNum($i+1)
                        ->setUe($ue);
                    $em->persist($newFollow);
                    $ue->addFollow($newFollow);
                }
            } else if($oldUeGroupNumber > $ue->getNbGroup()){

                for($i = $oldUeGroupNumber; $i > $ue->getNbGroup(); $i--){
                    $ue->removeFollow($follows[$i - 1]);
                    $follows[$i - 1]->setUe(null);
                    $followRepository->remove($follows[$i - 1], true);
                }
            }
            $ueRepository->save($ue, true);
        }

        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $parcour, 'selectedBloc' => $skillBloc], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{parcour}/skillBloc/{skillBloc}/ue/{ue}/get', name: 'get_ue', methods: ['GET'])]
    public function getUe(SerializerInterface $serializer, Ue $ue): JsonResponse
    {
        $ueData = [
            'id'=> $ue->getId(),
            'name' => $ue->getName(),
            'nbGroup' => $ue->getNbGroup(),
            'capacityGroup'=> $ue->getCapacityGroup(),
        ];
        $data = $serializer->serialize($ueData, JsonEncoder::FORMAT);
        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}', name: 'app_ue_delete', methods: ['POST'])]
    public function delete(Request $request, Ue $ue, UeRepository $ueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ue->getId(), $request->request->get('_token'))) {
            $ueRepository->remove($ue, true);
        }

        return $this->redirectToRoute('app_ue_index', [], Response::HTTP_SEE_OTHER);
    }
}
