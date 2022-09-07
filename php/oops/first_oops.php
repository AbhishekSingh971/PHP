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
    class cal{
    public $a,$b,$c;
    function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    function mul(){
        $this->c=$this->a*$this->b;
        return $this->c;
}
}
$c1=new cal();
$c1->a=10;
$c1->b=20;
echo "sum :". $c1->sum();
echo "<br>";
echo "mul :". $c1->mul();

    ?>
</body>

</html>