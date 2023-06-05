<?php

namespace Tests;

use App\DecoratorSuperClass;
use App\ConcreteComponent;
use PHPUnit\Framework\TestCase;

/**
 * Class DecoratorSuperClassTest
 *
 * Test case for the DecoratorSuperClass class.
 */
class DecoratorSuperClassTest extends TestCase
{
    /**
     * Test the getDescription() method of DecoratorSuperClass.
     *
     * @return void
     */
    public function testGetDescription(): void
    {
        // Create a mock object for the wrapped Beverage
        $wrappedObj = $this->createMock(ConcreteComponent::class);
        $wrappedObj->method('getDescription')
            ->willReturn('Wrapped Beverage');

        $description = 'Test Decorator';

        // Make DecoratorSuperClass description property accessible
        $class = new \ReflectionClass('App\DecoratorSuperClass');
        $myProtectedProperty = $class->getProperty('description');
        $myProtectedProperty->setAccessible(true);


        // Create an instance of the DecoratorSuperClass with the mock wrapped object
        $decorator = $this->getMockForAbstractClass(DecoratorSuperClass::class);
        $decorator->wrappedObj = $wrappedObj;
        $myProtectedProperty->setValue($decorator, $description);

        $decoratedDescription = $decorator->getDescription();

        // Assert that the description contains the wrapped beverage description and decorator description
        $this->assertStringContainsString('Wrapped Beverage', $decoratedDescription);
        $this->assertStringContainsString($description, $decoratedDescription);
    }

    /**
     * Test that cost() method is abstract in DecoratorSuperClass.
     *
     * @return void
     */
    public function testCostIsAbstract(): void
    {
        $reflectionClass = new \ReflectionClass(DecoratorSuperClass::class);
        $method = $reflectionClass->getMethod('cost');

        // Assert that the cost() method is abstract
        $this->assertTrue($method->isAbstract());
    }
}