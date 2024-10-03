<?php


class ac
{

protected $brand = "noraml";
protected $br = "noram";
    private $model = "voltas";
    public $guranty = "five years";
    public  $speed = 16;

   public function speedup()  
    {
        echo $this->speed++;
    }
     public function speeddown()
    {
        echo $this->speed--;
    }
     public function getmodel() #accesser function only u can read the function 
    {
     return $this->model;
    }
    function setmodel() #accesser function only u can read the function 
    {
     return $this->model="dakin";
    }

    function __construct($brand)
    {

         echo $this->brand=$brand;
        echo " the ac name is: " . $this->model;
        echo "<pre>";

        echo "guranty validated: " .  $this->guranty;
        echo "<pre>";
    }
}
class newac extends ac{
    // public function speedup()  
    // {
    //     echo $this->speed++;
    //     echo $this->brand;
    //     echo $this->$br;
    // }

   

 
  

}

$ajay = new ac("nora");
$aja = new newac("fatehi");

//  accesseing the  "private" variable value with the set method

 echo $ajay->getmodel();
 echo $ajay->setmodel();
// echo $ajay->model;


echo "<pre>";
$ajay->speeddown();
echo "<pre>";
$aja->speeddown();
$aja->speedup();
echo $aja->$brand;

// echo $ajay->model = "dakin";
