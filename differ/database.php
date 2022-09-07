<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  echo"failes";
}
  else{
  echo"successful";
  }

mysqli_close($conn);
?>