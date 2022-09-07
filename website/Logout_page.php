<?php
session_start();
session_destroy();
// header("Location : http://localhost/website/gadget.php");
// exit();
echo "<script> location.href='http://localhost/website/gadget.php';</script>";
exit;
?>