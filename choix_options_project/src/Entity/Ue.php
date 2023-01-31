<?php

namespace App\Entity;

use App\Repository\UeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UeRepository::class)]
class Ue
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $capacityGroup = null;

    #[ORM\Column]
    private ?int $currentCapacity = 0;

    #[ORM\OneToMany(mappedBy: 'ue', targetEntity: Choice::class, orphanRemoval: true)]
    private Collection $choices;

    #[ORM\OneToMany(mappedBy: 'ue', targetEntity: Follow::class, orphanRemoval: true)]
    private Collection $follows;

    #[ORM\Column]
    private ?int $nbGroup = null;

    #[ORM\ManyToMany(targetEntity: SkillBloc::class, inversedBy: 'ues')]
    private Collection $skillBlocs;

    #[ORM\ManyToMany(targetEntity: OptionBloc::class, inversedBy: 'ues')]
    private Collection $optionBlocs;

    #[ORM\ManyToMany(targetEntity: Student::class, inversedBy: 'validatedUes')]
    private Collection $validateStudents;

    #[ORM\ManyToMany(targetEntity: Student::class, mappedBy: 'pursue')]
    private Collection $studentsPursue;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
        $this->follows = new ArrayCollection();
        $this->skillBlocs = new ArrayCollection();
        $this->optionBlocs = new ArrayCollection();
        $this->validateStudents = new ArrayCollection();
        $this->studentsPursue = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): self
    {
        if ($id instanceof Ue){
            $id = $id->getId();
        }
        $this->id = $id;

        return $this;
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

    public function getCapacityGroup(): ?int
    {
        return $this->capacityGroup;
    }

    public function setCapacityGroup(int $capacityGroup): self
    {
        $this->capacityGroup = $capacityGroup;

        return $this;
    }
    public function getCurrentCapacity(): ?int
    {
        return $this->currentCapacity;
    }
    public function setCurrentCapacity(int $currentCapacity): self
    {
        $this->currentCapacity = $currentCapacity;

        return $this;
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
            $choice->setUe($this);
        }

        return $this;
    }

    public function removeChoice(Choice $choice): self
    {
        if ($this->choices->removeElement($choice)) {
            // set the owning side to null (unless already changed)
            if ($choice->getUe() === $this) {
                $choice->setUe(null);
            }
        }

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
            $follow->setUe($this);
        }

        return $this;
    }

    public function removeFollow(Follow $follow): self
    {
        if ($this->follows->removeElement($follow)) {
            // set the owning side to null (unless already changed)
            if ($follow->getUe() === $this) {
                $follow->setUe(null);
            }
        }

        return $this;
    }

    public function getNbGroup(): ?int
    {
        return $this->nbGroup;
    }

    public function setNbGroup(int $nbGroup): self
    {
        $this->nbGroup = $nbGroup;

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
        }

        return $this;
    }

    public function removeSkillBloc(SkillBloc $skillBloc): self
    {
        $this->skillBlocs->removeElement($skillBloc);

        return $this;
    }

    /**
     * @return Collection<int, OptionBloc>
     */
    public function getOptionBlocs(): Collection
    {
        return $this->optionBlocs;
    }

    public function addOptionBloc(OptionBloc $optionBloc): self
    {
        if (!$this->optionBlocs->contains($optionBloc)) {
            $this->optionBlocs->add($optionBloc);
        }

        return $this;
    }

    public function removeOptionBloc(OptionBloc $optionBloc): self
    {
        $this->optionBlocs->removeElement($optionBloc);

        return $this;
    }

    /**
     * @return Collection<int, Student>
     */
    public function getValidateStudents(): Collection
    {
        return $this->validateStudents;
    }

    public function addValidateStudent(Student $student): self
    {
        if (!$this->validateStudents->contains($student)) {
            $this->validateStudents->add($student);
        }

        return $this;
    }

    public function removeValidateStudent(Student $student): self
    {
        $this->validateStudents->removeElement($student);

        return $this;
    }

    public function __toString()
    {
        return $this->getId();
    }

    /**
     * @return Collection<int, Student>
     */
    public function getStudentsPursue(): Collection
    {
        return $this->studentsPursue;
    }

    public function addStudentsPursue(Student $studentsPursue): self
    {
        if (!$this->studentsPursue->contains($studentsPursue)) {
            $this->studentsPursue->add($studentsPursue);
            $studentsPursue->addPursue($this);
        }

        return $this;
    }

    public function removeStudentsPursue(Student $studentsPursue): self
    {
        if ($this->studentsPursue->removeElement($studentsPursue)) {
            $studentsPursue->removePursue($this);
        }

        return $this;
    }
}
