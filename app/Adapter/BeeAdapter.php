<?php

namespace App\Adapter;

use App\Animal\Bee;

class BeeAdapter implements AnimalInterface
{
    /** @var Bee */
    protected Bee $bee;

    /**
     * BeeAdapter constructor.
     * @param Bee $bee
     */
    public function __construct(Bee $bee)
    {
        $this->bee = $bee;
    }

    public function doAction(): void
    {
        $this->bee->sleep();
        $this->bee->fly();
    }
}