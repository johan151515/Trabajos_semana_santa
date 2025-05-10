<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Payroll Calculation</title>
</head>
<body>

<?php

// Include the definitions of the classes
require_once 'Employee.php';
require_once 'SubsidyCalculator.php';
include_once 'Overtime.php';
include_once 'Daytime.php';
include_once 'Nightly.php';
include_once 'Holiday.php';
include_once 'Deduction.php';
include_once 'Health.php';
include_once 'Pension.php';
include_once 'ARL.php';

// Create an Employee object
$employee = new Employee("Ana Rodriguez", "98765", 3000000, "MEDIUM");

// Create an instance of the SubsidyCalculator
$subsidyCalculator = new SubsidyCalculator();
$subsidy = $subsidyCalculator->calculateSubsidy($employee->getBaseSalary());

// Define the overtime hours worked by the employee
$daytimeHours = 1;
$nightlyHours = 1;
$holidayHours = 1;

// Create instances of the overtime classes
$daytimeCalculator = new Daytime();
$nightlyCalculator = new Nightly();
$holidayCalculator = new Holiday();

// Calculate the value of each type of overtime
$daytimePay = $daytimeCalculator->calculate($employee->getBaseSalary(), $daytimeHours);
$nightlyPay = $nightlyCalculator->calculate($employee->getBaseSalary(), $nightlyHours);
$holidayPay = $holidayCalculator->calculate($employee->getBaseSalary(), $holidayHours);

// Calculate the total overtime pay
$totalOvertime = $daytimePay + $nightlyPay + $holidayPay;

// Create instances of the deduction classes
$healthDeduction = new Health();
$pensionDeduction = new Pension();
$arlDeduction = new ARL();

// Set the risk level for ARL
$arlDeduction->setRiskLevel($employee->getArlRiskLevel());

// Calculate the value of each deduction
$health = $healthDeduction->calculateDeduction($employee->getBaseSalary());
$pension = $pensionDeduction->calculateDeduction($employee->getBaseSalary());
$arl = $arlDeduction->calculateDeduction($employee->getBaseSalary(), $employee->getArlRiskLevel());

// Calculate the final total salary (base salary + overtime - deductions)
$finalResult = $employee->getBaseSalary() + $totalOvertime - $health - $pension - $arl;

echo "<h2>calculating an employee's salary</h2>";
echo "<p><strong>Employee:</strong> " . $employee->getName() . " (ID: " . $employee->getIdentification() . ")</p>";
echo "<p><strong>Base Salary:</strong> " . number_format($employee->getBaseSalary(), 2) . "</p>";
echo "<p><strong>Subsidy:</strong> " . number_format($subsidy, 2) . "</p>";
echo "<h3>overtime payments</h3>";
echo "<p><strong>Daytime (" . Daytime::class . "):</strong> " . $daytimeHours . " hours - Pay: " . number_format($daytimePay, 2) . "</p>";
echo "<p><strong>Nightly (" . Nightly::class . "):</strong> " . $nightlyHours . " hours - Pay: " . number_format($nightlyPay, 2) . "</p>";
echo "<p><strong>Holiday (" . Holiday::class . "):</strong> " . $holidayHours . " hours - Pay: " . number_format($holidayPay, 2) . "</p>";
echo "<p><strong>Total Overtime:</strong> " . number_format($totalOvertime, 2) . "</p>";
echo "<h3>Deductions:</h3>";
echo "<p><strong>Health (" . Health::class . "):</strong> " . number_format($health, 2) . "</p>";
echo "<p><strong>Pension (" . Pension::class . "):</strong> " . number_format($pension, 2) . "</p>";
echo "<p><strong>ARL (" . ARL::class . "):</strong> " . number_format($arl, 2) . "</p>";
echo "<p><strong>Final Result:</strong> " . number_format($finalResult, 2) . "</p>";

?>

</body>
</html>