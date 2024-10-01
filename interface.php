<?php 
// interface is user for accesing all class method and property in single class. it is not possible by inheritance


// the keyword  extends replaced by implements
// object cant make as in last codes files
// cannt use modifier in function and class
// public only
// we can create object of the derived class.

interface a {
    function hlo();
}
interface b{
    function hi($a,$b);

}

class c implements a,b{


    function hi($a,$b){
        echo $a+$b ."<br>";
    }

    function hlo(){
   echo "i want to becomme a coder";
    }
  
}

$user = new c();
$user->hi(4,5);
$user->hlo();
















?>