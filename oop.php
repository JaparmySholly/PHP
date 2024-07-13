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
}

// Instatiate a user objects

$user1 = new User();

$user1=>name = 'Sholly';

var_dump($user1);