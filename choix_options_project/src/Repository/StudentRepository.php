<?php

namespace App\Repository;

use App\Entity\Student;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Student>
 *
 * @method Student|null find($id, $lockMode = null, $lockVersion = null)
 * @method Student|null findOneBy(array $criteria, array $orderBy = null)
 * @method Student[]    findAll()
 * @method Student[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Student::class);
    }

    public function save(Student $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Student $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Student[] Returns an array of Student objects
     */
    public function findByChoiceUEPriority($ue): array
    {
        return $this->createQueryBuilder('s')
            ->join('s.choices', 'choices')
            ->join('choices.ue', 'choiceUe')
            ->join('choiceUe.optionBlocs', 'optionBlocs')
            ->join('optionBlocs.skillBloc', 'skillBloc')
            ->andWhere('choices.ue = :ue')
            ->setParameter(':ue', $ue)
            ->andWhere('s.parcour = skillBloc.parcour')
            ->andWhere('choices.priority <= optionBlocs.nbUeToChose')
            ->getQuery()
            ->getResult()
        ;
    }


    /**
     * @return Student[] Returns an array of Student objects
     */
    public function findStudentNoneFollowUe($ue): array
    {
        return $this->createQueryBuilder('s')
            ->join('s.choices', 'choices')
            ->join('choices.ue', 'choiceUe')
            ->join('choiceUe.optionBlocs', 'optionBlocs')
            ->join('optionBlocs.skillBloc', 'skillBloc')
            ->andWhere('choices.ue = :ue')
            ->setParameter(':ue', $ue)
            ->andWhere('s.parcour = skillBloc.parcour')
            ->andWhere('choices.priority <= optionBlocs.nbUeToChose')
            ->leftJoin('s.follows', 'follows')
            ->andWhere('(follows IS NULL) OR (:ue NOT IN (follows.ue))')
            ->leftJoin('s.validatedUes', 'validatedUes')
            ->andwhere('(validatedUes IS NULL) OR (:ue NOT IN (validatedUes))')
            ->getQuery()
            ->getResult()
            ;
    }


    /**
     * @return Student[] Returns an array of Student objects
     */
    public function findStudentFollowUe($ue): array
    {
        return $this->createQueryBuilder('s')
            ->join('s.choices', 'choices')
            ->join('choices.ue', 'choiceUe')
            ->join('choiceUe.optionBlocs', 'optionBlocs')
            ->join('optionBlocs.skillBloc', 'skillBloc')
            ->andWhere('choices.ue = :ue')
            ->andWhere('s.parcour = skillBloc.parcour')
            ->innerJoin('s.follows', 'follows')
            ->andWhere('follows.ue = :ue')
            ->setParameter(':ue', $ue)
            ->getQuery()
            ->getResult()
            ;
    }

//    public function findOneBySomeField($value): ?Student
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
