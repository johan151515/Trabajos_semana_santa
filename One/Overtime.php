<?php

abstract class Overtime {
    abstract public function calculate(float $baseSalary, int $hoursWorked): float;
}

?>