<?php
$cookie_name="user";
$cookie_value="google";
setcookie($cookie_name,$cookie_value,time()+(86400),"/");
?>
<html>
    <body bgcolor="#e49e41" align="center">
        <?php
        echo "Abhishek kumar singh <br>";
        if(!isset($_COOKIE[$cookie_name])){
            echo "cookie is notset";
        }
        else{
            echo $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>