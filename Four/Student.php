<?php

class Student {
    private string $identification;
    private string $firstName;
    private string $lastName;
    private string $residenceAddress;
    public string $contactPhone;
    private string $rhFactor;
    private ?License $selectedLicense;

    public function __construct(
        string $identification,
        string $firstName,
        string $lastName,
        string $residenceAddress,
        string $contactPhone,
        string $rhFactor,
        ?License $selectedLicense = null
    ) {
        $this->identification = $identification;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->residenceAddress = $residenceAddress;
        $this->contactPhone = $contactPhone;
        $this->rhFactor = $rhFactor;
        $this->selectedLicense = $selectedLicense;
    }
    public function getIdentification(): string {
        return $this->identification;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function getResidenceAddress(): string {
        return $this->residenceAddress;
    }

    public function getRhFactor(): string {
        return $this->rhFactor;
    }

    public function getSelectedLicense(): ?License {
        return $this->selectedLicense;
    }

    public function setSelectedLicense(?License $selectedLicense): void {
        $this->selectedLicense = $selectedLicense;
    }

    public function calculatePaymentValue(): float {
        return $this->selectedLicense ? $this->selectedLicense->calculateTotalCost() : 0.0;
    }
}
?>