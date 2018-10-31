<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "I am a shape.My name is $this->name";
    }

}

class Circle extends Shape{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}
class Cylinder extends Circle{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
}
class Rectangle extends Shape{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}
class Square extends Rectangle
{
    function __construct($name, $width,$height)
    {
        parent::__construct($name, $width, $height);
    }
}
$circle= new Circle("Circle",12);
echo $circle->show()."-Perimeter".$circle->calculateArea()."</br>";
echo $circle->calculatePerimeter()."</br>";
$cylinder = new Cylinder("Cylinder",12,13);
echo $cylinder->show()."-Area".$cylinder->calculateArea()."</br>";
echo $cylinder->show()."-Volume".$cylinder->calculateVolume()."</br>";
$rectangle = new Rectangle("rectangle",12,13);
echo $rectangle->show()."-Area".$rectangle->calculateArea()."</br>";
echo $rectangle->show()."-Perimeter".$rectangle->calculatePerimeter()."</br>";
$square = new Square("square",15,18);
echo $square->show()."-Area".$square->calculatePerimeter();
?>
</body>
</html>