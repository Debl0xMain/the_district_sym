<?php

namespace App\Form;

use App\Entity\Plat;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class PlatModif extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('categorie',EntityType::class,[
            'class' => Categorie::class,
            'label_attr' => [
                "class" =>"contactlabel"
                ],
            'attr'=> [
                    'placeholder'=>'Categorie name',
                    'class'=>'contactinput my-2',
                    'name'=>'plat_categorie',
                    "value" => "{{plat.categorie}}"
                    ]
        ])
        ->add('libelle',TextType::class,[
            'label_attr' => [
                "class" =>"contactlabel"
                ],
            'attr'=> [
                    'placeholder'=>'plat name',
                    'class'=>'contactinput my-2',
                    'name'=>'plat_libelle',
                    "value" => "{{plat.libelle}}"
                    ]
        ])

        ->add('description',TextType::class,[
            'label_attr' => [
                "class" =>"contactlabel"
                ],
            'attr'=> [
                    'placeholder'=>'description plat ',
                    'class'=>'contactinput my-2',
                    'name'=>'plat_description',
                    "value" => "{{plat.description}}"
                    ]
        ])

        ->add('prix',TextType::class,[
            'label_attr' => [
                            "class" =>"contactlabel"
                            ],
            'attr'=> [
                    'placeholder'=>'Prix',
                    'name'=>'plat_prix',
                    'class'=>'contactinput my-2',
                    "value" => "{{plat.prix}}"
                    ]
        ])
        
        ->add('image',TextType::class,[
            'label_attr' => [
                            "class" =>"contactlabel"
                            ],
            'attr'=> [
                    'placeholder'=>'Image Name',
                    'name'=>'plat_image',
                    'class'=>'contactinput my-2',
                    "value" => "{{plat.image}}"
                    ]
        ])

        ->add('active',TextType::class,[
            'label_attr' => [
                            "class" =>"contactlabel"
                            ],
            'attr'=> [
                    'placeholder'=>'yes = 1 or no = 0 ',
                    'class'=>'contactinput my-2',
                    'name'=>'plat_active',
                    "value" => "{{plat.active}}"
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
            'data_class' => Plat::class,
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