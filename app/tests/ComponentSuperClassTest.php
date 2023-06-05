<?php

namespace Tests;

use App\ComponentSuperClass;
use PHPUnit\Framework\TestCase;

/**
 * Class ComponentSuperClassTest
 *
 * Test case for the ComponentSuperClass class.
 */
class ComponentSuperClassTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that ComponentSuperClass is an abstract class.
     *
     * @return void
     */
    public function testComponentSuperClassIsAbstract(): void
    {
        $reflectionClass = new \ReflectionClass(ComponentSuperClass::class);

        $this->assertTrue($reflectionClass->isAbstract());
    }

    /**
     * Test the getDescription() method of ComponentSuperClass.
     *
     * @return void
     */
    public function testGetDescription(): void
    {
        $mockComponent = $this->getMockForAbstractClass(ComponentSuperClass::class);
        $description = $mockComponent->getDescription();

        // Assert that the description contains the expected HTML tags
        $this->assertStringContainsString('<h2>', $description);
        $this->assertStringContainsString('</h2>', $description);
        $this->assertStringContainsString('<ul>', $description);
    }


    /**
     * Test that the cost() method is abstract in ComponentSuperClass.
     *
     * @return void
     */
    public function testCostMethodIsAbstract(): void
    {
        $reflectionClass = new \ReflectionClass(ComponentSuperClass::class);
        $costMethod = $reflectionClass->getMethod('cost');

        $this->assertTrue($costMethod->isAbstract());
    }

}