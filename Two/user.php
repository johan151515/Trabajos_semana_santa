<?php

class User {
    private string $identification;
    private string $firstName;
    private string $lastName;
    private float $weight;
    private float $height;
    private ?Plan $selectedPlan = null;

    public function __construct(string $identification, string $firstName, string $lastName, float $weight, float $height) {
        $this->identification = $identification;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->weight = $weight;
        $this->height = $height;
    }

    public function selectPlan(Plan $plan): void {
        $this->selectedPlan = $plan;
    }

    public function displayServices(): array {
        if ($this->selectedPlan) {
            return $this->selectedPlan->getServices();
        }
        return [];
    }

    public function calculateTotalCost(): float {
        if ($this->selectedPlan) {
            return $this->selectedPlan->calculateCost();
        }
        return 0.0;
    }
    // Getter methods to access the attributes if needed
    public function getIdentification(): string {
        return $this->identification;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getWeight(): float {
        return $this->weight;
    }

    public function getHeight(): float {
        return $this->height;
    }

    public function getSelectedPlan(): ?Plan {
        return $this->selectedPlan;
    }
}

?>