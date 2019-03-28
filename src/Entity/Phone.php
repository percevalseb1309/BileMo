<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PhoneRepository")
 */
class Phone
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $brand;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $operationSystem;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $screenSize;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $internalStorageMemory;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $color;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

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

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getOperationSystem(): ?string
    {
        return $this->operationSystem;
    }

    public function setOperationSystem(string $operationSystem): self
    {
        $this->operationSystem = $operationSystem;

        return $this;
    }

    public function getScreenSize(): ?string
    {
        return $this->screenSize;
    }

    public function setScreenSize(string $screenSize): self
    {
        $this->screenSize = $screenSize;

        return $this;
    }

    public function getInternalStorageMemory(): ?string
    {
        return $this->internalStorageMemory;
    }

    public function setInternalStorageMemory(string $internalStorageMemory): self
    {
        $this->internalStorageMemory = $internalStorageMemory;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}