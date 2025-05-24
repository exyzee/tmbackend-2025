<?php
// Basic math functions
function calculateSum($number1, $number2) {
    return $number1 + $number2;
}

function multiply($number1, $number2) {
    return $number1 * $number2;
}

function isEven($number) {
    return $number % 2 === 0;
}

// String manipulation function
function getStringInfo($string) {
    return [
        'length' => strlen($string),
        'uppercase' => strtoupper($string)
    ];
}

// Array printing function
function printArray($array) {
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            // Handle nested arrays
            foreach ($value as $nestedKey => $nestedValue) {
                echo "array[$key][$nestedKey] has value '$nestedValue'<br>";
            }
        } else {
            echo "array[$key] has value '$value'<br>";
        }
    }
}

// HTML tag validation
function validateHtmlTag($html) {
    return preg_match('/<html>.*<\/html>/s', $html) === 1;
}

// Test the functions
$sum = calculateSum(5, 3);
$product = multiply(4, 2);
$evenCheck = isEven(6);

$stringInfo = getStringInfo("hello world");
$heroes = ['Roger Penrose', 'Albert Einstein', 'Stephen Hawking'];
$nestedArray = [
    'scientists' => [
        'physicist' => 'Roger Penrose',
        'mathematician' => 'Alan Turing'
    ]
];

$htmlString = "<html><body>Test</body></html>";
$invalidHtml = "<div>Test</div>";
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body>
        <h1>Exercise functions</h1>

        <h2>Part 1 Results</h2>
        <p>Sum of 5 and 3: <?php echo $sum; ?></p>
        <p>Product of 4 and 2: <?php echo $product; ?></p>
        <p>Is 6 even? <?php echo $evenCheck ? 'Yes' : 'No'; ?></p>

        <h3>String Info</h3>
        <p>Length: <?php echo $stringInfo['length']; ?></p>
        <p>Uppercase: <?php echo $stringInfo['uppercase']; ?></p>

        <h2>Part 2 Results</h2>
        <h3>Array Printing</h3>
        <?php printArray($heroes); ?>

        <h3>Nested Array Printing</h3>
        <?php printArray($nestedArray); ?>

        <h3>HTML Tag Validation</h3>
        <p>Valid HTML: <?php echo validateHtmlTag($htmlString) ? 'Yes' : 'No'; ?></p>
        <p>Invalid HTML: <?php echo validateHtmlTag($invalidHtml) ? 'Yes' : 'No'; ?></p>
    </body>
</html> 