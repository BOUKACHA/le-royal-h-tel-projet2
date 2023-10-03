<?php

namespace App\Form;

use App\Entity\Chambre;
use App\Form\ImageType;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class ChambreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isActive', CheckboxType::class,["required"=>false, "label"=>"Active", "attr"=>
            ["class"=>"form-check-input"], 'row_attr'=>["class"=>"form-switch mb-2"]])
            ->add('nom', TextType::class, ['required'=>true])
            ->add('description', CKEditorType::class, ['required'=>true])
            ->add('tarif', MoneyType::class, ['required'=>true])
            ->remove('slug')
            ->add('categorie', EntityType::class, ['class'=>Categorie::class, 'choice_label'=>'nom', 'required'=>true])
            
            //https://symfony.com/doc/current/form/form_collections.html(On crée un formulaire a l'interieur d'un autre)
            ->add('images', CollectionType::class, ['entry_type'=>ImageType::class, "allow_add"=>true,"by_reference"=>false
            , "allow_delete"=>true, 'label'=>false, 'entry_options'=>['fromChambre'=>true, 'isNew'=> $options['isNew']]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Chambre::class,
            'isNew' => true,
        ]);
    }
}
