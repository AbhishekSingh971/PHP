<?php
session_start();
session_destroy();
// header("Location : http://localhost/website/attendence_sheet/main_page.php");
// exit();
echo "<script> location.href='http://localhost/website/attendence_sheet/main_page.php';</script>";
exit;
?>