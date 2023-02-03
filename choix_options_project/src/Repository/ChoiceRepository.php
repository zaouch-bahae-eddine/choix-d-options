<?php

namespace App\Repository;

use App\Entity\Choice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Choice>
 *
 * @method Choice|null find($id, $lockMode = null, $lockVersion = null)
 * @method Choice|null findOneBy(array $criteria, array $orderBy = null)
 * @method Choice[]    findAll()
 * @method Choice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChoiceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Choice::class);
    }

    public function save(Choice $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Choice $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return Choice[] Returns an array of Choice objects
     */
    public function findStudentChoiceUnderOptionBloc($ue, $student): array
    {
        return $this->createQueryBuilder('c')
            ->join('c.ue', 'ue')
            ->andWhere('c.student = :student')
            ->setParameter('student', $student)
            ->join('ue.optionBlocs', 'optionBlocs')
            ->join('optionBlocs.ues', 'ues')
            ->andWhere(':ue IN (ues.id)')
            ->setParameter(':ue', $ue)
            ->join('optionBlocs.skillBloc', 'skillBloc')
            ->join('skillBloc.parcour', 'parcour')
            ->join('parcour.student', 'students')
            ->andWhere(':student IN (students.id)')
            ->orderBy('c.priority')
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?Choice
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
