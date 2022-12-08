<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
class AppFixtures extends Fixture
{
    private $encode;

    public function __construct(UserPasswordHasherInterface $encoder) {
        $this->encode = $encoder;
    }
    public function load(ObjectManager $manager): void
    {

        $admin = new User();
        $admin->setFirstName("admin_firstName")
            ->setLastName("admin_lastName")
            ->setEmail("admin@upjv.fr")
            ->setRoles(["ROLE_ADMIN"]);
        $hashedPassword = $this->encode->hashPassword(
            $admin,
            "123"
        );
        $admin->setPassword($hashedPassword);

        $manager->persist($admin);

        $etudiant = new User();
        $etudiant->setFirstName("etud_firstName")
            ->setLastName("etud_lastName")
            ->setEmail("etud@upjv.fr")
            ->setRoles(["ROLE_ETUDIANT"]);
        $hashedPassword = $this->encode->hashPassword(
            $etudiant,
            "123"
        );
        $etudiant->setPassword($hashedPassword);

        $manager->persist($etudiant);

        $manager->flush();
    }
}
