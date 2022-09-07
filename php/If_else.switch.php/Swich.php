<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <TITLE>Php oparators</TITLE>
</head>
<body bgcolor="#e49e41" align="center">
    <h1>Decision making in switch</h1>
    <h3>Abhishek kumar singh</h3>
    <?php
    echo "<h2>Food menu card</h2>";
    echo "At 1:Aloo parathe<br>";
    echo "At 2:Chilli patato<br>";
    echo "At 3:Shahi panner<br>";
    echo "At 4:Momos<br>";
    echo "At 5:Desert<br>";
    echo "At >5:other food.<br>";
    $num = 5;
    echo "<h3>You orderd for $num number Food which is ";
    switch ($num) {
        case 1:
            printf("Aloo parathe\n");
            break;
        case 2:
            printf("Chilli patato\n");
            break;
        case 3:
            printf("Shahi Panner\n");
            break;
        case 4:
            printf("Momos\n");
            break;
        case 5:
            printf("Desert\n");
            break;
        default:
            printf("Finish earlier, you are late");
            break;
    }
    ?>
</body>
</html>