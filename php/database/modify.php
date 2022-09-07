<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "tias2";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected" . "<br><br>";
}

echo "After Modify" . "<br>";
$update = "UPDATE `student` SET `Email`='nsk@gmail.com' WHERE Email='uvx@gamil.com'";
$resultu = $conn->query($update);
if ($conn->query($update) === TRUE) {
    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<br>  Email: " . $row["Email"] . "<br>";
        }
    } else {
        echo "0 results";
    }
} else {
    die("query not inserted");
}
$conn->close();
?>