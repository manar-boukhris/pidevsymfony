<?php

namespace App\Form;
use App\Entity\Projet;
use App\Entity\Typeprojet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class TypeprojetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
            ->add('nomtype',TextType::class,[
                "label"=>'Type :',
            ])
            ->add('descriptiontype',TextType::class,[
                "label"=>'Description Type :',
            ])
            ->add('id',EntityType::class,[
                'class'=>Projet::class,
                "choice_label"=>'nom',
                "label"=>'Nom Projet :',
                'expanded'=>false,
                'multiple'=>false
            ]) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Typeprojet::class,
        ]);
    }
}
