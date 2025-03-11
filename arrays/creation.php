<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Arrays Assignment</title>
</head>
<body>

<h1>Arrays: Creation</h1>

<?php
// First way to create an array of 10 animals
$animals1 = ["Pangolin", "Axolotl", "Quokka", "Kakapo", "Okapi", "Narwhal", "Tarsier", "Fossa", "Maned Wolf", "Binturong"];

// Second way using array() syntax
$animals2 = array("Saiga", "Markhor", "Vaquita", "Gharial", "Shoebill", "Dhole", "Zebra Duiker", "Irrawaddy Dolphin", "Kudu", "Olinguito");

echo "<h2>Animal Arrays</h2>";
echo "<pre>";
print_r($animals1);
print_r($animals2);
echo "</pre>";

// 2D array for vehicles categorized by type
$vehicles = [
    'landVehicles' => ["Tram", "Snowmobile", "Segway"],
    'waterVehicles' => ["Hydrofoil", "Catamaran", "Gondola", "Hovercraft"],
    'airVehicles' => ["Zeppelin", "Autogyro", "Glider"]
];

echo "<h2>Vehicle Categories</h2>";
echo "<pre>";
print_r($vehicles);
echo "</pre>";
?>

<h1>Exercise Arrays: Part 2</h1>

<?php
// Array with numbers 1-5
$numbers1 = [1, 2, 3, 4, 5];

// Multiplication of all numbers in the array
$product = array_product($numbers1);

echo "<p>Multiplication result: $product</p>";

// Printing only odd numbers
$oddNumbers = array_filter($numbers1, function($num) {
    return $num % 2 !== 0;
});

echo "<p>Odd numbers: " . implode(", ", $oddNumbers) . "</p>";

// Second array with numbers 5-1
$numbers2 = [5, 4, 3, 2, 1];

// Summing corresponding indices
$sums = array_map(function($a, $b) {
    return $a + $b;
}, $numbers1, $numbers2);

echo "<p>Sum of corresponding indices: " . implode(", ", $sums) . "</p>";
?>

</body>
</html>
