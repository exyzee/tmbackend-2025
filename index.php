<?php
$firstName = "John";
$lastName = "Pork";

$fullName = $firstName . " " . $lastName;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercise</title>
</head>
<body>
    <h1>Full Name: <?= $fullName ?></h1>
    <p>Character count: <?= strlen($fullName) ?></p> 
</html>
