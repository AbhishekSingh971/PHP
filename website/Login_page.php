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
        // echo $_session['login'];
        // echo "<br>";
        echo "username : " . $_GET['email'];
        echo "<br>";
        if ($_SESSION["password"] == $_SESSION["confirmPassword"]) {
            echo "password : " . $_GET['password'];
            echo "<br>";
            echo " confirm password : " . $_GET['confirmPassword'];
            echo "<br>";
            // <a href='http://localhost/website/gadget.php'>
            // echo "<button type='button' name='confirm'>Confirm</button></a>";
        }
    }
}
?>

<?php
if (isset($_GET['Login'])) {
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
                echo "<h3 style='color:red;text-align:center;'><b> Incorrect Password! </b></h3>";
            }
        }
    } else {
        echo "<h3 style='color:red;text-align:center;'><b>You don't have an account with this email <br> sign-up first </b></h3>";
    }
}
?>