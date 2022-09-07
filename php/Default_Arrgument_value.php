<?php
    declare(strict_types=1);
        echo "<h1>The default argument value</h1>";
        function number(int $num = 36) 
        {
          echo "The number is : $num <br>";
        }
        number(346);
        number();
        number(125);
        number(30);
?>