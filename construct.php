<?php 

//  first code 


// class person{
//     public $name = "alice";
//     public $age = 33;
//     function __construct($name,$age)
//   {
//         $this->name = $name;
//        $this->age = $age;
     
//     }

//     function showoff(){
//         echo $this->name." and ". $this->age ."<br>";
//     }


// }
 
// $about = new person("alice",45);
// $about->showoff();


// second code with function and construction.

// class person1{
//     public $name = "alice";
//     public $age = 33;
//     function __construct($name,$age)
//   {
// zprintng constructor value also
//          echo  $this->name = $name."<br>";
//           echo  $this->age = $age ."<br>";
     
//     }

//     function showoff(){
//         echo $this->name. " and ". $this->age;
//     }


// }
 
// $about = new person1("alice",45);
// $about->showoff();


//  third code

class person2{
    public $name ;
    public $age ;
    function __construct($name,$age)
  {
          $this->name = $name;
           $this->age = $age ;
     
    }

    // function showoff(){
    //     echo $this->name. " and ". $this->age ."<br>";
    // }
    function showoff(){
        echo $this->name. " and ". $this->age ."<br>";
    }


}
 
$about = new person2("alice",45);
$about1 = new person2("aden",23);
$about2 = new person2("james",34);
$about->showoff();
$about1->showoff();
$about2->showoff();


?>