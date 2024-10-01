<?php 

class username{

    public $name ="rahul kumar" ;

    function username (){
        echo "username is {$this->name}";
    }
}

class user  extends username {


    function username (){
        echo "user is {$this->name}";
    }
 
}


// $userdata = new username();
// $userdata = new user();
//   $userdata->username();



?>