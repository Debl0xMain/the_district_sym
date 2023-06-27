<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Form\CatType;
use App\Entity\Categorie;
use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\Plat;
use AppBundle\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DetailRepository;
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
use App\Service\PanierService;


use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class AccueilController extends AbstractController
{
    private $CategorieRepo;
    private $DetailRepo;
    private $PanierService;


    public function __construct(PanierService $PanierService,AuthenticationUtils $authenticationUtils,EmailVerifier $emailVerifier,CategorieRepository $CategorieRepo,DetailRepository $DetailRepo)
    {
        $this->CategorieRepo = $CategorieRepo;
        $this->DetailRepo = $DetailRepo;
        $this->PanierService = $PanierService;
    }

    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        $detail = $this->DetailRepo->AffPlatBest();
        $AffCatBest = $this->DetailRepo->AffCatBest();
        $PanierService = $this->PanierService->panier();
       
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'AccueilController',
            'detail' => $detail,
            'AffCatBest' => $AffCatBest,
            'PanierService' => $PanierService
        ]);
    }
    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_register');
    }
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
        #[Route('/mentionslegales', name: 'app_mlegal')]
    public function mlegal(): Response
    {
       
        return $this->render('page/mlegal.html.twig', [
            'controller_name' => 'AccueilController',

        ]);
    }
    #[Route('/cgu', name: 'app_cgu')]
    public function cgu(): Response
    {
       
        return $this->render('page/cgu.html.twig', [
            'controller_name' => 'AccueilController',

        ]);
    }

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils,): Response
    {
       
        return $this->render('page/login.html.twig', [
            'controller_name' => 'AccueilController',

        ]);
    }
    
}
