<?php
declare(strict_types=1);

namespace App;

/**
 * Class Beverage
 *
 * Represents an abstract Beverage class.
 */
abstract class Beverage
{
    /**
     * @var string|null The description of the beverage.
     */
    protected ?string $description = 'Unknown Beverage';

    /**
     * Get the description of the beverage.
     *
     * @return string The description of the beverage.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Add a decoration to the beverage.
     *
     * @param DecoratorSuperClass $decoration The decoration to add.
     * @return DecoratorSuperClass The decorated beverage.
     */
    public function addDecoration(DecoratorSuperClass $decoration): DecoratorSuperClass
    {
        $decorationClone = clone $decoration;
        $decorationClone->wrappedObj = $this;
        return $decorationClone;
    }

    /**
     * Calculate the cost of the beverage.
     *
     * @return float The cost of the beverage.
     */
    abstract public function cost(): float;
}