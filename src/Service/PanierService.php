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
        // $clear = $session->clear();
        if(empty($foo)){
            $panier = [];
            $setpanier = $session->set('panier',$panier);
        }
        $foo = $session->get('panier');

        return $foo;
    }

    public function structurepanier($idplatpanier)
    {
        $returninfo = $this->Platrepo->returnpanier($idplatpanier);

        return $returninfo;
        
    }

    //ajout au panier
    public function addpanier($qte,$idplatpanier)
    {
        $sessiontest = $this->requestStack->getSession();
        $paniercheck = $sessiontest->get('panier', []);

        $plat = $this->Platrepo->returnpanier($idplatpanier);
        $idplat = $plat[0]['id'];
        $prixplat = $plat[0]['prix'];
        $libelleplat = $plat[0]['libelle'];
        $imageplat = $plat[0]['image'];


        $qteplat = $qte;
        $old_quantite = 0;

        if(isset($panier[$idplat])){
            $old_quantite = $paniercheck[$idplatplat]["qte"];
        } 
        
        $qteplat += $old_quantite;

        

        $plattable = ['id'=>$idplat ,"libelle"=>$libelleplat,"prix"=>$prixplat,"qte"=>$qteplat,"img"=>$imageplat];

        $session = $this->requestStack->getSession();
        $sessionpanier = $session->get('panier', []);
        
        $sessionpanier[$idplat] = $plattable;

        $addsession = $session->set('panier', $sessionpanier);
        
        $foo = $session->get('panier');

        return $foo;

    }

    public function deleteitem($iddeleteplat) {

        $session = $this->requestStack->getSession();
        $foo = $session->get('panier');
        unset($foo[$iddeleteplat]);
        $addsession = $session->set('panier',$foo);
        $foo = $session->get('panier');
        
        return $foo; 
    }

    public function deletepanier() {

        $session = $this->requestStack->getSession();
        $foo = $session->get('panier');
        $clear = $session->clear('panier');

        return $clear;
    }

}