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
        // stores an attribute in the session for later reuse
        $session->set('panier', []);

        // gets an attribute by name
        $foo = $session->get('panier');
        $panier = [];

        return $panier;
    }

    public function structurepanier($idplatpanier)
    {
        //recup panier
        $session = $this->requestStack->getSession();
        $foo = $session->get('panier');
        
        //id vers info
        $returninfo = $this->Platrepo->returnpanier($idplatpanier);

        //ajout des info au panier
        array_push($foo, $returninfo);
        //return info pour aff panier
        return $returninfo;
        
    }

}