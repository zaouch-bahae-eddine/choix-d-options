<?php

namespace App\Form;

use App\Entity\Ue;
use App\Repository\UeRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SelectUeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $ueOfYear = $options['ueOfYear'];
        $builder
            ->add('id', EntityType::class, [
                'class' => Ue::class,
                'choices' => $ueOfYear,
                'choice_label' => 'name',
                'choice_value' => 'id',

        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ue::class,
            'ueOfYear' => null,
        ]);
    }
}
