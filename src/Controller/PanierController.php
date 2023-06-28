<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\Plat;
use AppBundle\Entity\Product;
USE App\src\Controller\CatController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class PanierController extends AbstractController
{
    // private $PanierService;


    // public function __construct(PanierService $PanierService)
    // {
    //     $this->PanierService = $PanierService;
    // }


    // public function panier(): Response
    // {
    //     $PanierService = $this->PanierService->panier();
       
    //     return $this->render('page/_panier.html.twig', [
    //         'PanierService' => $PanierService
    //     ]);
    // }

    private $PlatRepo;

    public function __construct(PlatRepository $PlatRepo)
    {
        $this->PlatRepo = $PlatRepo;
    }
        #[Route('/test', name: 'app_panier')]
        public function ajaxAction(Request $request): Response {
            
            $plat = $this->PlatRepo->findAll();

            if ($request->isXmlHttpRequest() || $request->query->get('showJson') == 1) {  
            $jsonData = array();  
            $idx = 0; 
            foreach($plat as $plat) {  
                $temp = array(
                    'Libelle' => $plat->getLibelle(),  
                    'Id' => $plat->getId(),  
                );   
                $jsonData[$idx++] = $temp;  
            } 
            return new JsonResponse($jsonData); 
            } 
            else { 
            return $this->render('page/test.html.twig'); 
            } 
        }         

}