<?php 
 class base
 {
     protected $name="ajay";
 function nam(){
     // echo $this->name;
 }
 }
 
 
 class derived extends base
 {
     function nam(){
         echo $this->name;
     }
 
 }
 
 // $test = new base();
 $test = new derived();
  echo  $test->nam();











?>