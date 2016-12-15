<?php

namespace Zephia\LaVozFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\Email;
use Zephia\LaVozFeed\Exception\LogicException;

class EmailTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Email::class, (new Email));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Email)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $ad = new Email;
        $this->assertEquals($ad, $ad->setEmail('test_email'));
        $this->assertEquals('test_email', $ad->getEmail());
        $this->assertEquals($ad, $ad->setHidden(true));
        $this->assertTrue($ad->isHidden());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Email', 'email'],
        ];
    }
}
