<?php

namespace App\Form;

use App\Entity\PeriodChoice;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeriodChoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('debut', DateTimeType::class, [
                'placeholder' => [
                    'year' => 'Année', 'month' => 'mois', 'day' => 'jour',
                    'hour' => 'heure', 'minute' => 'Minute', 'second' => 'Second',
                ],
            ])
            ->add('fin', DateTimeType::class, [
                'placeholder' => [
                    'year' => 'Année', 'month' => 'mois', 'day' => 'jour',
                    'hour' => 'heure', 'minute' => 'Minute', 'second' => 'Second',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PeriodChoice::class,
        ]);
    }
}
