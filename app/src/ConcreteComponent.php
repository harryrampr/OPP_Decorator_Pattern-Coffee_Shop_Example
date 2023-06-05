<?php
declare(strict_types=1);

namespace App;

/**
 * Class ConcreteComponent
 *
 * Represents a concrete implementation of the ComponentSuperClass.
 */
class ConcreteComponent extends ComponentSuperClass
{
    /**
     * @var float The cost of the component.
     */
    private float $componentCost;

    /**
     * ConcreteComponent constructor.
     *
     * @param string $componentDescription The description of the component.
     * @param float $componentCost         The cost of the component.
     */
    public function __construct(string $componentDescription, float $componentCost)
    {
        $this->description = $componentDescription;
        $this->componentCost = $componentCost;
    }

    /**
     * Calculate the cost of the component.
     *
     * @return float The cost of the component.
     */
    public function cost(): float
    {
        return $this->componentCost;
    }
}