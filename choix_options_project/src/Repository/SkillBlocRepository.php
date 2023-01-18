<?php

namespace App\Repository;

use App\Entity\SkillBloc;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SkillBloc>
 *
 * @method SkillBloc|null find($id, $lockMode = null, $lockVersion = null)
 * @method SkillBloc|null findOneBy(array $criteria, array $orderBy = null)
 * @method SkillBloc[]    findAll()
 * @method SkillBloc[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillBlocRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SkillBloc::class);
    }

    public function save(SkillBloc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(SkillBloc $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getNbUePossible($parcour):int
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.parcour = :parcour')
            ->setParameter('parcour', $parcour)
            ->select('SUM(b.ueOptionalToChose) as ueOptionalToChoseSum')
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }

//    public function findOneBySomeField($value): ?SkillBloc
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
