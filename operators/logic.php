<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
        <style>
            .applicable {
                background-color: green;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Logic Operators</h1>

        <h2>Part 1</h2>
        
        <?php
        $textToCheck = "Example";  

        // Part 1 Check 1
        $check1 = (strlen($textToCheck) > 5 && ctype_upper($textToCheck[0])) ? 'true' : 'false';

        // Part 1 Check 2
        $check2 = (strlen($textToCheck) > 5 || strpos($textToCheck, 'e') !== false) ? 'true' : 'false';

        // Part 1 Check 3
        $check3 = (strlen($textToCheck) > 5) ? 'true' : 'false';

        // Part 1 Check 3b
        $check3b = (strlen($textToCheck) > 5) ? 'true' : 'false';
        ?>

        <ul>
            <li><code>$check1</code>: <?php echo $check1; ?></li>
            <li><code>$check2</code>: <?php echo $check2; ?></li>
            <li><code>$check3</code>: <?php echo $check3; ?></li>
            <li><code>$check3b</code>: <?php echo $check3b; ?></li>
        </ul>

        <h2>Part 2</h2>

        <?php
        $yearOfBirth = 2004;  
        $monthOfBirth = "04"; 

        // Evaluate the condition
        $condition = ($yearOfBirth % 2 != 0 || $yearOfBirth > 1994) || ($monthOfBirth <= 06);
        ?>

        <ul>
            <li><code>$yearOfBirth</code>: <?php echo $yearOfBirth; ?></li>
            <li><code>$monthOfBirth</code>: <?php echo $monthOfBirth; ?></li>
            <li>
                <?php 
                if ($condition) {
                    echo '<p class="applicable">You apply</p>';
                }
                ?>
            </li>
        </ul>

    </body>
</html>
