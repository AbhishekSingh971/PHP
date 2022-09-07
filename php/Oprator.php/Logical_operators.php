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
    echo "<h2>Logical Oparators</h2>";

    echo "<h3>And(&&) Oparator</h3>";
    $myvar = (true) && (true);
    echo var_dump($myvar), "<br>";
    $myvar1 = (true) && (false);
    echo var_dump($myvar1), "<br>";
    $myvar2 = (false) && (true);
    echo var_dump($myvar2), "<br>";
    $myvar3 = (false) && (false);
    echo var_dump($myvar3), "<br>";

    echo "<h3>Or(||) Oparator</h3>";
    $myvar = (true) || (true);
    echo var_dump($myvar), "<br>";
    $myvar1 = (true) || (false);
    echo var_dump($myvar1), "<br>";
    $myvar2 = (false) || (true);
    echo var_dump($myvar2), "<br>";
    $myvar3 = (false) || (false);
    echo var_dump($myvar3), "<br>";

    echo "<h3>Xor Oparator</h3>";
    $myvar = (true) xor (true);
    echo var_dump($myvar), "<br>";
    $myvar1 = (true) xor (false);
    echo var_dump($myvar1), "<br>";
    $myvar2 = (false) xor (true);
    echo var_dump($myvar2), "<br>";
    $myvar3 = (false) xor (false);
    echo var_dump($myvar3), "<br>";
    ?>
</body>

</html>