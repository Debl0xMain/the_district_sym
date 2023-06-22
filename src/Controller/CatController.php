<?php

namespace App\Controller;


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


use App\Repository\CategorieRepository;
use App\Form\CatType;
use App\Entity\Categorie;
use App\Repository\PlatRepository;
use App\Form\PlatType;
use App\Entity\Plat;
use AppBundle\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DetailRepository;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class CatController extends AbstractController
{
    private $error;
    private $lastUsername;
    private $CategorieRepo;
    private $DetailRepo;
    private $PlatRepo;

    public function __construct(AuthenticationUtils $authenticationUtils,CategorieRepository $CategorieRepo,DetailRepository $DetailRepo,PlatRepository $PlatRepo)
    {   
        $this->error = $authenticationUtils->getLastAuthenticationError();
        $this->lastUsername = $authenticationUtils->getLastUsername();
        $this->CategorieRepo = $CategorieRepo;
        $this->DetailRepo = $DetailRepo;
        $this->PlatRepo = $PlatRepo;

    }

    #[Route('/categorie_add', name: 'app_Categorieadd')]
    public function contactform(Request $request,UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $lastUsername = $this->lastUsername;
        $error = $this->error;
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
        if ($rform->isSubmitted() && $rform->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $rform->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('the_district@contact.fr', 'Mail Auto'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }
        return $this->render('admin/addcategorie.html.twig', [
                // 'form' => $form->createView(),
                'form' => $form,
                'controller_name' => 'AccueilController',
                'categorie' => $categorie,
                'last_username' => $lastUsername,
                'error' => $error,
                'registrationForm' => $rform->createView()
                
        ]);
    }

    #[Route('/categorie', name: 'app_cat')]
    public function cat(Request $request,UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager
	): Response
    {
        $lastUsername = $this->lastUsername;
        $error = $this->error;
        $categorie = $this->CategorieRepo->findAll();
        $detail = $this->DetailRepo->AffPlatBest();
        $user = new Utilisateur();
        $rform = $this->createForm(RegistrationFormType::class, $user);
        $rform->handleRequest($request);

        if ($rform->isSubmitted() && $rform->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $rform->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('the_district@contact.fr', 'Mail Auto'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }
        return $this->render('page/categorie.html.twig', [
            'controller_name' => 'AccueilController',
            'categorie' => $categorie,
            'last_username' => $lastUsername,
            'error' => $error,
            'registrationForm' => $rform->createView()
            
        ]);
    }
    
    #[Route('/search/{libelle}', name: 'app_platcat')]
    public function platcat($libelle, Request $request,UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $lastUsername = $this->lastUsername;
        $error = $this->error;
        $plat = $this->PlatRepo->findAll();
        $libellecat = $libelle;
        if ($rform->isSubmitted() && $rform->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $rform->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('the_district@contact.fr', 'Mail Auto'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }

        return $this->render('page/platcat.html.twig', [
            'controller_name' => 'AccueilController',
            'plat' => $plat,
            'redirectinput' => $libellecat,
            'last_username' => $lastUsername,
            'error' => $error,
            'registrationForm' => $rform->createView()
            
        ]);
    }

    #[Route('/search', name: 'app_platsearch')]
    public function platsearch(Request $reques,Request $request,UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, AppCustomAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $lastUsername = $this->lastUsername;
        $error = $this->error;
        $plat = $this->PlatRepo->findAll();
        $searchinplat = $request->request->get('resultsearch');
        $Aff_search = $this->PlatRepo->Aff_Search($searchinplat);
        $user = new Utilisateur();
        $rform = $this->createForm(RegistrationFormType::class, $user);
        $rform->handleRequest($request);

        if ($rform->isSubmitted() && $rform->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $rform->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('the_district@contact.fr', 'Mail Auto'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $user,
                $authenticator,
                $request
            );
        }
        return $this->render('page/platsearch.html.twig', [
            'controller_name' => 'AccueilController',
            'plat' => $plat,
            'resultsearch' => $Aff_search,
            'last_username' => $lastUsername,
            'error' => $error,
            'registrationForm' => $rform->createView()
            
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

