<?php
class Book{
    public static $name = "Rudra";

    public static function author(){
        return "My name is : ".self::$name;
    }
    public static function getAuthor(){
        return static::author();
    }
}

class NewBook extends Book{
    public static function author(){
        return "My name is ".self::$name." Sen";
    }
}

echo Book::getAuthor(); //output is : My name is Rudra (in static)
echo NewBook::getAuthor(); //output is : My name is Rudra Sen(in static)