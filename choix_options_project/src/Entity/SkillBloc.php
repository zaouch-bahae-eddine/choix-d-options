<?php

namespace App\Entity;

use App\Repository\SkillBlocRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SkillBlocRepository::class)]
class SkillBloc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'blocs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Parcour $parcour = null;


    #[ORM\OneToMany(mappedBy: 'skillBloc', targetEntity: OptionBloc::class, orphanRemoval: true)]
    private Collection $optionBlocs;

    #[ORM\OneToMany(mappedBy: 'skillBloc', targetEntity: Ue::class)]
    private Collection $ues;

    public function __construct()
    {
        $this->optionBlocs = new ArrayCollection();
        $this->ues = new ArrayCollection();
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
            $optionBloc->setSkillBloc($this);
        }

        return $this;
    }

    public function removeOptionBloc(OptionBloc $optionBloc): self
    {
        if ($this->optionBlocs->removeElement($optionBloc)) {
            // set the owning side to null (unless already changed)
            if ($optionBloc->getSkillBloc() === $this) {
                $optionBloc->setSkillBloc(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ue>
     */
    public function getUes(): Collection
    {
        return $this->ues;
    }

    public function addUe(Ue $ue): self
    {
        if (!$this->ues->contains($ue)) {
            $this->ues->add($ue);
            $ue->setSkillBloc($this);
        }

        return $this;
    }

    public function removeUe(Ue $ue): self
    {
        if ($this->ues->removeElement($ue)) {
            // set the owning side to null (unless already changed)
            if ($ue->getSkillBloc() === $this) {
                $ue->setSkillBloc(null);
            }
        }

        return $this;
    }
}
