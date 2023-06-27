<?php

namespace App\Repository;

use App\Entity\Detail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Detail>
 *
 * @method Detail|null find($id, $lockMode = null, $lockVersion = null)
 * @method Detail|null findOneBy(array $criteria, array $orderBy = null)
 * @method Detail[]    findAll()
 * @method Detail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Detail::class);
    }

    public function save(Detail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Detail $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

   /**
    * @return Detail[] Returns an array of Detail objects
    */
   public function AffPlatBest(): array
   {
       return $this->createQueryBuilder('d')
           ->Select('p.id,p.active,p.prix,p.libelle,p.image, (COUNT(c.id)*SUM(d.quantite)) as resultat')
           ->Join('d.plat','p')
           ->Join('d.commande','c')
           ->GroupBy('p.id')
           ->orderBy("resultat", 'DESC')
           ->setMaxResults(3)
           ->getQuery()
           ->getResult()
       ;
   }

   public function AffCatBest(): array
   {
       return $this->createQueryBuilder('d')
           ->Select('k.id,k.libelle,k.image,k.active, (COUNT(c.id)*SUM(d.quantite)) as resultat')
           ->Join('d.plat','p')
           ->Join('p.categorie','k')
           ->Join('d.commande','c')
           ->GroupBy('k.id')
           ->orderBy("resultat", 'DESC')
           ->setMaxResults(6)
           ->getQuery()
           ->getResult()
       ;
   }

   public function AffHistoriqueCmd($userid): array
   {
       return $this->createQueryBuilder('d')
        ->Select('p.libelle,p.prix,k.date_commande,k.etat,d.quantite,k.total,k.id')
        ->Join('d.plat','p')
        ->Join('d.commande','k')
        ->Join('d.commande','c')
        ->Join('c.utilisateur','u')
        ->Where('u.id = :userid')
        ->setParameter('userid', "$userid")
        ->getQuery()
        ->getResult()
       ;
   }

//    public function findOneBySomeField($value): ?Detail
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
