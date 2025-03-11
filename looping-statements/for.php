<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Looping Statements: For</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .even { background-color: lightgreen; }
        table { border-collapse: collapse; width: 100%; max-width: 600px; }
        td { padding: 8px; text-align: center; border: 1px solid black; }
    </style>
</head>
<body>

<h1>Looping Statements: For</h1>

<h2>Part 1</h2>

<p>
    <?php
    for ($i = 0; $i <= 100; $i++) {
        echo $i . ($i < 100 ? ", " : "");
    }
    ?>
</p>

<p>
    <?php
    for ($i = 41; $i < 80; $i++) {
        if ($i % 3 == 0) {
            echo $i . " ";
        }
    }
    ?>
</p>

<h2>Part 2</h2>

<table>
    <?php
   
    for ($row = 0; $row <= 10; $row++) {
        echo "<tr>";
        
        for ($col = 1; $col <= 10; $col++) {
            $result = $row * $col;
            $class = ($result % 2 == 0) ? "even" : "";
            echo "<td class='$class'>$result</td>";
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
