<?php
include_once("License.php");

class PrivateVehicleLicense extends License {
    public function __construct() {
        parent::__construct("Private veicles", 2500000, 5);
    }

    public function calculateTotalCost(): float {
        return $this->getCost(); // The total cost for the private vehicle license is the base cost
    }
}
?>