<?php

namespace App\bad_code;

/**
 * Animal interface
 */
interface Animal
{
    public function fly(): void;

    public function run(): void;

    public function bark(): void;
}