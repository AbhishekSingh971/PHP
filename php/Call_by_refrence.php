<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, inital-scale=1.0">
  <TITLE>Function</TITLE>
</head>

<body bgcolor="#e49e41" align="center">

  <?php
  echo "<h1>Call by reference</h1>";
  echo "<b>Here ,we call the value by giving it's address</b><br>";
  function increment(&$a)
  {
    $a += 5;
  }

  $num = 2;
  increment($num);
  echo $num;
  ?>
</body>

</html>