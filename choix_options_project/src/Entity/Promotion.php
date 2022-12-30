<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToOne(inversedBy: 'promotions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Parcour $parcour = null;

    #[ORM\OneToMany(mappedBy: 'promotion', targetEntity: User::class)]
    private Collection $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

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
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users->add($user);
            $user->setPromotion($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getPromotion() === $this) {
                $user->setPromotion(null);
            }
        }

        return $this;
    }
}
