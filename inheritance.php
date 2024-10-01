<?php 

// first code simple

// class employee{
//     public $name;
//     public $age;
//     public $salary;

// function __construct($n,$a,$s){
//     $this->name= $n;
//     $this->age= $a;
//     $this->salary= $s;
//      function __construct()
//     {
        
//   echo "manager conctruct";
        
//     }

// }
// function data() {
//      echo "<h3>the employee data</h3>";
//     echo"name is: " .$this->name." , age is: ".$this->age." and salary is:".  $this->salary;
// }

// }
// class manager extends employee{
//     function __construct()
//     {
        
//   echo "manager conctruct";
        
//     }
// }

// $emp = new employee("james",23,100);
// $emp->data();


// second code with different functions



class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }
  
  public function message() {
    echo "Am I {$this->name}{$this->color} a fruit or a berry? ";
 

  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();
?>






?>