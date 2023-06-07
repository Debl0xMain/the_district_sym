<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet',TextType::class,[
                'label_attr' => [
                    "class" =>"contactlabel"
                    ],
                'attr'=> [
                        'placeholder'=>'Objet',
                        'class'=>'contactinput my-2' 
                        ]
            ])

            ->add('email',EmailType::class,[
                'label_attr' => [
                                "class" =>"contactlabel"
                                ],
                'attr'=> [
                        'placeholder'=>'Email',
                        'class'=>'contactinput my-2' 
                        ]
            ])

            //On a rajouté un label et on a rendu le champ optionnel en
            // donnant la valeur false à l'attribut required
            ->add('message', TextareaType::class, [
                'label' => 'Votre message',
                'label_attr' => [
                    "class" =>"contactlabel"
                    ],
                'attr'=> [
                        'placeholder'=>'Votre Message',
                        'class'=>'contactinput my-2' 
                ],
                'required' => false
                ]
            )
            ->add('save', SubmitType::class, [
                'attr'=> 
               [
                        'class'=>'btn btn-primary my-2' ],
                'label' => 'Envoyer le message'])

        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
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
