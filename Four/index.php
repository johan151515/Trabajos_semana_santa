<?php

// Include the classes
include_once("License.php");
include_once("MotorcycleLicense.php");
include_once("PrivateVehicleLicense.php");
include_once("PublicServiceVehicleLicense.php");
include_once("Student.php");

echo "<h1>Driving Institute Student Registration</h1>\n";
echo "<h2>Registered Student Information:</h2>\n";

// Create a license instance
$licenseA = new MotorcycleLicense();

// Create a student and assign ID and license directly
$student1 = new Student(
    "1027855963",
    "Sofia",
    "Rodriguez",
    "Street 1 # 2-3",
    "3001112233",
    "O+",
    $licenseA
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Identification: " . $student1->getIdentification() . "<br>";
echo "First Name: " . $student1->getFirstName() . "<br>";
echo "Last Name: " . $student1->getLastName() . "<br>";
echo "Residence Address: " . $student1->getResidenceAddress() . "<br>";
echo "Contact Phone: " . $student1->contactPhone . "<br>";
echo "RH Factor: " . $student1->getRhFactor() . "<br>";
echo "License Type: " . ($student1->getSelectedLicense() ? $student1->getSelectedLicense()->getType() : 'N/A') . "<br>";
echo "License Cost: $" . number_format($student1->calculatePaymentValue()) . "<br>";
echo "License Duration: " . ($student1->getSelectedLicense() ? $student1->getSelectedLicense()->getDuration() : 'N/A') . " years<br>";
echo "<p>Payment Value for License: $" . number_format($student1->calculatePaymentValue()) . "</p>\n";
echo "<hr>\n";

?>
    
</body>
</html>
