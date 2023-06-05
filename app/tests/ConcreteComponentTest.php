<?php

namespace Tests;

use App\ConcreteComponent;
use PHPUnit\Framework\TestCase;


/**
 * Class ConcreteComponentTest
 *
 * Test case for the ConcreteComponent class.
 */
class ConcreteComponentTest extends TestCase
{
    /**
     * Test the getDescription() method of ConcreteComponent.
     *
     * @return void
     */
    public function testGetDescription(): void
    {
        $description = 'Test Component';
        $cost = 10.99;

        $component = new ConcreteComponent($description, $cost);
        $componentDescription = $component->getDescription();

        // Assert that the description contains the expected HTML tags and the component description
        $this->assertStringContainsString('<h2>', $componentDescription);
        $this->assertStringContainsString('</h2>', $componentDescription);
        $this->assertStringContainsString('<ul>', $componentDescription);
        $this->assertStringContainsString($description, $componentDescription);
    }

    /**
     * Test the cost() method of ConcreteComponent.
     *
     * @return void
     */
    public function testCost(): void
    {
        $description = 'Test Component';
        $cost = 10.99;

        $component = new ConcreteComponent($description, $cost);
        $componentCost = $component->cost();

        // Assert that the cost matches the expected value
        $this->assertEquals($cost, $componentCost);
    }
}