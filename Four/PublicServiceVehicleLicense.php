<?php
include_once("License.php");

class PublicServiceVehicleLicense extends License {
    public function __construct() {
        parent::__construct("Public service veicles", 1900000, 4);
    }

    public function calculateTotalCost(): float {
        return $this->getCost(); // The total cost for the public service vehicle license is the base cost
    }
}
?>