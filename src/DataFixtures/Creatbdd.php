<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Categorie;
use App\Entity\Commande;
use App\Entity\Admin;
use App\Entity\Contact;
use App\Entity\Detail;
use App\Entity\Plat;
use App\Entity\Utilisateur;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class Creatbdd extends Fixture
{
    private $hasher;

    public function __construct(UserPasswordHasherInterface $hasher){
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $categorie1 = new categorie();

        $categorie1->setLibelle("Pizza");
        $categorie1->setImage("pizza_cat.jpg");
        $categorie1->setActive(1);

        

        $manager->persist($categorie1);


        $categorie2 = new categorie();

        $categorie2->setLibelle("Burger");
        $categorie2->setImage("burger_cat.jpg");
        $categorie2->setActive(1);

        

        $manager->persist($categorie2);


        $categorie3 = new categorie();

        $categorie3->setLibelle("Wraps");
        $categorie3->setImage("wrap_cat.jpg");
        $categorie3->setActive(1);

        

        $manager->persist($categorie3);


        $categorie4 = new categorie();

        $categorie4->setLibelle("Pasta");
        $categorie4->setImage("pasta_cat.jpg");
        $categorie4->setActive(1);

        

        $manager->persist($categorie4);

        $categorie5 = new categorie();

        $categorie5->setLibelle("Sandwich");
        $categorie5->setImage("sandwich_cat.jpg");
        $categorie5->setActive(1);

        

        $manager->persist($categorie5);


        $categorie6 = new categorie();

        $categorie6->setLibelle("Asian Food");
        $categorie6->setImage("asian_food_cat.jpg");
        $categorie6->setActive(0);

        

        $manager->persist($categorie6);


        $categorie7 = new categorie();

        $categorie7->setLibelle("Salade");
        $categorie7->setImage("salade_cat.jpg");
        $categorie7->setActive(1);

        

        $manager->persist($categorie7);


        $categorie8 = new categorie();

        $categorie8->setLibelle("Veggie");
        $categorie8->setImage("veggie_cat.jpg");
        $categorie8->setActive(1);

        

        $manager->persist($categorie8);

        $plat1 = new Plat();

        $plat1->setLibelle("District Burger");
        $plat1->setDescription("Burger composé d’un bun’s du boulanger, deux steaks de 80g (origine française), de deux tranches poitrine de porc fumée, de deux tranches cheddar affiné, salade et oignons confits.");
        $plat1->setPrix("8.0");
        $plat1->setImage("hamburger.jpg");
        $plat1->setActive(1);
        $plat1->setCategorie($categorie2);



        $manager->persist($plat1);


        $plat2 = new Plat();
        $plat2->setLibelle("Pizza Bianca");
        $plat2->setDescription("Une pizza fine et croustillante garnie de crème mascarpone légèrement citronnée et de tranches de saumon fumé, le tout relevé de baies roses et de basilic frais.");
        $plat2->setPrix("14.0");
        $plat2->setImage("pizza-salmon.jpg");
        $plat2->setActive(1);
        $plat2->setCategorie($categorie1);



        $manager->persist($plat2);

        $plat3 = new Plat();

        $plat3->setLibelle("Buffalo chicken Wrap");
        $plat3->setDescription("Du bon filet de poulet mariné dans notre spécialité sucrée & épicée, enveloppé dans une tortilla blanche douce faite maison.");
        $plat3->setPrix("5.0");
        $plat3->setImage("buffalo-chicken.jpg");
        $plat3->setActive(1);
        $plat3->setCategorie($categorie3);



        $manager->persist($plat3);

        $plat4 = new Plat();

        $plat4->setLibelle("Cheesburger");
        $plat4->setDescription("Burger composé d’un bun’s du boulanger, de salade, oignons rouges, pickles, oignon confit, tomate, d’un steak d’origine Française, d’une tranche de cheddar affiné, et de notre sauce maison.");
        $plat4->setPrix("8.0");
        $plat4->setImage("cheesburger.jpg");
        $plat4->setActive(1);
        $plat4->setCategorie($categorie2);



        $manager->persist($plat4);

        $plat5 = new Plat();

        $plat5->setLibelle("Spaghetti aux légumes");
        $plat5->setDescription("Un plat de spaghetti au pesto de basilic et légumes poêlés, très parfumé et rapide.");
        $plat5->setPrix("10.0");
        $plat5->setImage("spaghetti-legumes.jpg");
        $plat5->setActive(1);
        $plat5->setCategorie($categorie4);



        $manager->persist($plat5);


        $plat6 = new Plat();

        $plat6->setLibelle("Salade César");
        $plat6->setDescription("Une délicieuse salade Caesar (César) composée de filets de poulet grillés, de feuilles croquantes de salade romaine, de croutons à l'ail, de tomates cerise et surtout de sa fameuse sauce Caesar. Le tout agrémenté de copeaux de parmesan.");
        $plat6->setPrix("7.0");
        $plat6->setImage("cesar_salad.jpg");
        $plat6->setActive(1);
        $plat6->setCategorie($categorie7);



        $manager->persist($plat6);


        $plat7 = new Plat();

        $plat7->setLibelle("Pizza Margherita");
        $plat7->setDescription("Une authentique pizza margarita, un classique de la cuisine italienne! Une pâte faite maison, une sauce tomate fraîche, de la mozzarella Fior di latte, du basilic, origan, ail, sucre, sel & poivre...");
        $plat7->setPrix("14.0");
        $plat7->setImage("pizza-margherita.jpg");
        $plat7->setActive(1);
        $plat7->setCategorie($categorie1);



        $manager->persist($plat7);




        $plat8 = new Plat();

        $plat8->setLibelle("Courgettes au quinoa et duxelles");
        $plat8->setDescription("Voici une recette équilibrée à base de courgettes, quinoa et champignons, 80% vegan et sans gluten!");
        $plat8->setPrix("8.0");
        $plat8->setImage("courgettes_farcies.jpg");
        $plat8->setActive(1);
        $plat8->setCategorie($categorie8);



        $manager->persist($plat8);


        $plat9 = new Plat();

        $plat9->setLibelle("Lasagne");
        $plat9->setDescription("Découvrez notre recette des lasagnes, l'une des spécialités italiennes que tout le monde aime avec sa viande hachée et gratinée à l'emmental. Et bien sûr, une inoubliable béchamel à la noix de muscade.");
        $plat9->setPrix("12.0");
        $plat9->setImage("lasagnes_viande.jpg");
        $plat9->setActive(1);
        $plat9->setCategorie($categorie4);



        $manager->persist($plat9);



        $plat10 = new Plat();

        $plat10->setLibelle("Tagliatelles au saumon");
        $plat10->setDescription("Découvrez notre recette délicieuse de tagliatelles au saumon frais et à la crème qui qui vous assure un véritable régal!  ");
        $plat10->setPrix("12.0");
        $plat10->setImage("tagliatelles_saumon.webp");
        $plat10->setActive(1);
        $plat10->setCategorie($categorie4);



        $manager->persist($plat10);


        $user1=New Utilisateur();
        $user1->SetEmail("admin@admin.fr");
        $user1->getRoles('[ROLE_USER]');
        $user1->setIsVerified(1);
        $user1->SetPassword($this->hasher->hashPassword($user1, 'admin'));
        $user1->SetNom('Admin');
        $user1->SetPrenom('Admin');
        $user1->SetTelephone('0000000000');
        $user1->SetAdresse("2 rue d\'amins");
        $user1->SetCp('80000');
        $user1->SetVille('Amiens');

        $manager->persist($user1);

        $user=New Utilisateur();
        $user->SetEmail("sadmin@admin.fr");
        $user->SetPassword($this->hasher->hashPassword($user, 'admin'));
        $user->setRoles(['ROLE_ADMIN']);
        $user->setIsVerified(1);
        $user->SetNom('Admin');
        $user->SetPrenom('Admin');
        $user->SetTelephone('0000000000');
        $user->SetAdresse("2 rue d\'amins");
        $user->SetCp('80000');
        $user->SetVille('Amiens');

        $manager->persist($user);

        $manager->flush();


        $commande1 =new Commande();
        $commande1->SetUtilisateur($user1);
        $commande1->setDateCommande(new \DateTime("2020-11-30 03:52:53"));
        $commande1->setTotal("16.0");
        $commande1->setEtat(3);

        $manager->persist($commande1);


        $commande2 =new Commande();
        $commande2->SetUtilisateur($user1);
        $commande2->setDateCommande(new \DateTime("2020-11-30 04:07:17"));
        $commande2->setTotal("20.0");
        $commande2->setEtat(3);

        $manager->persist($commande2);

        $commande3 =new Commande();
        $commande3->SetUtilisateur($user1);
        $commande3->setDateCommande(new \DateTime("2021-05-04 01:35:34"));
        $commande3->setTotal("10.0");
        $commande3->setEtat(3);

        $manager->persist($commande3);

        $commande4 =new Commande();
        $commande4->SetUtilisateur($user1);
        $commande4->setDateCommande(new \DateTime('2021-07-20 06:40:21'));
        $commande4->setTotal("8.0");
        $commande4->setEtat(2);

        $manager->persist($commande4);

        $commande5 =new Commande();
        $commande5->SetUtilisateur($user1);
        $commande5->setDateCommande(new \DateTime("2021-07-20 06:40:57"));
        $commande5->setTotal("6.0");
        $commande5->setEtat(1);

        $manager->persist($commande5);

        $commande6 =new Commande();
        $commande6->SetUtilisateur($user1);
        $commande6->setDateCommande(new \DateTime("2021-07-20 07:06:06"));
        $commande6->setTotal("20.0");
        $commande6->setEtat(0);

        $manager->persist($commande6);

        $detail1 =new detail();
        $detail1->setPlat($plat1);
        $detail1->setQuantite(3);
        $detail1->setCommande($commande1);

        $manager->persist($detail1);


        $detail2 =new detail();
        $detail2->setPlat($plat3);
        $detail2->setQuantite(2);
        $detail2->setCommande($commande3);

        $manager->persist($detail2);


        $detail3 =new detail();
        $detail3->setPlat($plat2);
        $detail3->setQuantite(1);
        $detail3->setCommande($commande4);

        $manager->persist($detail3);

        $detail4 =new detail();
        $detail4->setPlat($plat3);
        $detail4->setQuantite(2);
        $detail4->setCommande($commande3);

        $manager->persist($detail4);

        $manager->flush();
    }
}
