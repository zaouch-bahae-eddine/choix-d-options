<?php

namespace App\Entity;

use App\Repository\BlocRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlocRepository::class)]
class Bloc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $ueOptionalToChose = null;

    #[ORM\ManyToOne(inversedBy: 'blocs')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Parcour $parcour = null;

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

    public function getUeOptionalToChose(): ?int
    {
        return $this->ueOptionalToChose;
    }

    public function setUeOptionalToChose(int $ueOptionalToChose): self
    {
        $this->ueOptionalToChose = $ueOptionalToChose;

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
}
