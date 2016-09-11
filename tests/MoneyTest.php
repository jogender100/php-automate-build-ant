<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Tebe\Money;

class MoneyTest extends TestCase
{

    public function testCanBeNegated()
    {
        // Arrange
        $a = new Money(1);

        // Act
        $b = $a->negate();

        // Assert
        $this->assertEquals(-1, $b->getAmount());
    }

    public function testFalse()
    {
        $this->assertEquals(0, 1);
    }

}