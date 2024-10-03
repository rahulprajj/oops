<?php 
// interface is used  for accesing all class method and property in single class. it is not possible by inheritance in php but in c.
// in inetrface we cant make member variable.
//  we implement the empty method in derived class.
// intrface is a collection of the abstract (empty) methods.every mehtod should be implement in drived class it is mandatory .
// it can't conatian variable .
// the keyword  extends replaced by implements.
// object cant make as in last codes files
// cannt use modifier in function and class
// public only
// we can create object of the derived class.
// in interface we can create only public method but in abstract calss we can create all three types.
// it can't conatin construct method as like  absract class .

interface a {
    // public $naem ="rahul";
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
// $user->naem;
















?>