<?php

abstract class Deduction {
    abstract public function calculateDeduction(float $baseSalary,): float;
}

?>