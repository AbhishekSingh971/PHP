<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body bgcolor="#e49e41" align="center">
    <?php
    //Abhishek kumar singh
    class tecnia{
        public $name, $class, $sub;
        function info($class, $name, $sub)
        {
            $this->class = $class;
            $this->name = $name;
            $this->sub = $sub;
        }
        function ret()
        {
            echo $this->class;
            echo "<br>";
            echo $this->name;
            echo "<br>";
            echo $this->sub;
            echo "<br>";
            echo "<br>";
        }
    }
    $student = new tecnia();
    $student1 = new tecnia();
    echo "<h1>oops</h1>";
    echo "<h2>first student</h2>";
    $student->info("bca", "abhi", "math");
    $student->ret();
    echo "<h2>second student</h2>";
    $student1->info("BCA", "Ansh", "WEB");
    $student1->ret();
    ?>
</body>
</html>