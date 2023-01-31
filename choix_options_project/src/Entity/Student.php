<?php

namespace App\Entity;

use App\Repository\StudentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'student', targetEntity: Choice::class, orphanRemoval: true)]
    private Collection $choices;

    #[ORM\ManyToOne(inversedBy: 'student')]
    #[ORM\JoinColumn(nullable: true)]
    private ?Parcour $parcour = null;

    #[ORM\ManyToOne(inversedBy: 'students')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Year $year = null;

    #[ORM\ManyToOne(inversedBy: 'students')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToMany(targetEntity: Follow::class, mappedBy: 'students')]
    private Collection $follows;

    #[ORM\ManyToMany(targetEntity: Ue::class, mappedBy: 'validateStudents')]
    private Collection $validatedUes;

    #[ORM\ManyToMany(targetEntity: Ue::class, inversedBy: 'studentsPursue')]
    private Collection $pursue;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
        $this->follows = new ArrayCollection();
        $this->validatedUes = new ArrayCollection();
        $this->pursue = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Choice>
     */
    public function getChoices(): Collection
    {
        return $this->choices;
    }

    public function addChoice(Choice $choice): self
    {
        if (!$this->choices->contains($choice)) {
            $this->choices->add($choice);
            $choice->setStudent($this);
        }

        return $this;
    }

    public function removeChoice(Choice $choice): self
    {
        if ($this->choices->removeElement($choice)) {
            // set the owning side to null (unless already changed)
            if ($choice->getStudent() === $this) {
                $choice->setStudent(null);
            }
        }

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

    public function getYear(): ?Year
    {
        return $this->year;
    }

    public function setYear(?Year $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Follow>
     */
    public function getFollows(): Collection
    {
        return $this->follows;
    }

    public function addFollow(Follow $follow): self
    {
        if (!$this->follows->contains($follow)) {
            $this->follows->add($follow);
            $follow->addStudent($this);
        }

        return $this;
    }

    public function removeFollow(Follow $follow): self
    {
        if ($this->follows->removeElement($follow)) {
            $follow->removeStudent($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Ue>
     */
    public function getValidatedUes(): Collection
    {
        return $this->validatedUes;
    }

    public function addValidatedUe(Ue $validatedUe): self
    {
        if (!$this->validatedUes->contains($validatedUe)) {
            $this->validatedUes->add($validatedUe);
        }

        return $this;
    }

    public function removeValidatedUe(Ue $validatedUe): self
    {
        $this->validatedUes->removeElement($validatedUe);

        return $this;
    }

    /**
     * @return Collection<int, Ue>
     */
    public function getPursue(): Collection
    {
        return $this->pursue;
    }

    public function addPursue(Ue $pursue): self
    {
        if (!$this->pursue->contains($pursue)) {
            $this->pursue->add($pursue);
        }

        return $this;
    }

    public function removePursue(Ue $pursue): self
    {
        $this->pursue->removeElement($pursue);

        return $this;
    }

}
