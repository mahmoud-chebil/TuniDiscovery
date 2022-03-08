<?php

namespace App\Repository;

use App\Entity\Devis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Devis|null find($id, $lockMode = null, $lockVersion = null)
 * @method Devis|null findOneBy(array $criteria, array $orderBy = null)
 * @method Devis[]    findAll()
 * @method Devis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DevisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Devis::class);
    }

    // /**
    //  * @return Devis[] Returns an array of Devis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Devis
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function orderByPrixTotAsc()
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.prixTot', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function orderByPrixTotDesc()
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.prixTot', 'DESC')
            ->getQuery()
            ->getResult();
    }
    public function orderByNbPersonneAsc()
    {
        return $this->createQueryBuilder('d')
            ->join('d.Reservation', 'r')
            ->addSelect('r')
            ->orderBy('r.nbPersonne', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function orderByNbPersonneDesc()
    {
        return $this->createQueryBuilder('d')
            ->join('d.Reservation', 'r')
            ->addSelect('r')
            ->orderBy('r.nbPersonne', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
