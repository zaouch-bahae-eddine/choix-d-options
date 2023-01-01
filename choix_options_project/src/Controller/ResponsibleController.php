<?php
use App\Entity\Promotion;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\PromotionRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use SpecShaper\EncryptBundle\Encryptors\EncryptorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Faker;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
#[Route('/admin/promotion')]
class ResponsibleController extends AbstractController
{
    #[Route('/responsible', name: 'app_responsible_index', methods: ['GET', 'POST'])]
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
}