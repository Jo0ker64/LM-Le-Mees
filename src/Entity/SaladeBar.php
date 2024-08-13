<?php

namespace App\Entity;

use App\Repository\SaladeBarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaladeBarRepository::class)]
class SaladeBar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $ingredient = null;

    #[ORM\Column(length: 255)]
    private ?string $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function gettitle(): ?string
    {
        return $this->title;
    }

    public function settitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getingredient(): ?string
    {
        return $this->ingredient;
    }

    public function setingredient(string $ingredient): static
    {
        $this->ingredient = $ingredient;

        return $this;
    }

    public function getprice(): ?string
    {
        return $this->price;
    }

    public function setprice(string $price): static
    {
        $this->price = $price;

        return $this;
    }
}
