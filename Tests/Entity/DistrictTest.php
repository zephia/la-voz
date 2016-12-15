<?php

namespace Zephia\LaVozFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\District;
use Zephia\LaVozFeed\Exception\LogicException;

class DistrictTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(District::class, (new District));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new District)->{'get' . $getter}();
    }

    public function requiredValueDataProvider()
    {
        return [
            ['District', 'district'],
        ];
    }
}
