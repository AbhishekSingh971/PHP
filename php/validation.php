<!doctype html>

<head>
    <title>login</title>
    <style>
        .error{
            color:crimson;
        }
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
            cursor: pointer;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body bgcolor="Azure">
    <?php
    $emailErr = $PasswordErr = $ConfirmPasswordErr = " ";
    $email = $Password = $ConfirmPassword = " ";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email = input_data($_POST["email"]);
            } else {
                $emailErr = "Email is not valid";
            }
        }

        if (empty($_POST["Password"])) {
            $PasswordErr = "Password is required";
        } else {
            // check if name only contains letters and whitespace
            if (preg_match("/^[a-zA-Z0-9]*$/", $Password)) {
                $PasswordErr = "Only letters,no. and white space allowed";
            } else {
                $Password = input_data($_POST["Password"]);
            }
        }

        if (empty($_POST["ConfirmPassword"])) {
            $ConfirmPasswordErr = "password confirmation is required";
        } else {
            // check if name only contains letters and whitespace
            if (!preg_match_all("/^[a-zA-Z]*$/", $ConfirmPasswordd)) {
                $ConfirmPasswordErr = "Only letters,no. and white space allowed";
            } else {
                $ConfirmPassword = input_data($_POST["ConfirmPassword"]);
            }
        }
    }

    function input_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="body">
        <h1>login</h1>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo ($_SERVER["PHP_SELF"]); ?>">
            <div class="form">
                <span>username</span>
                <br>
                <input type="email" name="email" placeholder="@gmail.com">
                <span class="error">* <?php echo $emailErr; ?></span>
                <br>
                <span>password</span>
                <br>
                <input type="password" name="password" placeholder="more than 8 characters">
                <span class="error">* <?php echo $PasswordErr; ?></span>
                <br>
                <span>password</span>
                <br>
                <input type="password" name="confirmPassword" placeholder="confirm password">
                <span class="error">* <?php echo $ConfirmPasswordErr; ?></span>
            </div>
            <div class="button">
                <button type="submit" name="Login">Login</button>

                <a href="validation.php"> <button type="reset" name="Reset">Reset</button> </a>
            </div>
        </form>
    </div>
</body>

</html>
<?php
echo "<h1> your Input</h1>";
if (!isset($_POST['submit'])) {
    echo $email;
    echo "<br>";
    echo $Password;
    echo "<br>";
    echo $ConfirmPassword;
}
?>