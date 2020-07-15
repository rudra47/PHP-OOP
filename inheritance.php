<?php

class MainClass{
    public $name;
    public function setName($name){
        $this->name = $name;
    }
}

class Fruits extends MainClass{
    public function juice(){
        
    }
}

class Animal extends MainClass{
    public function zoo(){
        
    }
}

$fruits = new Fruits;
$fruits->setName("Mango");
echo $fruits->name;

$animal = new Animal;
$animal->setName("Cow");
echo ' '.$animal->name;