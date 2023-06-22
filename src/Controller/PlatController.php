<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\Plat;
use AppBundle\Entity\Product;
USE App\src\Controller\CatController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;


class PlatController extends AbstractController
{

    private $PlatRepo;
    private $error;
    private $lastUsername;

    public function __construct(AuthenticationUtils $authenticationUtils,PlatRepository $PlatRepo)
    {
        $this->PlatRepo = $PlatRepo;
        $this->error = $authenticationUtils->getLastAuthenticationError();
        $this->lastUsername = $authenticationUtils->getLastUsername();

    }

    #[Route('/plat_add', name: 'app_platadd')]
    public function platform(Request $request,EntityManagerInterface $entityManager,UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator): Response
    {
        $lastUsername = $this->lastUsername;
        $error = $this->error;
        $form = $this->createForm(PlatType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

    
            $message = new PlatType();
            // Traitement des données du formulaire
            $data = $form->getData();
            //on stocke les données récupérées dans la variable $message
            $message = $data;

            $entityManager->persist($message);
            $entityManager->flush();

            // Redirection vers accueil
            return $this->redirectToRoute('app_platadd');
        }

        $plat = $this->PlatRepo->findAll();
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
        return $this->render('admin/addplat.html.twig', [
                // 'form' => $form->createView(),
                'form' => $form,
                'controller_name' => 'AccueilController',
                'plat' => $plat,
                'last_username' => $lastUsername,
                'error' => $error,
                'registrationForm' => $rform->createView()
        ]);
    }

    #[Route('/plat', name: 'app_plat')]
    public function cat(Request $request,UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $lastUsername = $this->lastUsername;
        $error = $this->error;
        $plat = $this->PlatRepo->findAll();
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
        return $this->render('page/plat.html.twig', [
            'controller_name' => 'AccueilController',
            'plat' => $plat,
            'last_username' => $lastUsername,
            'error' => $error,
            'registrationForm' => $rform->createView()
        ]);
    }

}