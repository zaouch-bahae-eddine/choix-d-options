<?php

namespace App\Controller;

use App\Entity\Ue;
use App\Form\UeType;
use App\Repository\UeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/bloc/')]
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

    #[Route('/{id}/edit', name: 'app_ue_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ue $ue, UeRepository $ueRepository): Response
    {
        $form = $this->createForm(UeType::class, $ue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ueRepository->save($ue, true);

            return $this->redirectToRoute('app_ue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ue/edit.html.twig', [
            'ue' => $ue,
            'form' => $form,
        ]);
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
