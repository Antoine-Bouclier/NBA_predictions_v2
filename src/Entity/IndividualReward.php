<?php

namespace App\Entity;

use App\Repository\IndividualRewardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: IndividualRewardRepository::class)]
class IndividualReward
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $mvp = null;

    #[ORM\Column(length: 255)]
    private ?string $fmvp = null;

    #[ORM\Column(length: 255)]
    private ?string $roy = null;

    #[ORM\Column(length: 255)]
    private ?string $dpoy = null;

    #[ORM\Column(length: 255)]
    private ?string $mip = null;

    #[ORM\Column(length: 255)]
    private ?string $bc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMvp(): ?string
    {
        return $this->mvp;
    }

    public function setMvp(string $mvp): static
    {
        $this->mvp = $mvp;

        return $this;
    }

    public function getFmvp(): ?string
    {
        return $this->fmvp;
    }

    public function setFmvp(string $fmvp): static
    {
        $this->fmvp = $fmvp;

        return $this;
    }

    public function getRoy(): ?string
    {
        return $this->roy;
    }

    public function setRoy(string $roy): static
    {
        $this->roy = $roy;

        return $this;
    }

    public function getDpoy(): ?string
    {
        return $this->dpoy;
    }

    public function setDpoy(string $dpoy): static
    {
        $this->dpoy = $dpoy;

        return $this;
    }

    public function getMip(): ?string
    {
        return $this->mip;
    }

    public function setMip(string $mip): static
    {
        $this->mip = $mip;

        return $this;
    }

    public function getBc(): ?string
    {
        return $this->bc;
    }

    public function setBc(string $bc): static
    {
        $this->bc = $bc;

        return $this;
    }
}
