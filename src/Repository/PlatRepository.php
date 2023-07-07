<?php

namespace App\Repository;

use App\Entity\Plat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Plat>
 *
 * @method Plat|null find($id, $lockMode = null, $lockVersion = null)
 * @method Plat|null findOneBy(array $criteria, array $orderBy = null)
 * @method Plat[]    findAll()
 * @method Plat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Plat::class);
    }

    public function save(Plat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Plat $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function Aff_Search($searchinplat): array
    {
        return $this->createQueryBuilder('p')

        ->Where('p.libelle like :search')
        ->setParameter('search', "%".$searchinplat."%")
            ->getQuery()
            ->getResult()
        ;
    }

    public function returnpanier($idplatpanier):array{

        return $this->createQueryBuilder('p')
           ->Select('p.id,p.prix,p.libelle,p.image')
           ->Where('p.id like :search')
           ->setParameter('search', "%".$idplatpanier."%")
           ->getQuery()
           ->getResult()
       ;
    }

    public function info_modif($idplat):array{

        return $this->createQueryBuilder('p')

        ->Where('p.id like :search')
        ->setParameter('search', "%".$idplat."%")
        ->getQuery()
        ->getResult()
        ;
    }

    public function update_plat($idplat) {

        $libelle = $request->request->get('plat_libelle');
        $categorie = $request->request->get('plat_categorie');
        $image = $request->request->get('plat_image');
        $description = $request->request->get('plat_description');
        $prix = $request->request->get('plat_prix');
        $active = $request->request->get('plat_active');

        $query = $this->createQueryBuilder('p')
        ->update()
        ->set('p.libelle', ':libelle')
        ->set('p.email', ':email')
        ->set('p.image', ':image')
        ->set('p.description', ':description')
        ->set('p.prix', ':prix')
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
    }


    

    
//    /**
//     * @return Plat[] Returns an array of Plat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Plat
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
