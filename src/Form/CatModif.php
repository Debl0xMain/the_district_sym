<?php

namespace App\Form;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CatModif extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('libelle',TextType::class,[
            'label_attr' => [
                "class" =>"contactlabel"
                ],
            'attr'=> [
                    'placeholder'=>'Categorie name',
                    'name'=>'categorie_libelle',
                    'value'=>'{{categorie.libelle}}',
                    'class'=>'contactinput my-2'
                    

                    ]
        ])

        ->add('active',TextType::class,[
            'label_attr' => [
                "class" =>"contactlabel"
                ],
            'attr'=> [
                    'placeholder'=>'yes = 1 or no = 0 ?',
                    'name'=>'categorie_active',
                    'value'=>'{{categorie.active}}',
                    'class'=>'contactinput my-2' 
                    ]
        ])

        ->add('image',TextType::class,[
            'label_attr' => [
                            "class" =>"contactlabel"
                            ],
            'attr'=> [
                    'placeholder'=>'Image Name',
                    'name'=>'categorie_image',
                    'value'=>'{{categorie.image}}',
                    'class'=>'contactinput my-2' 
                    ]
        ])
        
        ->add('save', SubmitType::class, [
            'attr'=> 
           [
            'class'=>'btn btn-primary' ],
            'label' => 'Envoyer le message'])

    ;
}


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
        ]);
    }

    public function delete(Request $request): Response
{
    $submittedToken = $request->request->get('token');

    // 'delete-item' est identique à la valeur utilisée dans la vue pour générer le token 
    if ($this->isCsrfTokenValid('delete-item', $submittedToken)) {
        // ... le corps de la fonction
    }
}
}