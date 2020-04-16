<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('dateDebut',\Symfony\Component\Form\Extension\Core\Type\DateTimeType::class,[
                    'widget' => 'single_text',

                    'required' => true,
                    'input' => 'datetime',

                    'attr' => array('class' => 'form-control input-inline ','id'=>'datetimepicker2',
                        'data-provide' => 'datetimepicker2',
                        'data-format' => ' HH:ii',
                       // 'data-format'=>'Y/m/d H:i',
                       // 'data-formatTime'=>'H:i',

                        //'data-formatDate'=>'Y/m/d',
                    ),
                ]
            )
           /* ->add( 'dateDebut', \Symfony\Component\Form\Extension\Core\Type\DateTimeType::class,
                [ 'widget' => 'single_text',
                    'input' => 'datetime',
                    'html5' => false,
                    'attr' => [ 'class' => 'combinedPickerInput',
                        'placeholder' => date('d/m/y H:i'), ],
                'format' => 'd/m/YH:i',
                    'date_format' => 'd/m/YH:i',
                    'label' => 'form.specialOffer.startDate',
                    'translation_domain' => 'Default',
                    'required' => false, ] )

            /* ->add('dateDebut', DateType::class,[
                 'label'=>false,
                 'widget' => 'choice',
                 'format' => 'dd MM yyyy',
                 'months'=>[
                     'disabled'=>true,
                 ],
                 'years'=>[
                     'disabled'=>true,
                 ],
                 'attr'=>[
                 ]
             ])*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
