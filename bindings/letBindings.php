<?php
class Book{
    public static $name = "Rudra";

    public static function author(){
        return "My name is : ".self::$name;
    }
    public static function getAuthor(){
        return self::author();
    }
}

class NewBook extends Book{
    public static function author(){
        return "My name is ".self::$name." Sen";
    }
}
$newBook = new NewBook;
// echo $newBook->getAuthor(); //output is : My name is Rudra Sen (in non static)
echo $newBook->getAuthor(); //output is : My name is Rudra (in static)