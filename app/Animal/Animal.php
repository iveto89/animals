<?php

namespace App\Animal;

abstract class Animal
{
    public function sleep(): void
    {
        echo 'zzzzzz' . PHP_EOL;
    }
}