<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // session_unset();
    $_session["login"] = "login succesful";
    $_SESSION["email"] = $_GET['email'];
    $_SESSION["password"] = $_GET['password'];
    $_SESSION["confirmPassword"] = $_GET['confirmPassword'];

    if (!isset($_SESSION["login"])) {
        echo $_session['login'];
        echo "<br>";
        echo "username : " . $_GET['email'];
        echo "<br>";
        if ($_SESSION["password"] != $_SESSION["confirmPassword"]) {
            echo "Please Match the password" . "<br>" . "password is not correct";
        } else {
            echo "password : " . $_GET['password'];
            echo "<br>";
            echo " confirm password : " . $_GET['confirmPassword'];
            echo "<br>";
            // <a href='http://localhost/website/gadget.php'>
            // echo "<button type='button' name='confirm'>Confirm</button></a>";
        }
    }
    ?>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "admin";
    $dbname = "abhi";
    $get = $_GET['email'];
    $getPass = $_GET['password'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Email, Password FROM `student` WHERE Email = '$get'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["Password"] == $getPass) {
                header('location: http://localhost/website/gadget.php');
                die();
            } else {
                echo "Password Incorrect!";
            }
        }
    } else {
        echo "Your Email Id Not Exist. Please Register First";
    }
    ?>
</body>

</html>