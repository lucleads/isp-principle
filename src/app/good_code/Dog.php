<?php

namespace App\good_code;

/**
 * Class Dog
 * @package App\good_code
 */
class Dog implements Animal
{
    /**
     * run
     */
    public function run(): void
    {
        print_r("Dog is running<br>");
    }

    /**
     * bark
     * This method is only for the Dog Class
     */
    public function bark(): void
    {
        print_r("Dog is barking<br>");
    }
}