<?php
declare(strict_types=1);

namespace App;

abstract class ComponentSuperClass extends Beverage
{
    protected ?string $description = null;

    public function getDescription(): string
    {
        return '<h2>' . $this->description .
            "</h2>\n<ul>" . PHP_EOL;
    }

    abstract public function cost(): float;
}