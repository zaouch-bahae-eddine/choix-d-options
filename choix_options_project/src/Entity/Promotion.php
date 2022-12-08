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
    private ?int $anneMaster = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datePromotion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateLimiteChoixUE = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnneMaster(): ?int
    {
        return $this->anneMaster;
    }

    public function setAnneMaster(int $anneMaster): self
    {
        $this->anneMaster = $anneMaster;

        return $this;
    }

    public function getDatePromotion(): ?\DateTimeInterface
    {
        return $this->datePromotion;
    }

    public function setDatePromotion(\DateTimeInterface $datePromotion): self
    {
        $this->datePromotion = $datePromotion;

        return $this;
    }

    public function getDateLimiteChoixUE(): ?\DateTimeInterface
    {
        return $this->dateLimiteChoixUE;
    }

    public function setDateLimiteChoixUE(\DateTimeInterface $dateLimiteChoixUE): self
    {
        $this->dateLimiteChoixUE = $dateLimiteChoixUE;

        return $this;
    }
}
