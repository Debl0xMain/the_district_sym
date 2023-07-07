<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\PlatRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Service\MailService;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Entity\Commande;
use App\Entity\Detail;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;




class PanierController extends AbstractController
{
    private $PanierService;
    private $Platrepo;
    private $requestStack;



    public function __construct(RequestStack $requestStack,PanierService $PanierService,PlatRepository $Platrepo)
    {
        $this->requestStack = $requestStack;
    $this->PanierService = $PanierService;
    $this->Platrepo = $Platrepo;

    }

    //#[Route('/_panier', name: 'app_panier')]
    public function panier(Request $request): Response
    {
        $AffPanier = $this->PanierService->panier();
        $nombre_item_panier = count($AffPanier);



        return $this->render('page/_panier.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $AffPanier,
            'prix_panier' => $nombre_item_panier
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
            $panieradd = $this->PanierService->addpanier($qte,$idplatpanier);
            return new JsonResponse($panieradd);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    //gere la quantite
    #[Route('/panierqte', name: 'app_panierqte')]
public function panierajaxqte(Request $request): Response
    {
       if($request->isXmlHttpRequest()) {

    $idplatpanier= $request->request->get('id');
    $qte = $request->request->get('qteadd');


    $structurepanier = $this->PanierService->structurepanier($idplatpanier);
    $panieradd = $this->PanierService->addpanier($qte,$idplatpanier);
    return new JsonResponse($panieradd);
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

            $iddeleteplat = $request->request->get('iddelete');
            $AffPanier = $this->PanierService->panier();
            $deleteitem = $this->PanierService->deleteitem($iddeleteplat);

            return new JsonResponse($AffPanier[$iddeleteplat]);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController',

        ]);
    }

    #[Route('/panierdeleteall', name: 'app_panierdeleteall')]
public function panierajaxdeleteall(Request $request): Response
    {
        if($request->isXmlHttpRequest()) {

            $deleteitem = $this->PanierService->deletepanier();


            return new JsonResponse($deleteitem);
        }

        return $this->render('page/panier.html.twig', [
            'controller_name' => 'LoginController',

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
public function paniersendcmd(EntityManagerInterface $entityManager,Request $request,MailService $ms, MailerInterface $mi): Response
    {
        //id
        $nom = $request->request->get('nom');
        $prenom = $request->request->get('prenom');
        $adresse = $request->request->get('adresse');
        $cp = $request->request->get('cp');
        $ville = $request->request->get('ville');
        $email= $request->request->get('email');

        //name
        $pay = $request->request->get('pay');
        
        //panier
        $panier = $this->PanierService->panier();
        $prix_total = $this->PanierService->prixtotal($panier);



            // get user id
            $utilisateur = $this->getUser();
            $session = $this->requestStack->getSession();
            $panier = $session->get('panier');
    
            // Create new cmd
            $cmd = new Commande();
                $cmd->setDateCommande(new \DateTime());
                $cmd->setTotal($prix_total);
                $cmd->setUtilisateur($utilisateur);
                $cmd->setEtat(0);
            $entityManager->persist($cmd);
            $entityManager->flush();
    
            // add detail in cmd
    
            foreach ($panier as $paniers) {
                $id = $paniers['id'];
                $intid = $this->Platrepo->find($id);

                $dtl = new Detail();
                    $dtl->setQuantite($paniers['qte']);
                    $dtl->setPlat($intid);
                    $dtl->setCommande($cmd);
                $entityManager->persist($dtl);
                $entityManager->flush();
            }
        

        //envoi ver service

        // $expediteur = 'the_district@contact.fr';
        // $destinataire = $email;
        // $sujet = 'Commande';
        // $message = (__DIR__ . '/page\commandesend.twig');

        // //send mail
        // $ms->sendMail($expediteur, $destinataire, $sujet, $message);

                //envoi ver service

                $expediteur = 'the_district@contact.fr';
                $destinataire = $email;
                $sujet = 'Commande detail';
        
                $email = (new TemplatedEmail())
                    ->from($expediteur)
                    ->to($destinataire)
                    ->subject($sujet)
            
            
                    ->htmlTemplate('page/commandesend.html.twig')
            
                    ->context([
            
                        'panier' => $panier,
                        'nom' => $nom,
                        'prenom' => $prenom,
                        'adresse' => $adresse,
                        'pay' => $pay,
                        'cp' => $cp,
                        'ville' => $ville,
                        'prix_total'=>$prix_total
            
                        ]);

                $mi->send($email);

                $session = $this->requestStack->getSession();

                $session->clear();
/*
        return $this->render('page/commandesend.html.twig', [
            'controller_name' => 'LoginController',
            'panier' => $panier,
            'nom' => $nom,
            'prenom' => $prenom,
            'adresse' => $adresse,
            'pay' => $pay,
            'cp' => $cp,
            'ville' => $ville,
            'prix_total'=>$prix_total
        ]);
        */
        return $this->redirectToRoute('app_accueil');
    }

}