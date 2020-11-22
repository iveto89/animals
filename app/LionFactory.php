<?php

namespace App;

use App\Adapter\AnimalInterface;
use App\Adapter\LionAdapter;
use App\Animal\Lion;

class LionFactory extends AnimalFactory
{
    /**
     * @return AnimalInterface
     */
    public function createAnimal(): AnimalInterface
    {
        return new LionAdapter(new Lion());
    }
}