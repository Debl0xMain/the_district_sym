<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\PlatRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Service\MailService;



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
            $panieradd = $this->PanierService->addpanier($structurepanier,$qte);
            return new JsonResponse($structurepanier[0]);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }


//suprime ligne panier
#[Route('/panierdelete', name: 'app_panierdelete')]
public function panierajaxdelete(Request $request): Response
    {
        if($request->isXmlHttpRequest()) {

            $iddeleteplat= $request->request->get('iddelete');

            $deleteitem = $this->PanierService->deleteitem($iddeleteplat);

            return new JsonResponse($iddeleteplat);
        }
        // $iddeleteplat = 212;
        // $deleteitem = $this->PanierService->deleteitem($iddeleteplat);

        return $this->render('page/test.html.twig', [
            'controller_name' => 'LoginController',

        ]);
    }


//gere la quantite
    #[Route('/panierqte', name: 'app_panierqte')]
public function panierajaxqte(Request $request): Response
    {
        if($request->isXmlHttpRequest()) {

            $qteplatmodif= $request->request->get('qtevalue');
            $qteplatid= $request->request->get('idplat');

            return new JsonResponse($qteplatmodif);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController'
        ]);
    }

#[isGranted('ROLE_USER')]
#[Route('/commande', name: 'app_commande')]
public function paniercmd(Request $request): Response
    {
        $Panier = $this->PanierService->panier();

        return $this->render('page/commande.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $Panier
        ]);
    }

#[isGranted('ROLE_USER')]
#[Route('/sendcommande', name: 'app_sendcommande')]
public function paniersendcmd(Request $request,MailService $ms): Response
    {
        // $Panier = $this->PanierService->panier();
        // //resultat du post
        // $ var = $request->request->get(' ');
        // $infouser = $thisapp -> info user;

        // //envoi ver service

        // //send mail
        $ms->sendMail($expediteur, $destinataire, $sujet, $message);

        // $expediteur = 'the_discrit@contact.fr';
        // $destinataire = "emailclient"
        // $sujet = "Commande n°".idcommande;
        // $message = 

        // //inscription base de donne


        return $this->render('page/commande.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $Panier
        ]);
        return $this->redirectToRoute('app_accueil');
    }

}