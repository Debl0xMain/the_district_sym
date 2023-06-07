<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function contactform(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        // ...
        // A partir de la version 6.2 de Symfony, on n'est plus obligé d'écrire 
        // $form->createView(), il suffit de passer l'instance de FormInterface 
        // à la méthode render

        return $this->render('contact/contact.html.twig', [
                // 'form' => $form->createView(),
                'form' => $form,
                'controller_name' => 'AccueilController',
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