<?php

include_once 'Overtime.php';

class Daytime extends Overtime {
    private const PERCENTAGE = 1.25;

    public function calculate(float $baseSalary, int $hoursWorked): float {
        $normalHourValue = $baseSalary / (30 * 8); // Assuming 30 days and 8 hours per day
        return $normalHourValue * self::PERCENTAGE * $hoursWorked;
    }
}

?>