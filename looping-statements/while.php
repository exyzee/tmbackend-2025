<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
        <style>
            .even {
                background-color: green;
            }
        </style>
    </head>
    <body>
        <h1>Looping Statements: While</h1>

        <h2>Part 1</h2>

        <?php
        echo "<p>";
        $i = 0;
        while ($i <= 100) {
            echo $i . ", ";
            $i++;
        }
        echo "</p>";

        echo "<p>";
        $i = 40;
        while ($i < 80) {
            if ($i % 3 == 0) {
                echo $i . ", ";
            }
            $i++;
        }
        echo "</p>";
        ?>

        <h1>Part 2</h1>

        <div class="facade-minimal" data-url="http://www.app.local/index.php">
            <h1>Multiplication Tables</h1>
            <table>
                <?php
                for ($i = 0; $i <= 9; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j <= 9; $j++) {
                        $result = $i * $j;
                        $class = ($result % 2 == 0) ? "even" : "";
                        echo "<td class='$class'>$result</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </body>
</html>
