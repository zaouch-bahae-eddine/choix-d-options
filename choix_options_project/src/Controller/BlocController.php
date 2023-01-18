<?php

namespace App\Controller;

use App\Entity\SkillBloc;
use App\Entity\Parcour;
use App\Entity\Student;
use App\Entity\Ue;
use App\Form\BlocType;
use App\Form\UeType;
use App\Repository\BlocRepository;
use App\Repository\ParcourRepository;
use App\Repository\UeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/parcour')]
class BlocController extends AbstractController
{
    #[Route('/{id}/bloc', name: 'app_bloc_index', methods: ['GET', 'POST'])]
    #[Route('/{id}/bloc/{selectedBloc}', name: 'app_bloc_selected_index', methods: ['GET', 'POST'])]
    public function index(Request $request, BlocRepository $blocRepository, Parcour $parcour, ParcourRepository $parcourRepository, $selectedBloc = 0): Response
    {
        $bloc = new SkillBloc();
        $form = $this->createForm(BlocType::class, $bloc);
        $form->handleRequest($request);

        $ue = new Ue();
        $formUe = $this->createForm(UeType::class, $ue);

        if ($form->isSubmitted() && $form->isValid()) {
            $bloc->setParcour($parcour);
            $blocRepository->save($bloc, true);

            return $this->redirectToRoute('app_bloc_index', ['id' => $parcour->getId()], Response::HTTP_SEE_OTHER);
        }
        return $this->render('bloc/index.html.twig', [
            'blocs' => $parcour->getBlocs(),
            'bloc' => $bloc,
            'form' => $form,
            'formEdit' => $form,
            'selectedParcourId' => $parcour->getId(),
            'parcours' => $parcourRepository->findAll(),
            'formUe' => $formUe,
            'formUeEdit' => $formUe,
            'selectedBloc' => $selectedBloc
        ]);
    }

    #[Route('/{id}/bloc/{bloc}/ue/new', name: 'app_bloc_ue_new', methods: ['POST'])]
    public function newUE(Request $request, UeRepository $ueRepository, $id, SkillBloc $bloc): Response
    {
        $ue = new Ue();
        $form = $this->createForm(UeType::class, $ue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ue->setBloc($bloc);
            $ueRepository->save($ue, true);
        }

        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $bloc->getId()], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/bloc/{bloc}/ue/{ue}/edit', name: 'app_bloc_ue_edit', methods: ['POST'])]
    public function editUe(Request $request, Ue $ue, $id, $bloc, UeRepository $ueRepository): Response
    {
        $form = $this->createForm(UeType::class, $ue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ueRepository->save($ue, true);
        }
        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $bloc], Response::HTTP_SEE_OTHER);

    }

    #[Route('/{id}/bloc/{bloc}/edit', name: 'app_bloc_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SkillBloc $bloc, BlocRepository $blocRepository, $id): Response
    {
        $form = $this->createForm(BlocType::class, $bloc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $blocRepository->save($bloc, true);

            return $this->redirectToRoute('app_bloc_index', ['id' => $id], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bloc/edit.html.twig', [
            'bloc' => $bloc,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/bloc/{bloc}/delete', name: 'app_bloc_delete', methods: ['POST'])]
    public function delete(Request $request, $id, SkillBloc $bloc, BlocRepository $blocRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bloc->getId(), $request->request->get('_token'))) {
            $blocRepository->remove($bloc, true);
        }

        return $this->redirectToRoute('app_bloc_index', ['id' => $id], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/bloc/{bloc}/ue/{ue}/delete', name: 'app_bloc_ue_delete', methods: ['POST'])]
    public function deleteUe(Request $request, $id, $bloc, Ue $ue, UeRepository $ueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ue->getId(), $request->request->get('_token'))) {
            $ueRepository->remove($ue, true);
        }

        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $bloc], Response::HTTP_SEE_OTHER);
    }
}
