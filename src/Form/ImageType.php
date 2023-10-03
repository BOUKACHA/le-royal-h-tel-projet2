<?php

namespace App\Form;

use App\Entity\Image;
use App\Entity\Salon;
use App\Entity\Chambre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile', FileType::class, ['required'=>true, 'label'=>'Image', "attr"=>["class"=>"select-image"]])
            ->remove('imageName')
            ->remove('updatedAt')
            // L'option data permet de définir une valeur affichée par defaut
            ->add('rankOrder', IntegerType::class, ['required'=>true, 'data'=>1, "attr"=>["min"=>1,"max"=>40]])
        ;
        if(!$options["fromChambre"]){
            $builder
            // Pour rappel choice_label permet de choisir le champ qui sera affiché dans le select
            // Auquel cas on n'a pas besoin de la méthode __toString() dans l'entité
            ->add('chambre', EntityType::class, ["class"=>Chambre::class, "choice_label"=>'nom'])
            ->add('salon', EntityType::class, ["class"=>Salon::class, "choice_label"=>'nom'])
        ;
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Image::class,
            'fromChambre'=>false,
            'isNew' => true,
        ]);
    }
}
