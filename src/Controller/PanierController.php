<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PanierController extends AbstractController
{
    private $PanierService;



    public function __construct(PanierService $PanierService)
    {
    $this->PanierService = $PanierService;

    }

    // #[Route('/_panier', name: 'app_panier')]
    public function panier(Request $request): Response
    {

        $AffPanier = $this->PanierService->panier();

        if($request->isXmlHttpRequest()) {

            //dd($request->getContent());
            $id= $request->request->get('id');
            $qte = $request->request->get('qte');
            $test = [$qte,$id];
            // $test = $qte + $id;
            return new JsonResponse($test);
        }

        return $this->render('page/_panier.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $AffPanier 
        ]);
    }

}