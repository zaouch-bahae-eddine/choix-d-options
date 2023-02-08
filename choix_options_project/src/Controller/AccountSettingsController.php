<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AccountSettingsType;
use Doctrine\ORM\EntityManagerInterface;
use SpecShaper\EncryptBundle\Encryptors\EncryptorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountSettingsController extends AbstractController
{
    /**
     * @Route("/account/settings", name="account_settings")
     */
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher,
                          EntityManagerInterface $entityManager, EncryptorInterface $encryptor)
    {
        // get the user
        /**
         * @var User $user
         */
        $user = $this->getUser();
        $form = $this->createForm(AccountSettingsType::class, null);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            if (!$passwordHasher->isPasswordValid($user, $data['oldPassword'])) {
                throw new AccessDeniedHttpException();
            }
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $data['newPassword']
            );
            $user
                ->setFirstName($data['firstName'])
                ->setLastName($data['lastName'])
                ->setEmail($data['email'])
                ->setPassword($hashedPassword)
                ->setEncrypted($encryptor->encrypt($data['newPassword']))
            ;
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('account_settings');
        }

        return $this->render('account_settings/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}