<?php

namespace App\Controller;

use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\Plat;
use AppBundle\Entity\Product;
USE App\src\Controller\CatController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\PlatModif;

class PlatController extends AbstractController
{

    private $PlatRepo;

    public function __construct(PlatRepository $PlatRepo)
    {
        $this->PlatRepo = $PlatRepo;
    }


    #[isGranted('ROLE_ADMIN')]
    #[Route('/plat_modif', name: 'app_modif')]
    public function platmodif(Request $request,): Response
    {
        $idplat = $request->request->get('id_modif_plat');
        $plat = $this->PlatRepo->info_modif($idplat);

        $form = $this->createForm(PlatModif::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plat = $this->PlatRepo->update_plat($idplat);
            
            // Redirection vers accueil
            return $this->redirectToRoute('app_platadd');
        }

        return $this->render('admin/addplat.html.twig', [
                //'form' => $form->createView(),
                'form' => $form,
                'controller_name' => 'AccueilController',
                'plat' => $plat

        ]);
    }
    ////////////////////////

    #[isGranted('ROLE_ADMIN')]
    #[Route('/plat_add', name: 'app_platadd')]
    public function platform(Request $request,): Response
    {
        $form = $this->createForm(PlatType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

    
            $message = new PlatType();
            // Traitement des données du formulaire
            $data = $form->getData();
            //on stocke les données récupérées dans la variable $message
            $message = $data;

            $entityManager->persist($message);
            $entityManager->flush();

            // Redirection vers accueil
            return $this->redirectToRoute('app_platadd');
        }

        $plat = $this->PlatRepo->findAll();
    
        return $this->render('admin/addplat.html.twig', [
                // 'form' => $form->createView(),
                'form' => $form,
                'controller_name' => 'AccueilController',
                'plat' => $plat,
        ]);
    }

    #[Route('/plat', name: 'app_plat')]
    public function cat(): Response
    {
       
        $plat = $this->PlatRepo->findAll();
        
        return $this->render('page/plat.html.twig', [
            'controller_name' => 'AccueilController',
            'plat' => $plat,
        ]);
    }

}