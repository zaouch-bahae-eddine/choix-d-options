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
    private ?int $status = null;

    #[ORM\Column]
    private ?int $capacityGroup = null;

    #[ORM\Column]
    private ?int $currentCapacity = 0;

    #[ORM\OneToMany(mappedBy: 'ue', targetEntity: Choice::class, orphanRemoval: true)]
    private Collection $choices;

    #[ORM\ManyToOne(inversedBy: 'uess')]
    private ?SkillBloc $skillBloc = null;

    #[ORM\ManyToOne(inversedBy: 'ues')]
    private ?OptionBloc $optionBloc = null;

    #[ORM\OneToMany(mappedBy: 'ue', targetEntity: Follow::class, orphanRemoval: true)]
    private Collection $follows;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
        $this->follows = new ArrayCollection();
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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

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

    public function getSkillBloc(): ?SkillBloc
    {
        return $this->skillBloc;
    }

    public function setSkillBloc(?SkillBloc $skillBloc): self
    {
        $this->skillBloc = $skillBloc;

        return $this;
    }

    public function getOptionBloc(): ?OptionBloc
    {
        return $this->optionBloc;
    }

    public function setOptionBloc(?OptionBloc $optionBloc): self
    {
        $this->optionBloc = $optionBloc;

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
}
