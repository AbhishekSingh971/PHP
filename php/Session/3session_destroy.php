<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body bgcolor="#e49e41" align="center">
    <?php
    echo "Abhishek kumar singh<br>";
    $_session["login"] = "succesful";
    // echo"session_start";
    // print_r($_session);
    if (isset($_session["login"])) {
        echo $_session['login'];
    }
    
    // session_unset();
    session_destroy();
    ?>

</body>

</html>