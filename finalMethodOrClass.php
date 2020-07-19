<?php
final class Book{
    public static $name = "Rudra";

    final public static function author(){
        return "My name is : ".self::$name;
    }
    public static function getAuthor(){
        return static::author();
    }
}

class NewBook extends Book{ //Here Book can not be override bcz its a final class
    public static function author(){ //Here author can not be override bcz its a final method
        return "My name is ".self::$name." Sen";
    }
}

echo Book::getAuthor(); 
echo NewBook::getAuthor(); 