<?php
declare(strict_types=1);

namespace App;

abstract class Beverage
{
    protected ?string $description = 'Unknown Beverage';

    public function getDescription(): string
    {
        return $this->description;
    }

    public function addDecoration(DecoratorSuperClass $decoration): DecoratorSuperClass
    {
        $decorationClone = clone $decoration;
        $decorationClone->wrappedObj = $this;
        return $decorationClone;
    }

    abstract public function cost(): float;
}