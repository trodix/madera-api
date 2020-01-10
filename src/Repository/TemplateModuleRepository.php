<?php

namespace App\Repository;

use App\Entity\TemplateModule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TemplateModule|null find($id, $lockMode = null, $lockVersion = null)
 * @method TemplateModule|null findOneBy(array $criteria, array $orderBy = null)
 * @method TemplateModule[]    findAll()
 * @method TemplateModule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TemplateModuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TemplateModule::class);
    }

    // /**
    //  * @return TemplateModule[] Returns an array of TemplateModule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TemplateModule
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
