<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\TypeReclamation;
use App\Entity\User;
use mysql_xdevapi\Table;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            ->add('idUser',EntityType::class, [
                'class' => User::class,
                'choice_label' => function($username)
                {
                    return $username->getUsername();
                }
            ])

            ->add('titre')

            ->add('dateRec', DateType::class,[
                'label'=>'Date de creation'
            ])

            ->add('IdType',EntityType::class,
                ['class'=>TypeReclamation::class,
                    'label'=>'Type Reclamation'])

            ->add('descRec',TextareaType::class,[
                'label'=>'Description'
            ])

/*
            ->add('reponse', TextareaType::class,[
                'label'=>'Reponse'
            ])*/
            ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }


}
