<?php
// Part 1 Fruit Analysis
$botanicalSample = "ackee";
$morphemeStats = [
    'length' => mb_strlen($botanicalSample),
    'first_vowel' => mb_strpos($botanicalSample, 'o') ?: mb_strpos($botanicalSample, 'e')
];

// Part 2 Subject Examination
$floralSubject = "chirimoya"; 
$vowelPositionData = [
    'final_a' => mb_strrpos($floralSubject, 'a'),
    'uppercase_transform' => mb_convert_case($floralSubject, MB_CASE_UPPER, "UTF-8")
];

// Part 3 Transformation Engine
$lexicalComponents = [
    'target_grapheme' => 'e',
    'numeric_substitute' => 3,
    'complex_term' => 'pneumonoultramicroscopicsilicovolcanoconiosis'
];

$transformedLexicon = str_replace(
    $lexicalComponents['target_grapheme'],
    $lexicalComponents['numeric_substitute'],
    $lexicalComponents['complex_term']
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .bio-metrics { color: #2c3e50; padding: 1rem; }
        .neuro-output { font-family: monospace; background: #f0f0f0; }
    </style>
</head>
<body>
    <!-- Part 1 Output -->
    <div class="bio-metrics">
        <h3>Botanical Analysis:</h3>
        <p>Specimen: <span class="neuro-output"><?= $botanicalSample ?></span></p>
        <p>Morpheme Count: <span class="neuro-output"><?= $morphemeStats['length'] ?></span></p>
        <p>Primary Vowel Index: <span class="neuro-output"><?= $morphemeStats['first_vowel'] ?></span></p>
    </div>

    <!-- Part 2 Output -->
    <div class="bio-metrics">
        <h3>Floral Diagnostics:</h3>
        <p>Final 'A' Position: <span class="neuro-output"><?= $vowelPositionData['final_a'] ?></span></p>
        <p>Case Transformation: <span class="neuro-output"><?= $vowelPositionData['uppercase_transform'] ?></span></p>
    </div>

    <!-- Part 3 Output -->
    <div class="bio-metrics">
        <h3>Lexical Modulation:</h3>
        <p class="neuro-output"><?= $transformedLexicon ?></p>
    </div>
</body>
</html>