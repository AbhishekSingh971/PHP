<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <?php
    class tecnia
    {
        public $name, $ID;
        function __construct($name, $ID)
        {
            $this->name = $name;
            $this->ID = $ID;
        }
        function __destruct()
        {
            echo "Name : " . $this->name;
            echo "<br>";
            echo "ID : " . $this->ID;
        }
    }
    class students extends tecnia
    {
        function __destruct1()
        {
            echo "Name of student with id no " . $this->ID . " is " . $this->name;
        }
    }
    $info = new students("Ansh", 76);
    echo $info->__destruct1() . "<br>";
    ?>
</body>

</html>