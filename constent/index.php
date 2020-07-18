<?php

class Index{
    const PI = 3.1416;
    public function circleArea($radius){
        return $radius * $radius * self::PI;
    }
}

$index = new Index;
echo Index::circleArea(2);