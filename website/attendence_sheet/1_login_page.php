<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <style>
        body {
            /* background-color: turquoise; */
            background-image: url("https://cache.careers360.mobi/media/presets/720X480/colleges/social-media/media-gallery/5698/2019/6/11/College%20Building%20View%20of%20Tecnia%20Institute%20of%20Advanced%20Studies%20Delhi_Campus-View.png");
            background-repeat:no-repeat;
            background-size:1550px 800px ;
        }

        div.form {
            text-transform: uppercase;
            display: block;
            border: 2px solid black;
            box-shadow: 20px 10px;
            text-align: center;
            background-color: white;
            padding: 10px;
            user-select: none;
        }

        div.form input {
            margin: 10px;
        }

        div.button {
            padding: 8px;
            text-align: center;
            margin-top: 20px;
            background-color: black;
        }

        div.button input {
            cursor: pointer;
            padding: 8px;
            background-color: azure;
            font-size: medium;
            border: 1px solid black;
            border-radius: 10px;
            margin-left: 20px;
        }

        h1 {
            text-align: center;
            border-bottom: 5px solid black;
        }
        img{float:left;
            height: 80px;
            width: 80px;
        }
    </style>
</head>

<body>
    <img src="data:image/jpeg;base64,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">
    <br>
    <h1>LOGIN </h1>
    <div class="form">
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <span>EMAIL</span>
            <br>
            <input type="email" name="email" placeholder="@gmail.com">
            <br>
            <span>PASSWORD</span>
            <br>
            <input type="password" name="password" placeholder="more than 8 charcters">
            <br>
            <span>PASSWORD</span>
            <br>
            <input type="password" name="cpassword" placeholder="Confirm Password">
    </div>
    <div class="button">
    <a href="main_page.php"><input type="submit" name="submit"></a>
        <a href="1_login_page.php"><input type="reset" name="reset"></a>
    </div>
        </form>
</body>

</html>

<?php
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$_SESSION['cpassword']=$_POST['cpassword'];
if(isset($_POST['submit'])){
echo "Email : " . $_SESSION['email'] . "<br>";
if($_SESSION['password']!=$_SESSION['cpassword'])
{
    echo "password doesn't match, please confirm the password";
}
else{
echo "Password : " . $_SESSION['password'] . "<br>";
echo "Confirm Password : " . $_SESSION['cpassword'] . "<br>";
 echo "<button><a href='main_page.php'>confirm</a></button>";
}
}
?>