<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Array Functions</title>
</head>
<body>

<h1>Arrays: Functions</h1>

<h2>Part 1</h2>

<?php
// Array with more than 5 animals
$animals = ["Okapi", "Axolotl", "Quokka", "Narwhal", "Pangolin", "Fossa", "Kakapo"];

// Counting the number of elements
$animalCount = count($animals);
echo "<p>Number of animals: $animalCount</p>";

// Searching for an animal
$teZoekenDier = "Pangolin"; 
if (in_array($teZoekenDier, $animals)) {
    echo "<p>$teZoekenDier was found in the list!</p>";
} else {
    echo "<p>$teZoekenDier was NOT found in the list.</p>";
}
?>

<h2>Part 2</h2>

<?php
// Making a copy and sorting alphabetically
$sortedAnimals = $animals;
sort($sortedAnimals);

echo "<p>Sorted Animals: " . implode(", ", $sortedAnimals) . "</p>";

// Creating a mammals array and merging
$mammals = ["Dolphin", "Elephant", "Giraffe"];
$mergedAnimals = array_merge($sortedAnimals, $mammals);

echo "<p>Merged Animal List: " . implode(", ", $mergedAnimals) . "</p>";
?>

<h3>Part 3</h3>

<?php
// Given array
$numbers = [8, 7, 8, 7, 3, 2, 1, 2, 4];

// Removing duplicates
$uniqueNumbers = array_unique($numbers);

// Sorting from largest to smallest
rsort($uniqueNumbers);

echo "<p>Unique and Sorted Numbers: " . implode(", ", $uniqueNumbers) . "</p>";
?>

</body>
</html>
