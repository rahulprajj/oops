<?php

// abstract class 
// in the abstract class we have to declare a  one abstract method(mandatory) but not implement 
// it implement in derived class not in bse class


abstract class base
{
    public $name;

    abstract protected function cal($a, $b);
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
