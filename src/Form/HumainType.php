<?php

namespace App\Form;

use App\Entity\Humain;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HumainType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nom')
            ->add('Prenom')
            ->add('Pseudo')
            ->add('Mail')
            ->add('Facebook')
            ->add('Twitter')
            ->add('Insta')
            ->add('Linkedin')
            ->add('Telephone')
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Admin' => 'Admin',
                    'Mangaka' => 'Mangaka',
                    'Lecteur' => 'Lecteur',
                    'Ami' => 'Ami'
                ]
            ])
            ->add('Inscrit')
            ->add('save', SubmitType::class, [
                'label' => 'Editer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Humain::class,
        ]);
    }
}
