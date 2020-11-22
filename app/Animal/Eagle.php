<?php

namespace App\Animal;

class Eagle extends Animal
{
    public function fly(): void
    {
        echo 'whoohooo' . PHP_EOL;
    }

    public function eat(): void
    {
        echo 'yummy' . PHP_EOL;
    }
}