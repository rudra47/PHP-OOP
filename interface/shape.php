<?php
include "autoload.php";

class Triangle implements ShapeInterface{
    public function getArea(){
        echo "Triangle Area";
    }
}

class Rectangle implements ShapeInterface, AnotherInterface{
    public function getArea(){
        echo "get area from rectangle";
    }
    public function anotherFunction(){
        echo "another function from rectangle";
    }
    public function rectangleFunction(){
        echo "rectangle function";
    }
}

// $triangle = new Triangle;
// $triangle->getArea();
$rectangle = new Rectangle;
$rectangle->anotherFunction();