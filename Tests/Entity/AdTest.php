<?php

namespace Zephia\LaVozFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\Ad;
use Zephia\LaVozFeed\Entity\Email;
use Zephia\LaVozFeed\Entity\Phone;
use Zephia\LaVozFeed\Exception\LogicException;

class AdTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Ad::class, (new Ad));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Ad)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $ad = new Ad;
        $test_email = new Email;
        $test_phone = new Phone;
        $this->assertEquals($ad, $ad->setId('test_id'));
        $this->assertEquals('test_id', $ad->getId());
        $this->assertEquals($ad, $ad->setAdsType('test_ads_type'));
        $this->assertEquals('test_ads_type', $ad->getAdsType());
        $this->assertEquals($ad, $ad->setCity('test_city'));
        $this->assertEquals('test_city', $ad->getCity());
        $this->assertEquals($ad, $ad->setContent('test_content'));
        $this->assertEquals('test_content', $ad->getContent());
        $this->assertEquals($ad, $ad->setEmail($test_email));
        $this->assertEquals($test_email, $ad->getEmail());
        $this->assertEquals($ad, $ad->setModify(new \DateTime('1970-1-1')));
        $this->assertEquals((new \DateTime('1970-1-1')), $ad->getModify());
        $this->assertEquals($ad, $ad->setOperation('test_operation'));
        $this->assertEquals('test_operation', $ad->getOperation());
        $this->assertEquals($ad, $ad->setPayment('test_payment'));
        $this->assertEquals('test_payment', $ad->getPayment());
        $this->assertEquals($ad, $ad->setPhone($test_phone));
        $this->assertEquals($test_phone, $ad->getPhone());
        $this->assertEquals($ad, $ad->setPrice(1.0));
        $this->assertEquals(1.0, $ad->getPrice());
        $this->assertEquals($ad, $ad->setRegion('test_region'));
        $this->assertEquals('test_region', $ad->getRegion());
        $this->assertEquals($ad, $ad->setStatus('test_status'));
        $this->assertEquals('test_status', $ad->getStatus());
        $this->assertEquals($ad, $ad->setTitle('test_title'));
        $this->assertEquals('test_title', $ad->getTitle());
        $this->assertEquals($ad, $ad->setType('test_type'));
        $this->assertEquals('test_type', $ad->getType());
        $this->assertEquals($ad, $ad->setPayment('test_payment'));
        $this->assertEquals('test_payment', $ad->getPayment());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Id', 'id'],
            ['AdsType', 'ads_type'],
            ['City', 'city'],
            ['Content', 'content'],
            ['Email', 'email'],
            ['Modify', 'modify'],
            ['Operation', 'operation'],
            ['Phone', 'phone'],
            ['Pictures', 'pictures'],
            ['Price', 'price'],
            ['Region', 'region'],
            ['Status', 'status'],
            ['Title', 'title'],
            ['Type', 'type'],
        ];
    }
}
