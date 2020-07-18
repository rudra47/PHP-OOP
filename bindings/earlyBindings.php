<?php
class Book{
    public $name = "Rudra";

    public function author(){
        return "My name is : ".$this->name;
    }
}

class NewBook extends Book{
    public function author(){
        return "My name is ".$this->name." Sen";
    }
}
$newBook = new NewBook;
echo $newBook->author();
