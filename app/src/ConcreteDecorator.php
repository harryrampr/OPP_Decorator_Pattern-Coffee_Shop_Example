<?php
declare(strict_types=1);

namespace App;

/**
 * Class ConcreteDecorator
 *
 * Represents a concrete implementation of the DecoratorSuperClass.
 */
class ConcreteDecorator extends DecoratorSuperClass
{
    /**
     * @var float The cost of the decorator.
     */
    private float $decoratorCost;

    /**
     * ConcreteDecorator constructor.
     *
     * @param string $decoratorDescription The description of the decorator.
     * @param float $decoratorCost         The cost of the decorator.
     */
    public function __construct(string $decoratorDescription, float $decoratorCost)
    {
        $this->description = $decoratorDescription;
        $this->decoratorCost = $decoratorCost;
    }

    /**
     * Calculate the cost of the decorator.
     *
     * @return float The cost of the decorator.
     */
    public function cost(): float
    {
        return $this->decoratorCost + $this->wrappedObj->cost();
    }
}