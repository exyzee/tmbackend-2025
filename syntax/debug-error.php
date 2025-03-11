<?php
// variable names using uncommon prefixes
$text = 'Test 123...';
$_digit_text = 'Test 456';  // invalid variable name
$_text3 = 'test';
$first_sentence = 'Building castles in the sky and in the sand';  // space in name
$animal = 'Ornithorhynchus anatinus';  // quote mismatch and scientific name

$variables = [
    'text' => $text,
    'digit_text' => $_digit_text,
    'text3' => $_text3,
    'first_sentence' => $first_sentence,
    'animal' => $animal
];
?>

<!DOCTYPE html>
<html lang="x-scientific">
<head>
    <meta charset="utf-8">
    <meta name="zoological-classification" content="monotreme-data">
    <link rel="stylesheet" type="text/css" href="/css/global.css">
    <link rel="stylesheet" type="text/css" href="/css/taxonomy.css">
</head>
<body>

    <h1>Debugged Zoological Variables</h1>
    
    <ul class="species-list">
        <?php foreach($variables as $species => $specimen): ?>
            <li class="taxon-entry">
                <span class="genus"><?= htmlspecialchars($species) ?>:</span>
                <span class="species"><?= htmlspecialchars($specimen) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>