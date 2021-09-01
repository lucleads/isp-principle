<?php

namespace App\bad_code;

use http\Exception\BadMethodCallException;

/**
 * Class Bird
 * @package App\bad_code
 */
class Bird implements Animal
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

    // Unused method in Bird Class
    public function bark(): void
    {
        throw new BadMethodCallException("Birds cannot bark<br>");
    }
}