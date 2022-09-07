<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Function</title>
</head>
<body bgcolor="#e49e41" align="center">
  <?php
  echo "<h1>Array function</h1>";
  echo "<h2>Abhishek kumar singh</h2>";
  echo "<p><b>slice with true</b></p>";
  $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
  $slt = array_slice($color, 3, 4, true);
  print_r($slt);
  echo "<br>";

  echo "<p><b>slice with false</b></p>";
  $slf = array_slice($color, 3, 4, false);
  print_r($slf);
  echo "<br>";

  echo "<p><b>splice</b></p>";
  $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
  $col = array("gry", "black", "azure");
  array_splice($color, 3, 4, $col);
  print_r($color);
  echo "<br>";

  echo "<p><b>array_pad()</b></p>";
  $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
  print_r(array_pad($color, 10, "gray"));

  echo "<p><b>list</b></p>";
  $color = array("red", "green", "yellow", "pink", "white", "blue", "silver", "orange");
  list($a,, $b) = $color;
  echo $a;
  echo "<br>";
  echo $b;
  ?>
</body>
</html>