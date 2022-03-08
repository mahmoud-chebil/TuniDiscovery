<?php

namespace App\Form;

use App\Entity\CategoryProduct;
use App\Entity\Product;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',TextType::class,[
                'label'=>"name",
                'attr'=>[
                    "placeholder"=>"add name",
                    'class'=>"form-control"
                ]
            ])

            
            ->add('imagefilename',FileType::class,[
                'mapped' => false,
                'attr'=>[
                    'multiple'=>true,

                    'class'=>"form-control-file"
                ],
                'multiple'=>true
            ])


            ->add('price',IntegerType::class,[
                'label'=>"price",
                'attr'=>[
                    "placeholder"=>"add price",
                    'class'=>"form-control"
                ]
            ])
            ->add('description',TextType::class,[
                'label'=>"description",
                'attr'=>[
                    "placeholder"=>"add description",
                    'class'=>"form-control"
                ]
            ])
->add('category', EntityType::class, [
        // looks for choices from this entity
        'class' => CategoryProduct::class,

        'choice_label' => 'name',
        'attr'=>[
            'class'=>"form-control"
        ]

    ]

)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
