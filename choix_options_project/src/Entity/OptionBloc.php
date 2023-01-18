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

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $choiceDateStart = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $choiceDateEnd = null;

    #[ORM\ManyToOne(inversedBy: 'optionBlocs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?SkillBloc $skillBloc = null;

    #[ORM\OneToMany(mappedBy: 'optionBloc', targetEntity: Ue::class)]
    private Collection $ues;

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

    public function getChoiceDateStart(): ?\DateTimeInterface
    {
        return $this->choiceDateStart;
    }

    public function setChoiceDateStart(\DateTimeInterface $choiceDateStart): self
    {
        $this->choiceDateStart = $choiceDateStart;

        return $this;
    }

    public function getChoiceDateEnd(): ?\DateTimeInterface
    {
        return $this->choiceDateEnd;
    }

    public function setChoiceDateEnd(\DateTimeInterface $choiceDateEnd): self
    {
        $this->choiceDateEnd = $choiceDateEnd;

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
            $ue->setOptionBloc($this);
        }

        return $this;
    }

    public function removeUe(Ue $ue): self
    {
        if ($this->ues->removeElement($ue)) {
            // set the owning side to null (unless already changed)
            if ($ue->getOptionBloc() === $this) {
                $ue->setOptionBloc(null);
            }
        }

        return $this;
    }
}
