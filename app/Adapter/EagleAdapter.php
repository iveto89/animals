<?php

namespace App\Adapter;

use App\Animal\Eagle;

class EagleAdapter implements AnimalInterface
{
    /** @var Eagle */
    protected Eagle $eagle;

    /**
     * BeeAdapter constructor.
     * @param Eagle $eagle
     */
    public function __construct(Eagle $eagle)
    {
        $this->eagle = $eagle;
    }

    public function doAction(): void
    {
        $this->eagle->sleep();
        $this->eagle->fly();
        $this->eagle->eat();
    }
}