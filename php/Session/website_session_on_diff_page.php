<?php
session_start();
?>
<!doctype html>

<head>
    <title>eCommerce Website</title>
    <style>
        div.form {
            text-transform:uppercase ;
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
            font-size:medium;
            border: 1px solid black;
            border-radius: 10px;
            margin-left: 20px;
        }
        h1{
            text-align:center;
        }
    </style>
</head>

<body bgcolor="Azure">
    <h1>login</h1>
    <form action="Session_start_1part.php" method="GET">
        <div class="form">
            <span>username</span>
            <br>
            <input type="email" name="email" placeholder="@gmail.com">
            <br>
            <span>Password</span>
            <br>
            <input type="password" name="password" placeholder="more than 8 characters">
            <br>
            <span>Password</span>
            <br>
            <input type="password" name="ConfirmPassword" placeholder="confirm password">
        </div>
        <div class="button">
            <a href="Session_start_1part.php"><button type="submit" name="Login">Login</button> </a>

            <!-- <a href="Session1_destroy_2part.php"> <button type="button" name="Logout">Logout</button> </a> -->
            <a href="website_session_on_diff_page.php"> <button type="reset" name="Reset">Reset</button> </a>
        </div>
    </form>
</body>

</html>