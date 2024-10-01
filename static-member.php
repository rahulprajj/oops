<?php 


// used self place of this 
// without objet used base 
// class base {
//     public  static $name = "alice blue";
//     public  static function show(){
//         echo self::$name;
//     }
    

    
// }



// $test = new base();
// $test->show();

// or accesing without object

// echo base::$name ."<br>";
// base::show();
class base {
    public  static $name = "alice blue";
    public  static function show(){
        echo self::$name."<pre>";
    }
    
public function __construct(){
    self::show();
}


}



$test = new base();
$test->show();

// or accesing without object

// echo base::$name ."<br>";
// base::show();












?>