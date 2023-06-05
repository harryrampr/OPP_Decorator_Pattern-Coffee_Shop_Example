<?php
declare(strict_types=1);

namespace App;

/**
 * Class DecoratorSuperClass
 *
 * Represents an abstract DecoratorSuperClass class that extends the Beverage class.
 */
abstract class DecoratorSuperClass extends Beverage
{
    /**
     * @var Beverage The wrapped object being decorated.
     */
    public Beverage $wrappedObj;

    /**
     * Calculate the cost of the decorator.
     *
     * @return float The cost of the decorator.
     */
    abstract public function cost(): float;

    /**
     * Get the description of the decorator.
     *
     * @return string The description of the decorator.
     */
    public function getDescription(): string
    {
        return $this->wrappedObj->getDescription() .
            '<li>' . $this->description . '</li>' . PHP_EOL;
    }
}