<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <TITLE>Php oparators</TITLE>
</head>

<body bgcolor="#e49e41" align="center">
    <h1>Operator</h1>
    <?php
    echo "<b>Abhishek Kumar Singh</b><br>";
    $b = 6;
    echo "<h2>Comparison Oparators</h2>";

    echo "<h3>Equals to</h3>";
    echo "The value of $b==6 is ";
    echo var_dump($b == 6), "<br>";

    echo "<h3>Not Equals to</h3>";
    echo "The value of $b!=6 is ";
    echo var_dump($b != 6), "<br>";

    echo "<h3>Less than Equals to</h3>";
    echo "The value of $b<=4 is ";
    echo var_dump($b <= 4), "<br>";

    echo "<h3>Grater than Equals to</h3>";
    echo "The value of $b>=4 is ";
    echo var_dump($b >= 4), "<br>";
    ?>
</body>
</html>