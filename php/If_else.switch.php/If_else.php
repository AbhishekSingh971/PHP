<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <TITLE>Php oparators</TITLE>
</head>

<body bgcolor="#e49e41" align="center">
    <h1>Decision making nested if-else</h1>
    <h3>Abhishek kumar singh</h3>
    <p>Your Driving license status</p>
    <?php
    $age = 18;
    if ($age < 18)
        echo "You are not eligibl for driving license";
    else {
        if ($age >= 18 && $age <= 75)
            echo "You are eligibl for driving license";
        else
            echo "You are not eligibl for driving license";
    }
    ?>
</body>

</html>