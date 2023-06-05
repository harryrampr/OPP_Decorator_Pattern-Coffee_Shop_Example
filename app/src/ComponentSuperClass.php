<?php
declare(strict_types=1);

namespace App;

/**
 * Class ComponentSuperClass
 *
 * Represents an abstract ComponentSuperClass class that extends the Beverage class.
 */
abstract class ComponentSuperClass extends Beverage
{
    /**
     * @var string|null The description of the component.
     */
    protected ?string $description = null;

    /**
     * Get the description of the component.
     *
     * @return string The description of the component.
     */
    public function getDescription(): string
    {
        return '<h2>' . $this->description . "</h2>\n<ul>" . PHP_EOL;
    }

    /**
     * Calculate the cost of the component.
     *
     * @return float The cost of the component.
     */
    abstract public function cost(): float;
}