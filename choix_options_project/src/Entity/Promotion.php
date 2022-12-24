<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $anneeMaster = null;

    #[ORM\Column]
    private ?int $datePromotion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateLimiteChoixOptions = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnneeMaster(): ?int
    {
        return $this->anneeMaster;
    }

    public function setAnneeMaster(int $anneeMaster): self
    {
        $this->anneeMaster = $anneeMaster;

        return $this;
    }

    public function getDatePromotion(): ?int
    {
        return $this->datePromotion;
    }

    public function setDatePromotion(int $datePromotion): self
    {
        $this->datePromotion = $datePromotion;

        return $this;
    }

    public function getDateLimiteChoixOptions(): ?\DateTimeInterface
    {
        return $this->dateLimiteChoixOptions;
    }

    public function setDateLimiteChoixOptions(\DateTimeInterface $dateLimiteChoixOptions): self
    {
        $this->dateLimiteChoixOptions = $dateLimiteChoixOptions;

        return $this;
    }
}
