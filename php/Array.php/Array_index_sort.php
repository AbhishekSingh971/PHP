<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php code</title>
</head>

<body bgcolor="#e49e41" align="center">
    <?php
    echo "<h1>SORT</h1>";
    echo "<h1>Abhishek kumar singh</h1>";
    $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
    sort($color);
    $num = count($color);
    echo "the number of element in an array is $num" . "<br>";
    for ($i = 0; $i < $num; $i++) {
        echo $color[$i];
        echo "<br>";
    }
    echo "<br>";
    $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
    rsort($color);
    $num = count($color);
    echo "the number of element in an array is $num" . "<br>";
    for ($i = 0; $i < $num; $i++) {
        echo $color[$i];
        echo "<br>";
    }
    ?>
</body>
</html>