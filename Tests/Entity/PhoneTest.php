<?php

namespace Zephia\LaVozFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\Phone;
use Zephia\LaVozFeed\Exception\LogicException;

class PhoneTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Phone::class, (new Phone));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Phone)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $ad = new Phone;
        $this->assertEquals($ad, $ad->setPhone('test_phone'));
        $this->assertEquals('test_phone', $ad->getPhone());
        $this->assertEquals($ad, $ad->setHidden(true));
        $this->assertTrue($ad->isHidden());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Phone', 'phone'],
        ];
    }
}
