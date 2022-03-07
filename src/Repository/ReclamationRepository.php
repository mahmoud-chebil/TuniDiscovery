<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    // /**
    //  * @return Reclamation[] Returns an array of Reclamation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Reclamation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function listReclamationByUser($idUser)
    {
        return $this->createQueryBuilder('r')
            ->join('r.idUser', 'u')
            ->addSelect('u')
            ->where('u.id=:idUser')
            ->setParameter('idUser',$idUser)
            ->getQuery()
            ->getResult();
    }

    public function findType()
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager
            ->createQuery('SELECT p FROM App\Entity\TypeReclamation p');
        return $query->getResult();
    }

    public function listReclamationByType($IdType)
    {
        return $this->createQueryBuilder('r')
            ->join('r.IdType', 't')
            ->addSelect('t')
            ->where('t.id=:IdType')
            ->setParameter('IdType',$IdType)
            ->getQuery()
            ->getResult();
    }


}
