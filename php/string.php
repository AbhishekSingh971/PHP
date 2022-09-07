<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <TITLE>Php String function</TITLE>
</head>

<body bgcolor="#e49e41" align="center">
    <h1>String</h1>
    <?php
    $str = "Hello world , This is my first php code for string";
    echo "<h2> Strlen is used to see the length of the string</h2>";
    echo strlen("$str") . "<br>";
    var_dump($str);
    echo "<br>";
    echo "<h2> Strlen is used to see the word position in the string</h2>";
    echo strpos("$str", "code") . "<br>";
    var_dump($str);
    echo "<br>";
    echo "<h2> Strlen is used to count the word of the string</h2>";
    echo str_word_count("$str") . "<br>";
    var_dump($str);
    echo "<br>";
    echo "<h2> Strlen is used to print the string in reverse order</h2>";
    echo strrev("$str") . "<br>";
    var_dump($str);
    echo "<br>";
    echo "<h2> Strlen is used to replace the woed of the string</h2>";
    echo str_replace("This", "Here", "$str") . "<br>";
    var_dump($str);
    echo "<br>";
    ?>
</body>

</html>