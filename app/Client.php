<?php

namespace App;

class Client
{
    /**
     * @param AnimalFactory $animalFactory
     */
    public function execute(AnimalFactory $animalFactory): void
    {
        $animal = $animalFactory->createAnimal();
        $animal->doAction();
    }
}