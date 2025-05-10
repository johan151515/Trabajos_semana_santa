<?php

require_once 'Plan.php';

class Basic extends Plan {
    public function __construct(float $price) {
        parent::__construct("Basic", $price);
    }

    public function getServices(): array {
        return ["Access to all exercise machines"];
    }

    public function calculateCost(): float {
        return $this->getPrice();
    }
}

?>