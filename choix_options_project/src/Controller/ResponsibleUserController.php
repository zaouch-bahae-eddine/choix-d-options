<?php
namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use SpecShaper\EncryptBundle\Encryptors\EncryptorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Faker;
#[Route('/admin/responsible')]
class ResponsibleUserController extends AbstractController
{
    #[Route('/', name: 'app_responsible_index', methods: ['GET', 'POST'])]
    public function index(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher, EncryptorInterface $encryptor): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $faker = Faker\Factory::create('fr_FR');
        $fakePassword = $faker->password;
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $fakePassword
        );
        $user->setRoles(['ROLE_ADMIN'])
        ->setPassword($hashedPassword)
        ->setEncrypted($encryptor->encrypt($fakePassword));

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_responsible_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('responsible/index.html.twig', [
            'users' => $userRepository->findByRole('ROLE_ADMIN'),
            'user' => $user,
            'form' => $form,
            'formEdit' => $form,
        ]);
    }

    #[Route('/{user}/edit', name: 'app_responsible_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);
        }
        return $this->redirectToRoute('app_responsible_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{user}/delete', name: 'app_responsible_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_responsible_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/send', name: 'app_responsible_send', methods: ['POST'])]
    public function sendEmail(MailerInterface $mailer, UserRepository $userRepository, EncryptorInterface $encryptor): Response
    {
        foreach ($userRepository->findByRole('ROLE_ADMIN') as $user){
            $email = (new TemplatedEmail())
                ->from('ne-pas-repondre@upjv.fr')
                ->to($user->getEmail())
                ->subject('[upjv] Choix d\'options')
                ->htmlTemplate('emails/studentAccount.html.twig')
                ->context([
                    'firstName' => $user->getFirstName(),
                    'lastName' => $user->getLastName(),
                    'emailStudent' => $user->getEmail(),
                    'password' => $encryptor->decrypt($user->getEncrypted())
                ])
            ;
            $mailer->send($email);
        }
        return $this->redirectToRoute('app_responsible_index', [], Response::HTTP_SEE_OTHER);
    }
}