<?php

namespace App\Repository;

use App\Entity\Ue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ue>
 *
 * @method Ue|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ue|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ue[]    findAll()
 * @method Ue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ue::class);
    }

    public function save(Ue $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Ue $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Ue[] Returns an array of Ue objects
//     */
//    public function findByBlocs($blocs): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.bloc IN :blocs')
//            ->setParameter('blocs', $blocs)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

    public function findByYearId($yearId): array
    {
        $ueWithoutSkillBloc = $this->createQueryBuilder('ue')
            ->leftJoin('ue.skillBlocs', 'skillBlocs')
            ->leftJoin('ue.optionBlocs', 'optionBlocs')
            ->where('skillBlocs IS NULL')
            ->getQuery()
            ->getResult();

        $ueInYear =  $this->createQueryBuilder('ue')
            ->join('ue.skillBlocs', 'ue_skillBloc')
            ->join('ue_skillBloc.parcour', 'ue_skillBloc_parcour')
            ->join('ue_skillBloc_parcour.year', 'ue_skillBloc_parcour_year')
            ->andWhere('ue_skillBloc_parcour_year.id = :yearId')
            ->setParameter('yearId', $yearId)
            ->getQuery()
            ->getResult()
        ;
        return array_merge($ueInYear, $ueWithoutSkillBloc);
    }

    public function findValidatedUesInOptionBloc($optionBloc, $student): array
    {
        return $this->createQueryBuilder('ue')
            ->innerJoin('ue.validateStudents', 'validateStudents')
            ->join('ue.optionBlocs', 'optionBlocs')
            ->andWhere('optionBlocs.id = :opt')
            ->andWhere(':student IN (validateStudents)')
            ->setParameter('opt', $optionBloc)
            ->setParameter('student', $student)
            ->getQuery()
            ->getResult()
        ;

    }

    public function findAllUeIdName(): array
    {
        return $this->createQueryBuilder('ue')
            ->select('ue.id','ue.name')
            ->getQuery()
            ->getResult()
            ;
    }

}
