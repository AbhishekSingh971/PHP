<?php
session_start();
?>
<!doctype html>

<head>
    <title>login</title>
    <style>
        div.form {
            text-transform: uppercase;
            display: block;
            border: 2px solid black;
            text-align: center;
            background-color: white;
            padding: 10px;
        }

        div.form input {
            margin: 10px;
        }

        div.button {
            padding: 8px;
            text-align: center;
            margin-top: 5px;
            background-color: black;
        }

        button {
            padding: 8px;
            background-color: azure;
            font-size: medium;
            border: 1px solid black;
            border-radius: 10px;
            margin-left: 20px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body bgcolor="Azure">
    <h1>login</h1>
    <form action="<?php echo ($_SERVER["PHP_SELF"]); ?>" method="GET">
        <div class="form">
            <span>username</span>
            <br>
            <input type="email" name="email" placeholder="@gmail.com">
            <br>
            <span>password</span>
            <br>
            <input type="password" name="password" placeholder="more than 8 characters">
            <br>
            <span>password</span>
            <br>
            <input type="password" name="confirmPassword" placeholder="confirm password">
        </div>
        <div class="button">
            <button type="submit" name="Login">Login</button>

            <a href="website_session_on_diff_page.php"> <button type="reset" name="Reset">Reset</button> </a>
        </div>
    </form>
</body>
</html>

<?php
// session_unset();
if (isset($_GET['Login'])) {
    $_session["login"] = "login succesful";
    $_SESSION["email"] = $_GET['email'];
    $_SESSION["password"] = $_GET['password'];
    $_SESSION["confirmPassword"] = $_GET['confirmPassword'];

    if ($_SESSION["password"] != $_SESSION["confirmPassword"]) {
        echo "<h3 style='color:red;text-align:center;'><b>Please Match the password" . "<br>" . "password is not correct</b></h3>";
        die();
    }

    if (!isset($_SESSION["login"])) {
            if(isset($_SERVER['HTTPS']))
            {
                echo "It comes from HTTPS";
            }
            else{
                echo "IT comes from HTTP";
            }
            echo "<button type='button' name='confirm'>Confirm</button></a>";
        }
    }
?>