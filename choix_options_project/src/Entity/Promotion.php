<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $anneeMaster = null;

    #[ORM\Column]
    private ?int $datePromotion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateLimiteChoixOptions = null;

    #[ORM\ManyToOne(inversedBy: 'promotions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Parcour $parcour = null;


    #[ORM\OneToMany(mappedBy: 'promotion', targetEntity: Student::class, orphanRemoval: true)]
    private Collection $students;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->students = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnneeMaster(): ?int
    {
        return $this->anneeMaster;
    }

    public function setAnneeMaster(int $anneeMaster): self
    {
        $this->anneeMaster = $anneeMaster;

        return $this;
    }

    public function getDatePromotion(): ?int
    {
        return $this->datePromotion;
    }

    public function setDatePromotion(int $datePromotion): self
    {
        $this->datePromotion = $datePromotion;

        return $this;
    }

    public function getDateLimiteChoixOptions(): ?\DateTimeInterface
    {
        return $this->dateLimiteChoixOptions;
    }

    public function setDateLimiteChoixOptions(\DateTimeInterface $dateLimiteChoixOptions): self
    {
        $this->dateLimiteChoixOptions = $dateLimiteChoixOptions;

        return $this;
    }

    public function getParcour(): ?Parcour
    {
        return $this->parcour;
    }

    public function setParcour(?Parcour $parcour): self
    {
        $this->parcour = $parcour;

        return $this;
    }


    /**
     * @return Collection<int, Student>
     */
    public function getStudents(): Collection
    {
        return $this->students;
    }

    public function addStudent(Student $student): self
    {
        if (!$this->students->contains($student)) {
            $this->students->add($student);
            $student->setPromotion($this);
        }

        return $this;
    }

    public function removeStudent(Student $student): self
    {
        if ($this->students->removeElement($student)) {
            // set the owning side to null (unless already changed)
            if ($student->getPromotion() === $this) {
                $student->setPromotion(null);
            }
        }

        return $this;
    }
}
