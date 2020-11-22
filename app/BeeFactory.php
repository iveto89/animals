<?php

namespace App;

use App\Adapter\AnimalInterface;
use App\Adapter\BeeAdapter;
use App\Animal\Bee;

class BeeFactory extends AnimalFactory
{
    /**
     * @return AnimalInterface
     */
    public function createAnimal(): AnimalInterface
    {
        return new BeeAdapter(new Bee());
    }
}