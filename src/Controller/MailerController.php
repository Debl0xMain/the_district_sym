<?php
// src/Controller/MailerController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
 use Symfony\Component\Mime\Part\DataPart;
 use Symfony\Component\Mime\Part\File;
 

class MailerController extends AbstractController
{
    #[Route('/email')]
    public function sendEmail(MailerInterface $mailer): Response
    {
        $email = (new TemplatedEmail())
            ->from('hello@example.com')
//            ->to('you@example.com')
            ->to(new Address('ryan@example.com'))
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')

            // le chemin de la vue Twig à utiliser dans le mail
            ->htmlTemplate('emails/signup.html.twig')


            // un tableau de variable à passer à la vue; 
           //  on choisit le nom d'une variable pour la vue et on lui attribue une valeur (comme dans la fonction `render`) :
            ->context([

                    'username' => 'foo',
                ]);

        $mailer->send($email);
    }

#[Route('/emailcmd')]
public function sendEmailcmd(MailerInterface $mailer): Response
{        //envoi ver service

    $expediteur = 'the_district@contact.fr';
    $destinataire = $email;
    $sujet = 'Commande';

    $email = (new TemplatedEmail())
    ->from($expediteur)
    ->to($destinataire)
    ->subject($sujet)


    ->html('/path/to/page/commandesend.html.twig')
    ->text('/path/to/page/commandesend.html.twig')

    ->context([

        'panier' => $panier,
        'nom' => $nom,
        'prenom' => $prenom,
        'adresse' => $adresse,
        'pay' => $pay,
        'cp' => $cp,
        'ville' => $ville,
        'prix_total'=>$prix_total

        ]);

        $ms>send($email);
}

}
