<?php
include_once("License.php");

class MotorcycleLicense extends License {
    public function __construct() {
        parent::__construct("motorcycles", 950000, 3);
    }

    public function calculateTotalCost(): float {
        return $this->getCost(); // The total cost for the motorcycle license is the base cost
    }
}
?>