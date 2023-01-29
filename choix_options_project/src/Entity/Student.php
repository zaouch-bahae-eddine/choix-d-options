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

    #[ORM\ManyToMany(targetEntity: Ue::class)]
    private Collection $validateUes;

    #[ORM\ManyToOne(inversedBy: 'students')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Year $year = null;

    #[ORM\ManyToOne(inversedBy: 'students')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\ManyToMany(targetEntity: Follow::class, mappedBy: 'students')]
    private Collection $follows;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
        $this->follows = new ArrayCollection();
        $this->validateUes = new ArrayCollection();
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

    /**
     * @return Collection<int, Ue>
     */
    public function getValidateUes(): Collection
    {
        return $this->validateUes;
    }

    public function addValidateUe(Ue $validateUe): self
    {
        if (!$this->validateUes->contains($validateUe)) {
            $this->validateUes->add($validateUe);
        }

        return $this;
    }

    public function removeValidateUe(Ue $validateUe): self
    {
        $this->validateUes->removeElement($validateUe);

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

}
