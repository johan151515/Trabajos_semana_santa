<?php

require_once 'User.php';
require_once 'Basic.php';
require_once 'Medium.php';
require_once 'Premium.php';

// Create a user
$user1 = new User("12345", "Juan", "Pérez", 75.5, 1.78);

// Create the plans
$basicPlan = new Basic(30.0);
$mediumPlan = new Medium(60.0);
$premiumPlan = new Premium(90.0);

// The user selects a plan
$user1->selectPlan($mediumPlan);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Identification: " . $user1->getIdentification() . "<br>";
        echo "First Name: " . $user1->getFirstName() . "<br>";
        echo "Last Name: " . $user1->getLastName() . "<br>";
        echo "Weight: " . $user1->getWeight() . " kg<br>";
        echo "Height: " . $user1->getHeight() . " m<br>";
        if ($user1->getSelectedPlan()) {
            echo "Selected Plan: " . $user1->getSelectedPlan()->getName() . "<br>";
            echo "Services: " . implode(", ", $user1->displayServices()) . "<br>";
            echo "Total Cost: $" . $user1->calculateTotalCost() . "<br>";
        } else {
            echo "No plan has been selected.<br>";
        }
    ?>
</body>
</html>