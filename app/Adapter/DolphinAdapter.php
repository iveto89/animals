<?php

namespace App\Adapter;

use App\Animal\Dolphin;

class DolphinAdapter implements AnimalInterface
{
    /** @var Dolphin */
    protected Dolphin $dolphin;

    /**
     * BeeAdapter constructor.
     * @param Dolphin $dolphin
     */
    public function __construct(Dolphin $dolphin)
    {
        $this->dolphin = $dolphin;
    }

    public function doAction(): void
    {
        $this->dolphin->sleep();
        $this->dolphin->swim();
    }
}