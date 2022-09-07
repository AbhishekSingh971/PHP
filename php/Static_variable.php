<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <TITLE>Php oparators</TITLE>
</head>

<body bgcolor="#e49e41" align="center">
    <h1>Static variable</h1>
    <?php
    function variable()
    {
        static $a = 35;
        echo $a;
        $a++;
    }
    echo "<h2>This is my first code to show static variables</h2>";
    echo "is the first value of static variable" . variable();
    echo "<br>";
    echo "is the secound value of static variable" . variable();
    echo "<br>";
    echo "is the third value of static variable" . variable();
    echo "<br>";
    echo "is the four value of static variable" . variable();
    echo "<br>";
    echo "is the five value of static variable" . variable();
    echo "<br>";
    echo "is the six value of static variable" . variable();
    echo "<br>";
    echo "is the seven value of static variable" . variable();
    echo "<br>";
    echo "is the eight value of static variable" . variable();
    echo "<br>";
    echo "is the nine value of static variable" . variable();
    echo "<br>";
    echo "is the ten value of static variable" . variable();
    echo "<br>";
    ?>
</body>

</html>