<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php code</title>
</head>
<body bgcolor="#e49e41" align="center">
  <?php
  echo "<h1>Sort</h1>";
  echo "<b>Abhishek Kumar Singh</b><br>";

  echo "<h2>asort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  asort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value ;
    echo "<br>";
  }
  echo "<h2>arsort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  arsort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<h2>ksort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  ksort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<h2>krsort</h2>";
  $color = array("red=>1", "green=>2", "yellow=>3", "pink=>7", "white=>6", "blue=>5", "silver=>4", "orange=>0");
  krsort($color);
  foreach ($color as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  ?>
</body>
</html>