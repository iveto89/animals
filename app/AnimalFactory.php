<?php

namespace App;

use App\Adapter\AnimalInterface;

abstract class AnimalFactory
{
    /**
     * @return AnimalInterface
     */
    abstract public function createAnimal(): AnimalInterface;
}