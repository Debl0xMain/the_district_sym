<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\DetailRepository;
use App\Repository\CategorieRepository;

class AccueilController extends AbstractController
{
    private $CategorieRepo;
    private $DetailRepo;

    public function __construct(CategorieRepository $CategorieRepo,DetailRepository $DetailRepo)
    {
        $this->CategorieRepo = $CategorieRepo;
        $this->DetailRepo = $DetailRepo;

    }

    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        $detail = $this->DetailRepo->AffPlatBest();
        return $this->render('page/accueil.html.twig', [
            
            'controller_name' => 'AccueilController',
            'detail' => $detail 
        ]);
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
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    
}
