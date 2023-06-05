<?php

namespace Tests;

use App\ConcreteDecorator;
use App\ConcreteComponent;
use PHPUnit\Framework\TestCase;


/**
 * Class ConcreteDecoratorTest
 *
 * Test case for the ConcreteDecorator class.
 */
class ConcreteDecoratorTest extends TestCase
{
    /**
     * Test the getDescription() method of ConcreteDecorator.
     *
     * @return void
     */
    public function testGetDescription(): void
    {
        $description = 'Test Decorator';
        $cost = 5.99;

        $component = new ConcreteComponent('Component', 10.99);
        $decorator = new ConcreteDecorator($description, $cost);
        $decoratedComponent = $component->addDecoration($decorator);

        $decoratedDescription = $decoratedComponent->getDescription();

        // Assert that the description contains the component and decorator descriptions
        $this->assertStringContainsString('Component', $decoratedDescription);
        $this->assertStringContainsString($description, $decoratedDescription);
    }

    /**
     * Test the cost() method of ConcreteDecorator.
     *
     * @return void
     */
    public function testCost(): void
    {
        $description = 'Test Decorator';
        $cost = 5.99;

        $component = new ConcreteComponent('Component', 10.99);
        $decorator = new ConcreteDecorator($description, $cost);
        $decoratedComponent = $component->addDecoration($decorator);

        $totalCost = $decoratedComponent->cost();

        // Assert that the total cost is the sum of the component cost and decorator cost
        $this->assertEquals(16.98, $totalCost);
    }
}