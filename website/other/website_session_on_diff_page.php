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
    <div class="body">
        <h1>login</h1>
        <form action="Session_start_1part.php" method="GET">
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
    </div>
</body>
</html>

<!-- To see all signup email on page -->
<!-- <?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "abhi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected";
}

// Fetch from db
$sql = "SELECT Email FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>  Email: ". $row["Email"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> -->