<?php

namespace App\Repository;

use App\Entity\ComponentSpecification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ComponentSpecification|null find($id, $lockMode = null, $lockVersion = null)
 * @method ComponentSpecification|null findOneBy(array $criteria, array $orderBy = null)
 * @method ComponentSpecification[]    findAll()
 * @method ComponentSpecification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComponentSpecificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ComponentSpecification::class);
    }

    // /**
    //  * @return ComponentSpecification[] Returns an array of ComponentSpecification objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ComponentSpecification
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
