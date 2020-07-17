<?php
include 'person.php';

class Index{
    public $authors;

    public function authors(Person $personName){
        $this->authors = $personName->names();
    }
}

$index = new Index;
$person = new Person;

$index->authors($person);

print_r($index->authors);