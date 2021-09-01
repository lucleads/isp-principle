<?php

namespace App\bad_code;

use http\Exception\BadMethodCallException;

/**
 * Class Dog
 * @package App\bad_code
 */
class Dog implements Animal
{
    // Unused method in Dog Class
    public function fly(): void
    {
        throw new BadMethodCallException("Dogs cannot fly<br>");
    }

    public function run(): void
    {
        print_r("Dog is running<br>");
    }

    public function bark(): void
    {
        print_r("Dog is barking<br>");
    }
}