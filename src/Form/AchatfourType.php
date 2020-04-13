<?php

namespace App\Form;

use App\Entity\Achatfour;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AchatfourType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('seqachatfour')
            ->add('achatvol')
            ->add('fouvol')
            ->add('achathot')
            ->add('fouhot')
            ->add('achattrans')
            ->add('foutrans')
            ->add('achatass')
            ->add('fouass')
            ->add('achatautre')
            ->add('fouautre')
            ->add('achatcure')
            ->add('foucure')
            ->add('export')
            ->add('commVp')
            ->add('achatTaxesolidarite')
            ->add('achatTaxecarbu')
            ->add('achatTaxeaeroport')
            ->add('achatEmpty')
            ->add('achatPrepost')
            ->add('achatKappa')
            ->add('arretDynamisme')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Achatfour::class,
        ]);
    }
}
