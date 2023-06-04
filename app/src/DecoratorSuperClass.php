<?php
declare(strict_types=1);

namespace App;

abstract class DecoratorSuperClass extends Beverage
{
    public Beverage $wrappedObj;

    abstract public function cost(): float;

    public function getDescription(): string
    {
        return $this->wrappedObj->getDescription() .
            '<li>' . $this->description . '</li>' . PHP_EOL;
    }
}