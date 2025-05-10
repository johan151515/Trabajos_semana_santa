<?php

abstract class Plan {
    private float $price;
    private string $name;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    abstract public function getServices(): array;
    abstract public function calculateCost(): float;

    public function getPrice(): float {
        return $this->price;
    }

    public function getName(): string {
        return $this->name;
    }
}

?>