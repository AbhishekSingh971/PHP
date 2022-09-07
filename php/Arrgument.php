 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
 </head>
 <body bgcolor="#e49e41" align="center">
 <?php   
 echo "<h1>Arrgument</h1>"."<br>";  
  function sum($a,$b)
  {
  $sum=$a+$b;
   echo $sum;
  }
  echo "<h3> the sum of two arrgument is : ";
  sum(1,2);
  echo "<br>";
  echo "<h3> the sum of two arrgument is : ";
  sum(4,5);
?>
</body>
 </html>