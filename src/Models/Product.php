<?php

namespace App\Models;

class Product
{
    public function __construct(
        private string $name,
        private int $price,
        private string $description,
        private string $image
    )
    {
        
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image;
    }
}