<?php

namespace App\Entity;

use App\Repository\YearRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: YearRepository::class)]
class Year
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'year', targetEntity: Parcour::class, orphanRemoval: true)]
    private Collection $parcours;

    public function __construct()
    {
        $this->parcours = new ArrayCollection();
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
     * @return Collection<int, Parcour>
     */
    public function getParcours(): Collection
    {
        return $this->parcours;
    }

    public function addParcour(Parcour $parcour): self
    {
        if (!$this->parcours->contains($parcour)) {
            $this->parcours->add($parcour);
            $parcour->setYear($this);
        }

        return $this;
    }

    public function removeParcour(Parcour $parcour): self
    {
        if ($this->parcours->removeElement($parcour)) {
            // set the owning side to null (unless already changed)
            if ($parcour->getYear() === $this) {
                $parcour->setYear(null);
            }
        }

        return $this;
    }
}
