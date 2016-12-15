<?php

namespace Zephia\LaVozFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\Picture;
use Zephia\LaVozFeed\Exception\LogicException;

class PictureTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Picture::class, (new Picture));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Picture)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $picture = new Picture;
        $this->assertEquals($picture, $picture->setPicture('test_picture'));
        $this->assertEquals('test_picture', $picture->getPicture());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Picture', 'picture'],
        ];
    }
}
