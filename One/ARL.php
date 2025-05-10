<?php

include_once 'Deduction.php';

class ARL extends Deduction {
    private string $riskLevel;

    public function setRiskLevel(string $riskLevel): void {
        $this->riskLevel = $riskLevel;
    }
    public function calculateDeduction(float $baseSalary): float {
        $percentage = $this->getPercentageByRiskLevel($this->riskLevel);
        return $baseSalary * $percentage;
    }

    private function getPercentageByRiskLevel(string $riskLevel): float {
        switch (strtoupper($riskLevel)) {
            case 'LOW':
                return 0.00522; // Example percentage
            case 'MEDIUM':
                return 0.01044; // Example percentage
            case 'HIGH':
                return 0.02436; // Example percentage
            default:
                return 0; // Or throw an exception if the level is invalid
        }
    }
}

?>