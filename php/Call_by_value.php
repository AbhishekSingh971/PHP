<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <TITLE>Function</TITLE>
</head>

<body bgcolor="#e49e41" align="center">

    <?php
    echo "<h1>Call by value</h1>";
    echo "<b>Here ,we call the value by giving it's value</b><br>";
    function sum($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
    echo "The sum of 23 + 12 = ". sum(23,12)."<br>";
    echo "The sum of 10 + 5 = ". sum(10,5)."<br>";
    echo "The sum of 2 + 3 = ". sum(2,3)."<br>";
    ?>
</body>

</html>