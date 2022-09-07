<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <TITLE>Php oparators</TITLE>
    </head>
    <body bgcolor="#e49e41" align="center">
            <h1>Operator</h1>
                <?php
                 $a=35;
                 $b=5;
                 $x;
                 function sum(){
                     global $a,$b,$x;
                     $x=$a/$b;
                 }
                 echo" <h2>This is my first code for Division of 2 variables</h2>";
                 sum();
                 echo "<br><b>The Division of $a and $b is : $x</b></br>";
                 var_dump($x);
                 ?>
             </body>
     </html>