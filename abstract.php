<?php

// abstract class 
// in the abstract class we have to declare a  one abstract method(mandatory) but not implement 
// it implement in derived class not in base class
// @@@@@@@@we cant create instace of abstract claa
// abstract method child or drived class me inherit must or erroe.

abstract class base
{
    public $name;

    abstract protected function cal($a, $b);
// but we can create 1 or more public function. 
}


class derived extends base
{

// imlementing the abstract method
    public function cal($c, $d)
    {
        echo $c + $d;
    }
}

$test = new derived("rahul kumar");
$test->cal(2, 4);

 
