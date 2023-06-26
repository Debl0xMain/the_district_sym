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
        $lastUsername = $this->lastUsername;
        $error = $this->error;
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
        $user = new Utilisateur();
        $rform = $this->createForm(RegistrationFormType::class, $user);
        $rform->handleRequest($request);

        if ($rform->isSubmitted() && $rform->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $rform->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('the_district@contact.fr', 'Mail Auto'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }
        return $this->render('contact/contact.html.twig', [
                // 'form' => $form->createView(),
                'form' => $form,
                'controller_name' => 'AccueilController',
                'contact' => $contact,
                'last_username' => $lastUsername,
                'error' => $error,
                'registrationForm' => $rform->createView()
        ]);
    }

}