<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping Statements: Foreach</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        ul { list-style-type: none; }
        .result-list { font-family: Arial, sans-serif; }
    </style>
</head>
<body>

<h1>Looping Statements: Foreach</h1>

<h2>Part 1</h2>

<?php
$text = file_get_contents('text-file.txt'); 
$textChars = str_split($text);
arsort($textChars);
$textChars = array_reverse($textChars);
$charCount = [];

foreach ($textChars as $char) {
    if (isset($charCount[$char])) {
        $charCount[$char]++;
    } else {
        $charCount[$char] = 1;
    }
}
?>

<ul class="result-list">
    <li><strong>How many different characters occur in total:</strong> <?php echo count($charCount); ?></li>
    <li><strong>Character frequencies:</strong></li>
    <?php
    foreach ($charCount as $char => $count) {
        echo "<li>$char x $count</li>";
    }
    ?>
</ul>

<h1 class="extra">Part 2</h1>

<?php
$tekst = file_get_contents('text-file.txt');
$letterCount = array_fill_keys(range('a', 'z'), 0);

$tekst = strtolower($tekst);

foreach (str_split($tekst) as $char) {
    if (isset($letterCount[$char])) {
        $letterCount[$char]++;
    }
}
?>

<ul class="result-list">
    <li><strong>Letter frequencies:</strong></li>
    <?php
    foreach ($letterCount as $letter => $count) {
        echo "<li>$letter x $count</li>";
    }
    ?>
</ul>

</body>
</html>
