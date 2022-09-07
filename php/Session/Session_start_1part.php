<?php
session_start();
$_session["email"] = "Login Sucessful";
// // echo"session_start";
// // print_r($_Session);
// echo $_session['email'];
// echo "<br>";

if (!isset($_sesseion["Login"])) {
  echo $_session['email'];
  echo "<br>";
  if (isset($_GET['Login'])) {
    echo "Email : " . $_GET['email'];
    echo "<br>";
    echo "Password : " . $_GET['password'];
    echo "<br>";
    echo "Confirm Password : " . $_GET['ConfirmPassword'];
  }
}
