<?php

namespace App\Controller;
use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use App\Security\EmailVerifier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use App\Repository\ContactRepository;
use App\Service\MailService;
use App\Form\ContactType;
use App\Entity\Contact;
use AppBundle\Entity\Product;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;



class FormContactController extends AbstractController
{

    private $contactRepo;
    private $error;
    private $lastUsername;

    public function __construct(AuthenticationUtils $authenticationUtils,ContactRepository $contactRepo)
    {
        $this->contactRepo = $contactRepo;
        $this->error = $authenticationUtils->getLastAuthenticationError();
        $this->lastUsername = $authenticationUtils->getLastUsername();
        

    }
    

    #[Route('/contact', name: 'app_contact')]
    public function contactform(MailerInterface $mailer, MailService $ms,Request $request,UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //on crée une instance de Contact
            $message = new ContactType();
            // Traitement des données du formulaire
            $data = $form->getData();
            //on stocke les données récupérées dans la variable $message
            $message = $data;

            $entityManager->persist($message);
            $entityManager->flush();

            $email = $ms->sendMail('the_discrit@contact.fr', $message->getEmail(), $message->getObjet(), $message->getMessage() );
            // Redirection vers accueil
            return $this->redirectToRoute('app_accueil');
        }

        $contact = $this->contactRepo->findAll();
        
        return $this->render('contact/contact.html.twig', [
                'form' => $form,
                'controller_name' => 'AccueilController',
                'contact' => $contact,

        ]);
    }

}