<?php

class User{

    // Properties are attributes that belongs to a class

    // Access Modifiers; public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed inside the class
    //protected - can only be accessed from inside the class and be inheriting the class


    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = "$name";
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

// Instatiate a user objects

$user1 = new User('Sholly', 'sholly@gmail.com', '12345');
$user2 = new User('Japarmy', 'japarmygmail.com', '67890');

echo $user1->email;
echo $user2->name;

