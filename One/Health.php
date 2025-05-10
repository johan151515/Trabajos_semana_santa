<?php

include_once 'Deduction.php';

class Health extends Deduction {
    private const PERCENTAGE = 0.04;

    public function calculateDeduction(float $baseSalary): float {
        return $baseSalary * self::PERCENTAGE;
    }
}

?>