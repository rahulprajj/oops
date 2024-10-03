<?php 

// class ac {
// public $model = "voltas";
// public $speed = 13;
// function speedup(){

//      echo   $this->speed++;
//      echo"<pre>";
// }
// function speeddown(){
//    echo  $this->speed--;
// }
// }

// $acs = new ac();
// echo $acs->model;
// echo"<pre>";



// // overriding the value of the variable of model
// //  echo $acs->model="ab" ;
//  $acs->speedup();
//  $acs->speeddown();



class irctc
{
   public static  $count=1 ;
     static  function getcount(){
       echo self::$count;
       
   }

function __construct()// construct fun calls only when we created object for that

   {
     echo self::$count++ ;
   }
}
echo "<pre>";
$ner = new irctc();
echo "<pre>";

$ner1 = new irctc();

echo "<pre>";
$ner2 = new irctc();
echo "<pre>";
  irctc::getcount ();










?>