<?php

namespace Zephia\LaVozFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\Price;

class PriceTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Price::class, (new Price));
    }

    public function test_getters_and_setters_ok()
    {
        $price = new Price;
        $this->assertEquals($price, $price->setCurrency('test_currency'));
        $this->assertEquals('test_currency', $price->getCurrency());
        $this->assertEquals($price, $price->setHidden(true));
        $this->assertTrue($price->isHidden());
        $this->assertEquals($price, $price->setValue(1.0));
        $this->assertEquals(1.0, $price->getValue());
    }
}
