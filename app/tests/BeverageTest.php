<?php

namespace Tests;

use App\Beverage;
use PHPUnit\Framework\TestCase;
use App\DecoratorSuperClass;

/**
 * Class BeverageTest
 *
 * Test case for the Beverage class.
 */
class BeverageTest extends TestCase
{
    /**
     * Test that Beverage is an abstract class.
     *
     * @return void
     */
    public function testBeverageClassIsAbstract(): void
    {
        $reflectionClass = new \ReflectionClass(Beverage::class);

        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test that getDescription() method returns the description of the beverage.
     *
     * @return void
     */
    public function testGetDescriptionReturnsBeverageDescription(): void
    {
        $beverage = $this->getMockForAbstractClass(Beverage::class);
        $description = $beverage->getDescription();

        // assert that the returned description matches the expected description
        $this->assertSame('Unknown Beverage', $description);
    }

    /**
     * Test that addDecoration() method adds the decoration to the beverage.
     *
     * @return void
     */
    public function testAddDecorationAddsDecorationToBeverage(): void
    {
        $beverage = $this->getMockForAbstractClass(Beverage::class);
        $decoration = $this->createMock(DecoratorSuperClass::class);

        $decoratedBeverage = $beverage->addDecoration($decoration);
        $reflection = new \ReflectionObject($decoratedBeverage);

        // Assert that the returned decorated beverage is an instance of DecoratorSuperClass
        $this->assertInstanceOf(DecoratorSuperClass::class, $decoratedBeverage);
        // Assert that the wrappedObj property of the decoration is set to the beverage instance
        $this->assertSame($beverage, $decoratedBeverage->wrappedObj);
    }

    /**
     * Test that the cost() method is abstract in Beverage.
     *
     * @return void
     */
    public function testCostMethodIsAbstract(): void
    {
        $reflectionClass = new \ReflectionClass(Beverage::class);
        $costMethod = $reflectionClass->getMethod('cost');

        $this->assertTrue($costMethod->isAbstract());
    }
}