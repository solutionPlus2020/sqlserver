<?php

namespace App\Form;

use App\Entity\Pays;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class PaysType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codepays',TextType::class, [
                'mapped' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous devez renseigner le code pays',
                    ]),
                    new Length([
                        'max' => 2,
                        'min' => 2,
                        'maxMessage' => 'votre code pays doit contenir exactement {{ limit }} charactères ,vous avez insérer {{ value }} charactères',
                        'minMessage' => 'votre code pays doit contenir exactement {{ limit }} charactères ,vous avez insérer {{ value }} charactères',
                        // max length allowed by Symfony for security reasons

                    ]),
                ],])
            ->add('libpays',TextType::class, [
                'mapped' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous devez renseigner le lib pays',
                    ]),
                    new Length([
                        'max' => 30,
                        'maxMessage' => 'votre lib pays doit contenir maximuin {{ limit }} charactères ',
                        // max length allowed by Symfony for security reasons

                    ]),
                ],])
            ->add('place',TextType::class, [
                'mapped' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous devez renseigner la place',
                    ]),
                    new Length([
                        'max' => 8,
                        'maxMessage' => 'votre place doit contenir maximuin {{ limit }} charactères ',
                        // max length allowed by Symfony for security reasons

                    ]),
                ],])
            ->add('ordre',IntegerType::class,[
                'mapped' => false,
                'data' => 99,
                'attr' => [
                    'min' => 0,
                    'max' => 99
                ],

                'constraints' => [
                    new NotBlank([
                        'message' => "Vous devez renseigner l'ordre",
                    ]),]
              ])
            ->add('nature',IntegerType::class,[
                'mapped' => true,
                'data' => 0,
                'attr' => [
                    'min' => 0,
                    'max' => 9
                ],

                'constraints' => [
                    new NotBlank([
                        'message' => "Vous devez renseigner la nature",
                    ]),]
            ])

            ->add('continent',TextType::class, [
                'mapped' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Vous devez renseigner le continant',
                    ]),
                    new Length([
                        'max' => 10,
                        'maxMessage' => 'votre continant doit contenir maximuin {{ limit }} charactères ',
                        // max length allowed by Symfony for security reasons

                    ]),
                ],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Pays::class,
        ]);
    }
}
