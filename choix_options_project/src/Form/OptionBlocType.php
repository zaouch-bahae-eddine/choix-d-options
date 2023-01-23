<?php

namespace App\Form;

use App\Entity\OptionBloc;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OptionBlocType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('nbUeToChose')
            ->add('choiceDateStart', DateTimeType::class, [
                'placeholder' => [
                    'year' => 'Année', 'month' => 'mois', 'day' => 'jour',
                    'hour' => 'heure', 'minute' => 'Minute', 'second' => 'Second',
                ],
            ])
            ->add('choiceDateEnd', DateTimeType::class, [
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
            'data_class' => OptionBloc::class,
        ]);
    }
}
