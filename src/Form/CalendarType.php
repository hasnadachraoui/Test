<?php

namespace App\Form;

use App\Entity\Calendrier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('start', DateTimeType::class,[
                'date_widget' => 'single_text'
            ])
            ->add('end', DateTimeType::class,[
                'date_widget' => 'single_text'
            ])
            ->add('description')
            ->add('allDay')
            ->add('backgroundColor', ColorType::class)
            ->add('borderColor', ColorType::class)
            ->add('textColor', ColorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Calendrier::class,
        ]);
    }
}
