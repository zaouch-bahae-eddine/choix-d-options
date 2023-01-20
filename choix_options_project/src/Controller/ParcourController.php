<?php

namespace App\Controller;

use App\Entity\Parcour;
use App\Form\ParcourType;
use App\Repository\ParcourRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/parcour')]
class ParcourController extends AbstractController
{
    #[Route('/', name: 'app_parcour_index', methods: ['GET', 'POST'])]
    public function index(Request $request, ParcourRepository $parcourRepository): Response
    {
        $parcour = new Parcour();
        $form = $this->createForm(ParcourType::class, $parcour);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $parcourRepository->save($parcour, true);

            return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('parcour/index.html.twig', [
            'parcours' => $parcourRepository->findAll(),
            'parcour' => $parcour,
            'form' => $form,
            'formEdit' => $form,
        ]);
    }

    #[Route('/new', name: 'app_parcour_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ParcourRepository $parcourRepository): Response
    {
        $parcour = new Parcour();
        $form = $this->createForm(ParcourType::class, $parcour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $parcourRepository->save($parcour, true);

            return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('parcour/new.html.twig', [
            'parcour' => $parcour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_parcour_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Parcour $parcour, ParcourRepository $parcourRepository): Response
    {
        $form = $this->createForm(ParcourType::class, $parcour);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $parcourRepository->save($parcour, true);

            return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('parcour/edit.html.twig', [
            'parcour' => $parcour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_parcour_delete', methods: ['POST'])]
    public function delete(Request $request, Parcour $parcour, ParcourRepository $parcourRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$parcour->getId(), $request->request->get('_token'))) {
            $parcourRepository->remove($parcour, true);
        }

        return $this->redirectToRoute('app_parcour_index', [], Response::HTTP_SEE_OTHER);
    }
}
