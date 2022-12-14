<?php

namespace App\Form;

use App\Entity\Parcour;
use App\Entity\Promotion;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PromotionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('anneeMaster', ChoiceType::class, [
                'choices'  => [
                    'Master-1' => 1,
                    'Master-2' => 2
                ],
            ])
            ->add('parcour', EntityType::class, [
                'class' => Parcour::class,
                'choice_label' => 'name',
            ])
            ->add('datePromotion')
            ->add('dateLimiteChoixOptions')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Promotion::class,
        ]);
    }
}
