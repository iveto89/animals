<?php

namespace App;

use App\Adapter\AnimalInterface;
use App\Adapter\EagleAdapter;
use App\Animal\Eagle;

class EagleFactory extends AnimalFactory
{
    /**
     * @return AnimalInterface
     */
    public function createAnimal(): AnimalInterface
    {
        return new EagleAdapter(new Eagle());
    }
}