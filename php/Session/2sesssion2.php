<?php
session_start();
echo "<b>Abhishek Kumar Singh</b><br>";
$_session["login"]="succesful";
// echo"session_start";
// print_r($_session);
if(isset($_session["login"])){
echo $_session['login'];
}
?>
