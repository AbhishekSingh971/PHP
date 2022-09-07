<?php
$cookie_name="user";
$cookie_value="google";
echo "cookie value:". $_COOKIE["user"];
// for delete
setcookie("user","",time()-(86400),"/");
?>
