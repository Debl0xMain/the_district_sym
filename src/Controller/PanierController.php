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
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
// au desus a sup
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Service\PanierService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Commande;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class PanierController extends AbstractController
{
    private $PanierService;
    private $requestStack;


    public function __construct(PanierService $PanierService,RequestStack $requestStack)
    {
        $this->PanierService = $PanierService;
        $this->requestStack = $requestStack;
    }

    /**
     * @Route("/_panier",
     *     name="app_panier"
     * )
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function panier(Request $request): Response
    {

        $idplat = 201;// $request->request->all('addshopid');
        $qteplat = 204;//$request->request->all('addshopqte');

        //$PanierCreate = $this->PanierService->panier();
        $PanierService = $request->request->all();

        $reponse = $this->PanierService->panier($idplat,$qteplat);

        // return $this->render('page/_panier.html.twig', [
        //     'PanierService' => $PanierService,
        //     "PanierCreate" => $PanierCreate,
        // ]);
        return new \Symfony\Component\HttpFoundation\JsonResponse($reponse);
    }
















public function id(){
    $id = 1;
    return $id;
}
 public function AddPanier(Request $request) {

    $PanierService = $this->PanierService->panier();
    
    
    // $session = $request->getSession();
    
    // $PanierService = $this->PanierService->panier();
    // $id = $this->id();
    // if(!$session->has('panier')) $session->set('panier',array());
    // $PanierService = $session->get('panier');
    // // var_dump($request->query->get('qte'));die();
    // if(array_key_exists($id,$PanierService)){
    //     if($request->query->get('qte') != null) 
    //     $PanierService[$id] = $request->query->get('qte');

    // }
    // else{
    //     if($request->query->get('qte') != null){
    //         $PanierService[$id] = $request->query->get('qte');
    //     }else{
    //         $PanierService[$id] = 2;
    
    //     }
       
    // }
    // $session->set('PanierService',$PanierService);

    
    return new  Response(json_encode($PanierService));
    }

}