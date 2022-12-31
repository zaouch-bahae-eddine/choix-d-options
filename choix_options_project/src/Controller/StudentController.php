<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Faker;
#[Route('/admin/promotion')]
class StudentController extends AbstractController
{
    #[Route('/{promotion}/student', name: 'app_student_index', methods: ['GET', 'POST'])]
    public function index(Request $request, UserRepository $userRepository, Promotion $promotion, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        $faker = Faker\Factory::create('fr_FR');
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $faker->password
        );
        $user->setRoles(['ROLE_ETUDIANT'])
        ->setPromotion($promotion)
        ->setPassword($hashedPassword);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_student_index', ['promotion' => $promotion->getId()], Response::HTTP_SEE_OTHER);
        }
        return $this->render('student/index.html.twig', [
            'users' => $userRepository->findByRoleAndPromotion('ROLE_ETUDIANT', $promotion->getId()),
            'user' => $user,
            'form' => $form,
            'formEdit' => $form,
            'promotionId' => $promotion->getId(),
        ]);
    }

    #[Route('/{promotion}/student/{student}/edit', name: 'app_student_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, $promotion, User $student, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $student);
        $form->handleRequest($request);
        //dd($form->isSubmitted(),$form->isValid(), $form->getErrors() );

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($student, true);
        }
        return $this->redirectToRoute('app_student_index', ['promotion' => $promotion], Response::HTTP_SEE_OTHER);

    }

    #[Route('/{promotion}/student/{student}/delete', name: 'app_student_delete', methods: ['POST'])]
    public function delete(Request $request, $promotion, User $student, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$student->getId(), $request->request->get('_token'))) {
            $userRepository->remove($student, true);
        }

        return $this->redirectToRoute('app_student_index', ['promotion' => $promotion], Response::HTTP_SEE_OTHER);
    }
}
