<?php

namespace Zephia\OLXFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\Ad;
use Zephia\LaVozFeed\Entity\AdBag;

class AdBagTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $adBag = new AdBag;
        $this->assertInstanceOf(AdBag::class, $adBag);
    }

    public function test_setters_and_getters()
    {
        $adBag = new AdBag;
        $this->assertEquals($adBag, $adBag->setAds([]));
        $this->assertEquals([], $adBag->getAds());
    }

    public function test_add_ad_ok()
    {
        $adBag = new AdBag;
        $this->assertEquals(0, count($adBag->getAds()));
        $ad = new Ad;
        $this->assertEquals($adBag, $adBag->addAd($ad));
        $this->assertEquals(1, count($adBag->getAds()));
    }
}
