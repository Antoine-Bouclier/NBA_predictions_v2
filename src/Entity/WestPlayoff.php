<?php

namespace App\Entity;

use App\Repository\WestPlayoffRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WestPlayoffRepository::class)]
class WestPlayoff
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $DF1 = null;

    #[ORM\Column(length: 255)]
    private ?string $DF2 = null;

    #[ORM\Column(length: 255)]
    private ?string $CF = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDF1(): ?string
    {
        return $this->DF1;
    }

    public function setDF1(string $DF1): static
    {
        $this->DF1 = $DF1;

        return $this;
    }

    public function getDF2(): ?string
    {
        return $this->DF2;
    }

    public function setDF2(string $DF2): static
    {
        $this->DF2 = $DF2;

        return $this;
    }

    public function getCF(): ?string
    {
        return $this->CF;
    }

    public function setCF(string $CF): static
    {
        $this->CF = $CF;

        return $this;
    }
}
