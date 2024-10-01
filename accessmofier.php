<?php 
// access modifier usef for restriction

// three type of modifiers 


// public(EVERYWHERE),protected(DEFINED CLAS AND DERIVED CLASS),private(NO WHERE ONLY DEFINED CLASS) ;

// publuic
// code started

// class base {
//     protected $name;

//     public function __construct($nam){
//         $this->name = $nam;
//     }
//   public function show(){
//     echo "name is " .$this->name."<br>" ;
//   }
        
//     }

// $user = new base("kumar sir");
// // $user->name =("mukul kumar");
// $user->show();



// protected


class base {
    protected $name;

    public function __construct($nam){
        $this->name = $nam;
    }
  protected function show(){
    echo "name is " .$this->name."<br>" ;
  }
        
    }

class username extends base
  {
  public function get(){
    echo "that is your name : " .$this->name ."<br>";
  }

    }

$user = new username("kumar sir");
$user->get();




?>