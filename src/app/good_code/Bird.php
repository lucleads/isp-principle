<?php

namespace App\good_code;

/**
 * Class Bird
 * @package App\good_code
 */
class Bird implements FlyingAnimal
{
    /**
     * fly
     */
    public function fly(): void
    {
        print_r("Bird is flying<br>");
    }

    public function run(): void
    {
        print_r("Bird is running<br>");
    }
}