<?php

namespace App\Repository;

use App\Entity\ModuleComponent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ModuleComponent|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModuleComponent|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModuleComponent[]    findAll()
 * @method ModuleComponent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModuleComponentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModuleComponent::class);
    }

    // /**
    //  * @return ModuleComponent[] Returns an array of ModuleComponent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ModuleComponent
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
