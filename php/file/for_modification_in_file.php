<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modify</title>
</head>

<body style='border:2px solid black;background-color:aqua'>
    <?php
    //Abhishek kumar singh
    $file = fopen("file2.txt", "a");
    fwrite($file, " my strength is that i'm always be positive");
    echo readfile("file2.txt");
    ?>
</body>

</html>