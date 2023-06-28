<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeFileSessionHandler;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;

class PanierService
{

    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function panier()
    {
        $session = $this->requestStack->getSession();
        // stores an attribute in the session for later reuse
        $session->set('panier', ["Article","prix"]);

        // gets an attribute by name
        $foo = $session->get('panier');
        $panier = [];

        return $panier;
    }

    public function AddPanierServ($idplat,$qteplat)
    {

        $panier = [];

        array_push($panier, $idplat,$qteplat);

        return $panier;
    }

}
