<?php

namespace App\Form;

use App\Entity\Achatvol;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AchatvolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('seqachatvol')
            ->add('datesaisie',DateTimeType::class)
            ->add('seqvol')
            ->add('confirmerpar')
            ->add('seqresa')
            ->add('total')
            ->add('nbpax')
            ->add('prix')
            ->add('pnr')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Achatvol::class,
        ]);
    }
}
