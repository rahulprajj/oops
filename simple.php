<?php
class usinigNumbers
{
    public $a, $f, $d;
    function show()
    {
        echo "number: " . $this->a ."<br>";
    }
}
$value = new usinigNumbers();
$value->a = 500;
$value->show();

// constructions call automatically when we create object same class and two times underscore  __ before construct;

class person{
    public $name,$age;
    function show(){
        echo "name is: " .$this->name." and age is ". $this->age;
     
    }
}
 
$about = new person();
$about->name = "rahul kumar";
$about->age= 21;
$about->show();


