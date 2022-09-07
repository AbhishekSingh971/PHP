<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "tias2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected";
}

// Fetch from db
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>  ID: ". $row["ID"] . "<br>";
        echo "<br>  Name: ". $row["Name"] . "<br>";
        echo "<br>  Email: ". $row["Email"] . "<br>";
        echo "<br>  Mobileno: ". $row["Mobileno"] . "<br><br>";
    }
} else {
    echo "0 results";
}

$conn->close();
