<?php

namespace App\Repository;

use App\Entity\Hostelly;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hostelly|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hostelly|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hostelly[]    findAll()
 * @method Hostelly[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HostellyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hostelly::class);
    }

    // /**
    //  * @return Hostelly[] Returns an array of Hostelly objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hostelly
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
