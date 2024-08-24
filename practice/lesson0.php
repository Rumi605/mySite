<?php

// $a = 10; // integer
// $b = 20;

// $c = $a + $b;
// echo $c;

$Fyodor = "Fyodor is bot";
$Runi = "Runi best";

echo $Fyodor . " AND " . $Runi;

$bool = true;
$bool = false;
$array = [1, 2, 3, 4, 5, 6];
$arr = [$bool, 12, "asdas"];

class Animal {
    public $name;
    public $isHunter;
    public $age;


    public function __construct ($name, $isHunter, $age) {
        $this->name = $name;
        $this->isHunter = $isHunter;
        $this->age = $age;
    }
}

$animal1 = new Animal("whale" , true, 50);

echo $animal1->name;