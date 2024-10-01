<!-- let's asume that car is a class .
and the ob ect is  all car type.

So, a class is a template for objects, and an object is an instance of a class.
 -->

<?php
class calculation
{
    public $k, $b, $c;

    function sum()
    {
        $this->c = $this->k + $this->b;
        return $this->c;
    }
    function sub()
    {
        $this->c = $this->k - $this->b;
       return $this->c;
    }
};
$add = new calculation();
$add->k = 200;
$add->b = 10;
echo  "sum of two values: " .$add->sum()."<br>";

$sub = new calculation();
$sub->k = 200;
$sub->b = 10;
echo" sub for two values is: ".$sub->sub();

?>