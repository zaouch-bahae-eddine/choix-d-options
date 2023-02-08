<?php

namespace App\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class AccountSettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('lastName', TextType::class, [
                'label' => 'Nom'
            ])
            ->add('email', TextType::class, [
                'label' => 'Email'
            ])
            ->add('oldPassword', PasswordType::class, [
                'label' => 'Mot de passe courrant'
            ])
            ->add('newPassword', PasswordType::class, [
                'label' => 'Nouveau mot de passe'
            ]);
    }
}
