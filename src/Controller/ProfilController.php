<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;

use App\Form\ProfilFormType;
use App\Repository\Utilisateur;
use App\Repository\DetailRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use App\Security\EmailVerifier;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;


class ProfilController extends AbstractController
{
    private $userRepo;

    public function __construct(DetailRepository $detailrepo,UtilisateurRepository $userRepo){
        $this->userRepo = $userRepo;
        $this->DetailRepo = $detailrepo;
    }
    #[Route('/profil', name: 'app_profil')]
    public function index(AppCustomAuthenticator $authenticator,AuthenticationUtils $authenticationUtils,Request $request,UserPasswordHasherInterface $passwordHasher,EntityManagerInterface $entityManager): Response
    {
        $userid = "29";
        $cmddetail = $this->DetailRepo->AffHistoriqueCmd($userid);
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();
        $identifiant = $this->getUser()->getUserIdentifier();
        if($identifiant){
            $info = $this->userRepo->findOneBy(["email" =>$identifiant]);
        }

        $form = $this->createForm(ProfilFormType::class, $this->getUser());
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var User $user */
            $user = $form->getData();
            $plainPassword = $form->get('plainPassword')->getData();
            
            if (null !== $plainPassword) {
                $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            }
            $entityManager->flush();
            $this->addFlash('success', 'Votre profil a été mis à jour');
    
        }

        return $this->render('profil/user.html.twig', [
            'informations' => $info,
            'last_username' => $lastUsername,
            'error' => $error,
            'form' => $form->createView(),
            'cmddetail' => $cmddetail

        ]);
    }

}
