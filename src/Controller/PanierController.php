<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\PlatRepository;


class PanierController extends AbstractController
{
    private $PanierService;
    private $Platrepo;



    public function __construct(PanierService $PanierService,PlatRepository $Platrepo)
    {
    $this->PanierService = $PanierService;
    $this->Platrepo = $Platrepo;

    }

    // #[Route('/_panier', name: 'app_panier')]
    public function panier(Request $request): Response
    {

        $AffPanier = $this->PanierService->panier();

        return $this->render('page/_panier.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $AffPanier 
        ]);
    }

//add plat panier
#[Route('/panier', name: 'app_panier')]
public function panierajax(Request $request): Response
    {
        if($request->isXmlHttpRequest()) {

            $idplatpanier= $request->request->get('id');
            $qte = $request->request->get('qte');

            $structurepanier = $this->PanierService->structurepanier($idplatpanier);

            return new JsonResponse($structurepanier[0]);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController'
        ]);
    }


//suprime ligne panier
#[Route('/panierdelete', name: 'app_panierdelete')]
public function panierajaxdelete(Request $request): Response
    {
        if($request->isXmlHttpRequest()) {

            $iddeleteplat= $request->request->get('iddelete');

            return new JsonResponse($iddeleteplat);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController'
        ]);
    }

}