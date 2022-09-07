<?php

declare(strict_types=1);
?>
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
  echo "<h1>Type-casting</h1>";
  echo "Abhishek kumar singh";

  echo "<h3>Return Type Declarations</h3>";
  function sum(int $a, float $b): float
  {
    return $a + $b;
  }

  echo sum(4, 5.2). "<br>";
  echo sum(11, 9.2). "<br>";
  echo sum(5, 5.0). "<br>";
  echo sum(10, 6.6). "<br>";
  ?>
</body>
</html>