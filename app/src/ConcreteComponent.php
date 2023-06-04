<?php
declare(strict_types=1);

namespace App;

class ConcreteComponent extends ComponentSuperClass
{
    private float $componentCost;

    public function __construct(string $componentDescription, float $componentCost)
    {
        $this->description = $componentDescription;
        $this->componentCost = $componentCost;
    }

    public function cost(): float
    {
        return $this->componentCost;
    }
}