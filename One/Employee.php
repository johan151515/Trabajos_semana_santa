<?php

class Employee {
    private string $name;
    private string $identification;
    private float $baseSalary;
    private string $arlRiskLevel;

    public function __construct(string $name, string $identification, float $baseSalary, string $arlRiskLevel) {
        $this->name = $name;
        $this->identification = $identification;
        $this->baseSalary = $baseSalary;
        $this->arlRiskLevel = $arlRiskLevel;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getIdentification(): string {
        return $this->identification;
    }

    public function getBaseSalary(): float {
        return $this->baseSalary;
    }

    public function getArlRiskLevel(): string {
        return $this->arlRiskLevel;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setIdentification(string $identification): void {
        $this->identification = $identification;
    }

    public function setBaseSalary(float $baseSalary): void {
        $this->baseSalary = $baseSalary;
    }

    public function setArlRiskLevel(string $arlRiskLevel): void {
        $this->arlRiskLevel = $arlRiskLevel;
    }
}

?>