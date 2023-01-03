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
    private ?int $nbGroup = null;

    #[ORM\Column]
    private ?int $capacityGroup = null;

    #[ORM\Column]
    private ?int $currentCapacity = 0;

    #[ORM\ManyToOne(inversedBy: 'ues')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Bloc $bloc = null;

    #[ORM\OneToMany(mappedBy: 'ue', targetEntity: Choice::class, orphanRemoval: true)]
    private Collection $choices;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
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

    public function getNbGroup(): ?int
    {
        return $this->nbGroup;
    }

    public function setNbGroup(int $nbGroup): self
    {
        $this->nbGroup = $nbGroup;

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
    public function getBloc(): ?Bloc
    {
        return $this->bloc;
    }

    public function setBloc(?Bloc $bloc): self
    {
        $this->bloc = $bloc;

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
}
