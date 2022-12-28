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

    #[ORM\OneToMany(mappedBy: 'parcour', targetEntity: Promotion::class, orphanRemoval: true)]
    private Collection $promotions;

    #[ORM\OneToMany(mappedBy: 'parcour', targetEntity: Bloc::class, orphanRemoval: true)]
    private Collection $blocs;

    public function __construct()
    {
        $this->promotions = new ArrayCollection();
        $this->blocs = new ArrayCollection();
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
     * @return Collection<int, Promotion>
     */
    public function getPromotions(): Collection
    {
        return $this->promotions;
    }

    public function addPromotion(Promotion $promotion): self
    {
        if (!$this->promotions->contains($promotion)) {
            $this->promotions->add($promotion);
            $promotion->setParcour($this);
        }

        return $this;
    }

    public function removePromotion(Promotion $promotion): self
    {
        if ($this->promotions->removeElement($promotion)) {
            // set the owning side to null (unless already changed)
            if ($promotion->getParcour() === $this) {
                $promotion->setParcour(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Bloc>
     */
    public function getBlocs(): Collection
    {
        return $this->blocs;
    }

    public function addBloc(Bloc $bloc): self
    {
        if (!$this->blocs->contains($bloc)) {
            $this->blocs->add($bloc);
            $bloc->setParcour($this);
        }

        return $this;
    }

    public function removeBloc(Bloc $bloc): self
    {
        if ($this->blocs->removeElement($bloc)) {
            // set the owning side to null (unless already changed)
            if ($bloc->getParcour() === $this) {
                $bloc->setParcour(null);
            }
        }

        return $this;
    }
}
