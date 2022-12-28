<?php

namespace App\Controller;

use App\Entity\Bloc;
use App\Entity\Parcour;
use App\Form\BlocType;
use App\Repository\BlocRepository;
use App\Repository\ParcourRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/parcour')]
class BlocController extends AbstractController
{
    #[Route('/{id}/bloc', name: 'app_bloc_index', methods: ['GET', 'POST'])]
    public function index(Request $request, BlocRepository $blocRepository, Parcour $parcour, ParcourRepository $parcourRepository): Response
    {
        $bloc = new Bloc();
        $form = $this->createForm(BlocType::class, $bloc);
        $form->handleRequest($request);

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
        ]);
    }

    #[Route('/{id}/bloc/{bloc}/edit', name: 'app_bloc_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bloc $bloc, BlocRepository $blocRepository, $id): Response
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
    public function delete(Request $request, Bloc $bloc, BlocRepository $blocRepository, $id): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bloc->getId(), $request->request->get('_token'))) {
            $blocRepository->remove($bloc, true);
        }

        return $this->redirectToRoute('app_bloc_index', ['id' => $id], Response::HTTP_SEE_OTHER);
    }
}
