<?php
$servername = "localhost";
$username = "root";
$password = "admin";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  echo" connection fail";
}
  else{
  echo"successful";
  $create="CREATE DATABASE tias2";
  $result=$conn->query($create);
  echo "Database created";
  }

mysqli_close($conn);
?>