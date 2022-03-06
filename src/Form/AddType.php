<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\User;
use Cassandra\Type\UserType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use function Sodium\add;

class AddType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('descRec')
            ->add('dateRec')
            ->add('idUser')
            ->add('idUser',EntityType::class, [
                'class' => User::class,
                'choice_label' => function($username)
                {
                    return $username->getUsername();
                }

            ])
            ->add('IdType')
            ->add('Ajouter',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
