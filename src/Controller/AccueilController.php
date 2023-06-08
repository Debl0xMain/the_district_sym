<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('page/accueil.html.twig', [
            'controller_name' => 'AccueilController',
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
    
}
