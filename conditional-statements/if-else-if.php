<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conditional Statements</title>
</head>
<body>

<h1>Conditional statements: if else if</h1>

<h2>Part 1</h2>

<?php
// Random number between 1 and 100
$number = rand(1, 100);

// Find the range it falls in
$lowerBound = floor($number / 10) * 10;
$upperBound = $lowerBound + 10;

// If it's 100, adjust so it doesn’t say "100-110"
if ($number == 100) {
    $lowerBound = 90;
    $upperBound = 100;
}

// Create the output message
$message = "The number $number lies between $lowerBound and $upperBound.";

// Reverse the message
$reversedMessage = strrev($message);

// Print everything
echo "<p>$message</p>";
echo "<p>$reversedMessage</p>";
?>

</body>
</html>
