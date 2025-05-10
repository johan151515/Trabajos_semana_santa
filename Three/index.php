<?php
include("laws.php");
include("first.php");
include("second.php");
include("third.php");

$firstLaw = new FirstLaw(10.5);
$secondLaw = new SecondLaw(10.2, 26.1, 16.0 );
$thirdLaw = new ThirdLaw(50.0); // Example: an action of 50.0 Newtons
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newton's Laws</title>
</head>
<body>
    <?php
    echo "<h2>".$firstLaw->getName()."</h2>";
    echo "Force: ".$firstLaw->getForce()." N<br>";
    echo "<p>"."Explanation of the law: ".$firstLaw->getExplanation()."</p><br>";

    echo "<h2>".$secondLaw->getName()."</h2>";
    echo "Calculated Force: ".$secondLaw->calculateLaw()." N<br>";
    echo "<p>"."Explanation of the law: ".$secondLaw->getExplanation()."</p><br>";

    echo "<h2>".$thirdLaw->getName()."</h2>";
    echo "Action: ".$thirdLaw->getAction()." N<br>";
    echo "Reaction: ".$thirdLaw->getReaction()." N<br>";
    echo "<p>"."Explanation of the law: ".$thirdLaw->getExplanation()."</p><br>";
    ?>
</body>
</html>