<?php

namespace App\Controller;


use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Security\AppCustomAuthenticator;
use App\Security\EmailVerifier;
use App\Service\AuthService;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use App\Repository\CategorieRepository;
use App\Form\CatType;
use App\Entity\Categorie;
use App\Repository\PlatRepository;
use App\Form\PlatType;
use Symfony\Component\Security\Core\Security;
use App\Entity\Plat;
use AppBundle\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DetailRepository;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class CatController extends AbstractController
{
    private $error;
    private $lastUsername;
    private $CategorieRepo;
    private $DetailRepo;
    private $PlatRepo;

    public function __construct(CategorieRepository $CategorieRepo,DetailRepository $DetailRepo,PlatRepository $PlatRepo)
    {   
        $this->CategorieRepo = $CategorieRepo;
        $this->DetailRepo = $DetailRepo;
        $this->PlatRepo = $PlatRepo;

    }

    #[isGranted('ROLE_ADMIN')]
    #[Route('/categorie_modif', name: 'app_catmodif')]
    public function catmodif(Security $security,Request $request): Response
    {
        $form = $this->createForm(CatType::class);
        $form->handleRequest($request);
        $idcat = $request->request->get('id_modif_cat');
        $categorie = info_modif($idcat);


        if ($form->isSubmitted() && $form->isValid()) {

            $libelle = $request->request->get('plat_libelle');
            $image = $request->request->get('plat_image');
            $active = $request->request->get('plat_active');

            $query = $this->createQueryBuilder('p')
            ->update()
            ->set('p.libelle', ':libelle')
            ->set('p.image', ':image')
            ->set('p.active', ':active')

            ->where('p.id = :editId')

            ->setParameter('libelle',  $libelle)
            ->setParameter('categorie', $categorie)
            ->setParameter('image', $image)
            ->setParameter('description', $description)
            ->setParameter('prix', $prix)
            ->setParameter('active', $active)

            ->setParameter('editId', $idplat['id'])

            ->getQuery()
            ->execute();
            return $this->redirectToRoute('app_Categorieadd');
        }

        return $this->render('admin/addcategorie.html.twig', [
            'form' => $form,
            'controller_name' => 'AccueilController',
            'categorie' => $categorie,
    ]);


}

    #[isGranted('ROLE_ADMIN')]
    #[Route('/categorie_add', name: 'app_Categorieadd')]
    public function contactform(Security $security,Request $request): Response
    {
        $form = $this->createForm(CatType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

    
            $message = new CatType();
            $data = $form->getData();
            $message = $data;

            $entityManager->persist($message);
            $entityManager->flush();

            return $this->redirectToRoute('app_Categorieadd');
        }

        $categorie = $this->CategorieRepo->findAll();

        return $this->render('admin/addcategorie.html.twig', [
                'form' => $form,
                'controller_name' => 'AccueilController',
                'categorie' => $categorie,
        ]);


    }

    #[Route('/categorie', name: 'app_cat')]
    public function cat(): Response
    {

        $categorie = $this->CategorieRepo->findAll();
        $detail = $this->DetailRepo->AffPlatBest();
       
        return $this->render('page/categorie.html.twig', [
            'controller_name' => 'AccueilController',
            'categorie' => $categorie,
        ]);
    }
    
    #[Route('/search/{libelle}', name: 'app_platcat')]
    public function platcat($libelle): Response
    {
    
        $plat = $this->PlatRepo->findAll();
        $libellecat = $libelle;

        return $this->render('page/platcat.html.twig', [
            'controller_name' => 'AccueilController',
            'plat' => $plat,
            'redirectinput' => $libellecat,
        ]);
    }

    #[Route('/search', name: 'app_platsearch')]
    public function platsearch(): Response
    {

        $plat = $this->PlatRepo->findAll();
        $searchinplat = $request->request->get('resultsearch');
        $Aff_search = $this->PlatRepo->Aff_Search($searchinplat);
    
        return $this->render('page/platsearch.html.twig', [
            'controller_name' => 'AccueilController',
            'plat' => $plat,
            'resultsearch' => $Aff_search,
  
        ]);
    }
    
}

