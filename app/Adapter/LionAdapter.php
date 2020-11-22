<?php

namespace App\Adapter;

use App\Animal\Lion;

class LionAdapter implements AnimalInterface
{
    /** @var Lion */
    protected Lion $lion;

    /**
     * BeeAdapter constructor.
     * @param Lion $lion
     */
    public function __construct(Lion $lion)
    {
        $this->lion = $lion;
    }

    public function doAction(): void
    {
        $this->lion->sleep();
        $this->lion->roar();
        $this->lion->eat();
    }
}