<?php

namespace App\Animal;

class Lion extends Animal
{
    public function roar(): void
    {
        echo 'wrrrrr' . PHP_EOL;
    }

    public function eat(): void
    {
        echo 'yummy' . PHP_EOL;
    }
}