<?php

namespace App\Entity;

use App\Repository\OptionBlocRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionBlocRepository::class)]
class OptionBloc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nbUeToChose = null;

    #[ORM\ManyToOne(inversedBy: 'optionBlocs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SkillBloc $skillBloc = null;

    #[ORM\ManyToMany(targetEntity: Ue::class, mappedBy: 'optionBlocs')]
    private Collection $ues;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne(inversedBy: 'optionBlocs')]
    private ?PeriodChoice $periodChoice = null;

    public function __construct()
    {
        $this->ues = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbUeToChose(): ?int
    {
        return $this->nbUeToChose;
    }

    public function setNbUeToChose(int $nbUeToChose): self
    {
        $this->nbUeToChose = $nbUeToChose;

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
            $ue->addOptionBloc($this);
        }

        return $this;
    }

    public function removeUe(Ue $ue): self
    {
        if ($this->ues->removeElement($ue)) {
            $ue->removeOptionBloc($this);
        }

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

    public function getPeriodChoice(): ?PeriodChoice
    {
        return $this->periodChoice;
    }

    public function setPeriodChoice(?PeriodChoice $periodChoice): self
    {
        $this->periodChoice = $periodChoice;

        return $this;
    }
}
