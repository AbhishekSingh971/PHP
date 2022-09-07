<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class abc{
        public function __construct()
        {
            echo "HELLO";
        }
         public function work()
        {
            echo "working";
        }
        public function __destruct()
        {
            echo "enter the program";
        }
    }
    $test=new abc();
    $test->work();
    $test->work();
    ?>
</body>
</html>