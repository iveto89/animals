<?php

namespace App\Animal;

class Bee extends Animal
{
    public function fly(): void
    {
        echo 'whoohooo' . PHP_EOL;
    }
}