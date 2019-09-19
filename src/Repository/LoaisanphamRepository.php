<?php

namespace App\Repository;

use App\Entity\Loaisanpham;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Loaisanpham|null find($id, $lockMode = null, $lockVersion = null)
 * @method Loaisanpham|null findOneBy(array $criteria, array $orderBy = null)
 * @method Loaisanpham[]    findAll()
 * @method Loaisanpham[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LoaisanphamRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Loaisanpham::class);
    }

    // /**
    //  * @return Loaisanpham[] Returns an array of Loaisanpham objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Loaisanpham
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
