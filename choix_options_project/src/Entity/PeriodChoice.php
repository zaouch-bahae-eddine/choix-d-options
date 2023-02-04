<?php

namespace App\Entity;

use App\Repository\PeriodChoiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PeriodChoiceRepository::class)]
class PeriodChoice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $debut = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fin = null;

    #[ORM\OneToMany(mappedBy: 'periodChoice', targetEntity: OptionBloc::class)]
    private Collection $optionBlocs;

    public function __construct()
    {
        $this->optionBloc = new ArrayCollection();
        $this->optionBlocs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDebut(): ?\DateTimeInterface
    {
        return $this->debut;
    }

    public function setDebut(\DateTimeInterface $debut): self
    {
        $this->debut = $debut;

        return $this;
    }

    public function getFin(): ?\DateTimeInterface
    {
        return $this->fin;
    }

    public function setFin(\DateTimeInterface $fin): self
    {
        $this->fin = $fin;

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
            $optionBloc->setPeriodChoice($this);
        }

        return $this;
    }

    public function removeOptionBloc(OptionBloc $optionBloc): self
    {
        if ($this->optionBlocs->removeElement($optionBloc)) {
            // set the owning side to null (unless already changed)
            if ($optionBloc->getPeriodChoice() === $this) {
                $optionBloc->setPeriodChoice(null);
            }
        }

        return $this;
    }
    public function __toString()
    {
        return 'Début: '.$this->getDebut()->format('d-m-Y H:i').' Fin: '.$this->getFin()->format('d-m-Y H:i');
    }
}
