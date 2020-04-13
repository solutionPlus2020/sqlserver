<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('maj',DateTimeType::class)
            ->add('codeutil')
            ->add('nomutil')
            ->add('profilutil')
            ->add('mdp')
            ->add('badge')
            ->add('flag1')
            ->add('flag2')
            ->add('datedeb',DateTimeType::class)
            ->add('heured',DateTimeType::class)
            ->add('datefin',DateTimeType::class)
            ->add('heuref',DateTimeType::class)
            ->add('encours')
            ->add('emailutil')
            ->add('weblogin')
            ->add('webmdp')
            ->add('seqniveau')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
