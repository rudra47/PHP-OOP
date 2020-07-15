<?php
    class Bill{
        private $meat=150;
        private $fish=100;
        private $egg=100;
        private $rice=50;
        public $bill;

        public function __construct(){
            $this->bill = 10;
        }

        public function meatCalculation($person){
            $this->bill += $this->meat * $person;
            return $this;
        }
        public function fishCalculation($person){
            $this->bill += $this->fish * $person;
            return $this;
        }
        public function eggCalculation($person){
            $this->bill += $this->egg * $person;
            return $this;
        }
        public function riceCalculation($person){
            $this->bill += $this->rice * $person;
            return $this;
        }
        public function getInfo(){
            echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
        }

        public function __destruct(){
            echo "Total bill ".$this->bill;
        }
    }

    $totalCalculation = new Bill();
    $totalCalculation->riceCalculation(5)->fishCalculation(2)->meatCalculation(2)->eggCalculation(1)->bill;
    
?>