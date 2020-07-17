<?php 
class User{
    static public $name = "Rahul";
    static public $incr = 0;
    
    static public function getName(){
        return self::$name = "Rudra";
    }
    static public function getIncr(){
        return self::$incr += 1;
    }
}

// User::getName();
// echo User::$name;

User::getIncr();
echo User::$incr;