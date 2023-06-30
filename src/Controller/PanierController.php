<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


//generation de btn
use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\Plat;
//


class PanierController extends AbstractController
{
    private $PanierService;
    private $PlatRepo;


    public function __construct(PanierService $PanierService,PlatRepository $PlatRepo)
    {
    $this->PanierService = $PanierService;
    $this->PlatRepo = $PlatRepo;
    }

    #[Route('/panier', name: 'app_panier')]
    public function panier(Request $request): Response
    {

        $plat = $this->PlatRepo->findAll();
        $AffPanier = $this->PanierService->panier();

        if($request->isXmlHttpRequest()) {

            //dd($request->getContent());
            $id= $request->request->get('id');
            $qte = $request->request->get('qte');
            $test = [$qte,$id];
            // $test = $qte + $id;
            return new JsonResponse($test);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController',
            'plat' => $plat,
            'panier' => $AffPanier 
        ]);
    }

}