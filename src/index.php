<?php

require __DIR__ . '/vendor/autoload.php';

// ---- GOOD CODE ----

use App\good_code\Bird;
use App\good_code\Dog;

$dog = new Dog;
$bird = new Bird;
$dog->bark();
$dog->run();
$bird->fly();
$bird->run();

// ---- BAD CODE -----

/*
use App\bad_code\Bird;
use App\bad_code\Dog;
*/

//$dog->fly();    do you really want the dog to fly?
//$bird->bark();  do you really want the bird to bark?

