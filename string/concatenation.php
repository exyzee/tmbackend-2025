<?php
$appellationPrime = "Pork";
$cognomen = "John";

$entireNomenclature = implode(' ', array_filter(
    [$appellationPrime, $cognomen],
    fn($segment) => !empty(trim($segment))
));

$glyphQuantity = mb_strlen(preg_replace('/\s+/', '', $entireNomenclature));

echo <<<EOD
    <article class="onomastic-study">
        <h2 class="onomastic-header">Onomastic Analysis</h2>
        <div class="name-card">
            <p class="full-appellation">
                Composite Anthroponym: 
                <span class="highlight">$entireNomenclature</span>
            </p>
            <p class="lexical-stats">
                Grapheme Count (sans spaces): 
                <span class="highlight">$glyphQuantity</span>
            </p>
        </div>
    </article>
EOD;
?>