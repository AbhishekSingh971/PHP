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
    class emp
    {
        public $name, $id, $salary;
        function info($name, $id, $salary): void
        {
            $this->name = $name;
            $this->id = $id;
            $this->salary = $salary;
        }
    }

    $emp = new emp();
    $emp->info("Krishna", 1201, 5000);
    echo "<br>";
    echo $emp->name;
    echo "<br>";
    echo $emp->id;
    echo "<br>";
    echo $emp->salary;
    echo "<br>";

    $emp->info("Ansh", 1202, 5001);
    echo "<br>";
    echo $emp->name;
    echo "<br>";
    echo $emp->id;
    echo "<br>";
    echo $emp->salary;
    ?>
</body>

</html>  