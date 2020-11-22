<?php

namespace App;

use App\Adapter\AnimalInterface;
use App\Adapter\DolphinAdapter;
use App\Animal\Dolphin;

class DolphinFactory extends AnimalFactory
{
    /**
     * @return AnimalInterface
     */
    public function createAnimal(): AnimalInterface
    {
        return new DolphinAdapter(new Dolphin());
    }
}