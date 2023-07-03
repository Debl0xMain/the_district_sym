<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use App\Repository\PlatRepository;

class PanierService
{

    private $requestStack;
    private $Platrepo;


    public function __construct(RequestStack $requestStack,PlatRepository $Platrepo)
    {
        $this->requestStack = $requestStack;
        $this->Platrepo = $Platrepo;
    }

    public function panier()
    {
        
        $session = $this->requestStack->getSession();
        $foo = $session->get('panier');
        $panier = [];

        return $foo;
    }

    public function structurepanier($idplatpanier)
    {
        $returninfo = $this->Platrepo->returnpanier($idplatpanier);

        return $returninfo;
        
    }

    //ajout au panier
    public function addpanier($structurepanier,$qte)
    {

        $idpanier = $structurepanier[0]['id'];
        $prixpanier = $structurepanier[0]['prix'];
        $libellepanier = $structurepanier[0]['libelle'];
        $imagepanier = $structurepanier[0]['image'];
        $qtepanier = $qte;


        $panier =['id'=>$idpanier ,"libelle"=>$libellepanier,"prix"=>$prixpanier,"qte"=>$qtepanier,"img"=>$imagepanier];
        
        $session = $this->requestStack->getSession();
        $sessionpanier = $this->panier();

        array_push($sessionpanier, $panier);

        $addsession = $session->set('panier',$sessionpanier);
        $foo = $session->get('panier');

        return $foo;
    }

    public function deleteitem($iddeleteplat) {

        $session = $this->requestStack->getSession();
        $foo = $session->get('panier');
        $lenghttable = count($foo);
        $i = 0;
      
        do{
            $test = $foo[5]['id'];
            if ($test == $iddeleteplat){
                unset($foo[$i]);
                break;
            }
            $i++;

        }while($lenghttable>$i);


        // echo "terst";
        // if (in_array("Lasagne",$foo[0])){
        //     echo "cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc";
        // }
        
        $panierdelete = $session->get('panier');
        $panierreturn = $session->set('panier');

        return $foo;


        
    }

}