<!DOCTYPE html>
<HTML>
    <HEAD>
        <body bgcolor="#e49e41" align="center">
            <?php
            echo "<h1>Regular user</h1>";
            $str="Hello world ,This is my php code on regular user";
            $exp="/my/i";
            echo preg_match($exp,$str);
            echo "<br>";
            echo preg_match_all($exp,$str);
            echo "<br>";
            echo preg_replace($exp,"my first ",$str);
            ?>
</body>
</HEAD>
</HTML>