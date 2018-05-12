<?php

namespace App\Repository;

use App\Entity\SingleOrder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SingleOrder|null find($id, $lockMode = null, $lockVersion = null)
 * @method SingleOrder|null findOneBy(array $criteria, array $orderBy = null)
 * @method SingleOrder[]    findAll()
 * @method SingleOrder[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SingleOrderRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SingleOrder::class);
    }

//    /**
//     * @return SingleOrder[] Returns an array of SingleOrder objects
//     */
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
    public function findOneBySomeField($value): ?SingleOrder
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
