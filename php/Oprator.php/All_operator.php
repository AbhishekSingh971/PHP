<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 10px;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 80%;
            background-color: red;
            margin: auto;
            /* text-align:"center"; */
        }

        .container1 {
            max-width: 80%;
            background-color: gray;
            margin: auto;
            /* text-align:"center"; */
        }
    </style>
</head>

<body bgcolor="#e49e41" align="center">
    <h1>Operator</h1>
    <b>Abhishek Kumar Singh</b><br>
    <div class="container">
        <?php
        $a = 34;
        $b = 6;
        echo "<h2>Arithamatic Operators</h2>";
        echo "<h3>Addition</h3>";
        echo ($a + $b), "<br/>";

        echo "<h3>Subtrction</h3>";
        echo ($a - $b), "<br/>";

        echo "<h3>Multiplication</h3>";
        echo ($a * $b), "<br/>";

        echo "<h3>Divide</h3>";
        echo ($a / $b), "<br/>";

        echo "<h3>Reminder</h3>";
        echo ($a % $b), "<br/>";

        echo "<h2>Assignment Operators</h2>";
        $newvar = $b;

        echo "<h3>Addition assignment</h3>";
        echo ($newvar += 5), "<br/>";

        echo "<h3>Subtrction assignment</h3>";
        echo ($newvar -= 5), "<br/>";

        echo "<h3>Multiplication assignment</h3>";
        echo ($newvar *= 5), "<br/>";

        echo "<h3>Divide assignment</h3>";
        echo ($newvar /= 4), "<br/>";

        echo "<h2>Comparison Operators</h2>";

        echo "<h3>Equals to</h3>";
        echo "The value of $b==6 is ";
        echo var_dump($b == 6), "<br>";

        echo "<h3>Not Equals to</h3>";
        echo "The value of $b!=6 is ";
        echo var_dump($b != 6), "<br>";

        echo "<h3>Less than Equals to</h3>";
        echo "The value of $b<=4 is ";
        echo var_dump($b <= 4), "<br>";

        echo "<h3>Grater than Equals to</h3>";
        echo "The value of $b>=4 is ";
        echo var_dump($b >= 4), "<br>";
        ?>
    </div>
    <div class="container1">
        <?php
        echo "<h2>Increment\Decrement Operators</h2>";
        echo "<h3>Post increment</h3>";
        echo $a++, "<br>";
        echo "<h3>Post decrement</h3>";
        echo $a--, "<br>";
        echo "<h3>Pre increment</h3>";
        echo ++$a, "<br>";
        echo "<h3>Pre decrement</h3>";
        echo --$a, "<br>";

        echo "<h2>Logical Operators</h2>";
        echo "<h3>And(&&) Operator</h3>";
        $myvar = (true) && (true);
        echo var_dump($myvar), "<br>";

        $myvar1 = (true) && (false);
        echo var_dump($myvar1), "<br>";

        $myvar2 = (false) && (true);
        echo var_dump($myvar2), "<br>";

        $myvar3 = (false) && (false);
        echo var_dump($myvar3), "<br>";

        echo "<h3>Or(||) Operator</h3>";
        $myvar = (true) || (true);
        echo var_dump($myvar), "<br>";

        $myvar1 = (true) || (false);
        echo var_dump($myvar1), "<br>";

        $myvar2 = (false) || (true);
        echo var_dump($myvar2), "<br>";

        $myvar3 = (false) || (false);
        echo var_dump($myvar3), "<br>";

        echo "<h3>Xor Operator</h3>";
        $myvar = (true) xor (true);
        echo var_dump($myvar), "<br>";

        $myvar1 = (true) xor (false);
        echo var_dump($myvar1), "<br>";

        $myvar2 = (false) xor (true);
        echo var_dump($myvar2), "<br>";

        $myvar3 = (false) xor (false);
        echo var_dump($myvar3), "<br>";

        echo "<h2>Ternary Operators</h2>";
        ($a <= $b) ? print("It's true") : printf("It's false");

        ?>
    </div>
</body>

</html>