<?php

namespace App\Controller;

use App\Entity\SkillBloc;
use App\Entity\Parcour;
use App\Entity\Student;
use App\Entity\Ue;
use App\Form\SelectUeType;
use App\Form\SkillBlocType;
use App\Form\UeType;
use App\Repository\SkillBlocRepository;
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
    public function index(Request $request, SkillBlocRepository $blocRepository, Parcour $parcour,
                          ParcourRepository $parcourRepository,UeRepository $ueRepository, $selectedBloc = 0): Response
    {
        $skillBloc = new SkillBloc();
        $formSkillBloc = $this->createForm(SkillBlocType::class, $skillBloc);
        $formSkillBloc->handleRequest($request);

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
            'formSelectUe' => $formSelectUe
        ]);
    }

    #[Route('/{id}/bloc/{skillBloc}/ue/new', name: 'app_bloc_new_selected', methods: ['POST'])]
    public function newUE(Request $request, UeRepository $ueRepository, $id, SkillBloc $skillBloc): Response
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
    #[Route('/{id}/bloc/{bloc}/ue/{ue}/delete', name: 'app_bloc_ue_delete', methods: ['POST'])]
    public function deleteUe(Request $request, $id, $bloc, Ue $ue, UeRepository $ueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ue->getId(), $request->request->get('_token'))) {
            $ueRepository->remove($ue, true);
        }

        return $this->redirectToRoute('app_bloc_selected_index', ['id' => $id, 'selectedBloc' => $bloc], Response::HTTP_SEE_OTHER);
    }
}
