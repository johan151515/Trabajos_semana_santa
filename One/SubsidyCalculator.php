<?php

class SubsidyCalculator {
    private const MINIMUM_WAGE = 1400000; // Defined SMMLV as a class constant

    public function calculateSubsidy(float $baseSalary): float {
        if ($baseSalary > (self::MINIMUM_WAGE * 2)) {
            return 0; // No subsidy is added
        } else {
            return self::MINIMUM_WAGE; // The value of SMMLV is added as subsidy
        }
    }

    public function getMinimumWage(): float {
        return self::MINIMUM_WAGE;
    }
}

?>