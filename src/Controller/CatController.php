<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Form\CatType;
use App\Entity\Categorie;
use AppBundle\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatController extends AbstractController
{

    private $CategorieRepo;

    public function __construct(CategorieRepository $CategorieRepo)
    {
        $this->CategorieRepo = $CategorieRepo;

    }

    #[Route('/categorie_add', name: 'app_Categorieadd')]
    public function contactform(Request $request,EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CatType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

    
            $message = new CatType();
            // Traitement des données du formulaire
            $data = $form->getData();
            //on stocke les données récupérées dans la variable $message
            $message = $data;

            $entityManager->persist($message);
            $entityManager->flush();

            // Redirection vers accueil
            return $this->redirectToRoute('app_Categorieadd');
        }

        $categorie = $this->CategorieRepo->findAll();
        return $this->render('admin/addcategorie.html.twig', [
                // 'form' => $form->createView(),
                'form' => $form,
                'controller_name' => 'AccueilController',
                'categorie' => $categorie
        ]);
    }

    #[Route('/categorie', name: 'app_cat')]
    public function cat(): Response
    {
        $categorie = $this->CategorieRepo->findAll();
        return $this->render('page/categorie.html.twig', [
            'controller_name' => 'AccueilController',
            'categorie' => $categorie
        ]);
    }

    public function AffBestPlat()
{
        $whereplat = $this->PlatlinkDetail();
        $qb = $this->createQueryBuilder('a');
        $qb
            ->select('*')
            ->from('plat')
            ->Where('plat.details like = '.$whereplat.'')
            ->setMaxResults(3)
            ->getQuery();

        $AffBestPlat = $qb->getResult();
        return $AffBestPlat;
    }
    public function PlatlinkDetail()
    {
        $wheredetail = $this->DetaillinkCommande();
    
            $qb = $this->createQueryBuilder('plat');
            $qb
                ->select('plat.detail')
                ->from('plat')
                ->join('', $alias, $conditionType = null, $condition = null, $indexBy = null)
                ->Where('plat like = '.$wheredetail.'')
                ->orderBy('a.i', 'ASC')
                ->getQuery();
    
            $PlatlinkDetail = $qb->getResult();
            return $PlatlinkDetail;
        }

        public function DetaillinkCommande()
        {
        
                $qb = $this->createQueryBuilder('a');
                $qb
                    ->select('plat.id')
                    ->from('plat')
                    ->join($join, $alias, $conditionType = null, $condition = null, $indexBy = null)
                    ->groupBy($groupBy)
                    ->orderBy('a.id', 'ASC')
                    ->getQuery();
        
                $DetaillinkCommande = $qb->getResult();
                return $DetaillinkCommande;
            } 
    
}

