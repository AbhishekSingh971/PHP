<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <TITLE>Php oparators</TITLE>
</head>

<body bgcolor="#e49e41">
<h1>Abhishek kumar singh</h1>
  <h1>Array</h1>
  <?php
  $color = array(
    array("Red", "Green", "Blue"),
    array("White", "Black", "Yellow"),
    array("Sky-blue", "Orange", "Gray"),
    array("Purpel", "Silver", "Brown"),
  );
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>" . $color[$row][$col] . "</li>";
    }
    echo "</ul>";
  }
  ?>
</body>

</html>