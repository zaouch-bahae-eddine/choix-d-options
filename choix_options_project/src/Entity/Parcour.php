<?php

namespace App\Entity;

use App\Repository\ParcourRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParcourRepository::class)]
class Parcour
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'parcour', targetEntity: SkillBloc::class, orphanRemoval: true)]
    private Collection $skillBlocs;

    #[ORM\OneToMany(mappedBy: 'parcour', targetEntity: Student::class)]
    private Collection $student;

    #[ORM\ManyToOne(inversedBy: 'parcours')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Year $year = null;

    public function __construct()
    {
        $this->skillBlocs = new ArrayCollection();
        $this->student = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, SkillBloc>
     */
    public function getSkillBlocs(): Collection
    {
        return $this->skillBlocs;
    }

    public function addSkillBloc(SkillBloc $skillBloc): self
    {
        if (!$this->skillBlocs->contains($skillBloc)) {
            $this->skillBlocs->add($skillBloc);
            $skillBloc->setParcour($this);
        }

        return $this;
    }

    public function removeSkillBloc(SkillBloc $skillBloc): self
    {
        if ($this->skillBlocs->removeElement($skillBloc)) {
            // set the owning side to null (unless already changed)
            if ($skillBloc->getParcour() === $this) {
                $skillBloc->setParcour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Student>
     */
    public function getStudent(): Collection
    {
        return $this->student;
    }

    public function addStudent(Student $student): self
    {
        if (!$this->student->contains($student)) {
            $this->student->add($student);
            $student->setParcour($this);
        }

        return $this;
    }

    public function removeStudent(Student $student): self
    {
        if ($this->student->removeElement($student)) {
            // set the owning side to null (unless already changed)
            if ($student->getParcour() === $this) {
                $student->setParcour(null);
            }
        }

        return $this;
    }

    public function getYear(): ?Year
    {
        return $this->year;
    }

    public function setYear(?Year $year): self
    {
        $this->year = $year;

        return $this;
    }
}
