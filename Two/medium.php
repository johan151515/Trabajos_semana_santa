<?php

require_once 'Plan.php';

class Medium extends Plan {
    public function __construct(float $price) {
        parent::__construct("Medium", $price);
    }

    public function getServices(): array {
        return ["Access to all exercise machines + " . "Group classes"];
    }

    public function calculateCost(): float {
        return $this->getPrice();
    }
}

?>