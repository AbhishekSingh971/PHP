<!DOCTYPE html>
<html lang="en">

<head>
    <title>File Manipulation</title>
</head>

<body bgcolor="#e49e41" align="center" style="border:2px solid black;">
    <?php
    //Abhishek kumar singh
    echo  "<h2 style='border:2px solid black;background-color:aqua'>fwrite :</h2>";
    $file = fopen("new1.txt", "w+");
    $txt = "I'm Abhishek kumar Singh form BCA-Evening shift";
    fwrite($file, "$txt");
    readfile("new1.txt");

    echo  "<h2 style='border:2px solid black;background-color:aqua'>ftruncate :</h2>";
    ftruncate($file, 24);
    readfile("new1.txt");
    
    echo "<h2 style='border:2px solid black;background-color:aqua'>fgetc :</h2>";
    $file = fopen("new1.txt", "r");
    while (!feof($file)) {
        $line = fgetc($file);
        echo $line . "<br>";
    }
    ?>
</body>

</html>