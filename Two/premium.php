<?php

require_once 'Plan.php';

class Premium extends Plan {
    public function __construct(float $price) {
        parent::__construct("Premium", $price);
    }

    public function getServices(): array {
        return ["Access to all exercise machines + " . "Group classes + " . "Personal trainer + " . "Wet area"];
    }

    public function calculateCost(): float {
        return $this->getPrice();
    }
}

?>