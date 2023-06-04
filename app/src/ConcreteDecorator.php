<?php
declare(strict_types=1);

namespace App;

class ConcreteDecorator extends DecoratorSuperClass
{
    private float $decoratorCost;

    public function __construct(string $decoratorDescription, float $decoratorCost)
    {
        $this->description = $decoratorDescription;
        $this->decoratorCost = $decoratorCost;
    }

    public function cost(): float
    {
        return $this->decoratorCost + $this->wrappedObj->cost();
    }
}