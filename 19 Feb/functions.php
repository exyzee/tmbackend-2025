<?php
// Part 1
$fruit = "coconut";

$charCount = strlen($fruit);

$firstO = strpos($fruit, 'o');

echo "<h2>Part 1</h2>";
echo "The word is: $fruit <br>";
echo "Number of characters: $charCount <br>";
echo "Position of first 'o': $firstO <br><br>";

$fruit = "pineapple";

$lastA = strrpos($fruit, 'a');

$fruitUpper = strtoupper($fruit);

echo "<h2>Part 2</h2>";
echo "The word is: $fruit <br>";
echo "Position of last 'a': $lastA <br>";
echo "Uppercase version: $fruitUpper <br><br>";

$letter = "e";
$number = "3";
$longestWord = "pneumonoultramicroscopicsilicovolcanoconiosis";

$modifiedWord = str_replace($letter, $number, $longestWord);

echo "<h2>Part 3</h2>";
echo "Original word: $longestWord <br>";
echo "Modified word: $modifiedWord <br>";
?>
