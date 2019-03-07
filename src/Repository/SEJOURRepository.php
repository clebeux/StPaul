<?php

namespace App\Repository;

use App\Entity\SEJOUR;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SEJOUR|null find($id, $lockMode = null, $lockVersion = null)
 * @method SEJOUR|null findOneBy(array $criteria, array $orderBy = null)
 * @method SEJOUR[]    findAll()
 * @method SEJOUR[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SEJOURRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SEJOUR::class);
    }

    // /**
    //  * @return SEJOUR[] Returns an array of SEJOUR objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SEJOUR
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
