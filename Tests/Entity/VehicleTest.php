<?php

namespace Zephia\LaVozFeed\Tests\Entity;

use Zephia\LaVozFeed\Entity\Ad;
use Zephia\LaVozFeed\Entity\District;
use Zephia\LaVozFeed\Entity\Price;
use Zephia\LaVozFeed\Entity\Vehicle;
use Zephia\LaVozFeed\Entity\Email;
use Zephia\LaVozFeed\Entity\Phone;
use Zephia\LaVozFeed\Exception\LogicException;

class VehicleTest extends \PHPUnit_Framework_TestCase
{
    public function test_constructor_ok()
    {
        $this->assertInstanceOf(Vehicle::class, (new Vehicle));
        $this->assertInstanceOf(Ad::class, (new Vehicle));
    }

    /**
     * @dataProvider requiredValueDataProvider
     */
    public function test_empty_required_getters($getter, $attribute)
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('Missing required attribute: ' . $attribute);
        (new Vehicle)->{'get' . $getter}();
    }

    public function test_getters_and_setters_ok()
    {
        $vehicle = new Vehicle;
        $test_email = new Email;
        $test_phone = new Phone;
        $test_price = new Price;
        $test_district = new District;
        $this->assertEquals($vehicle, $vehicle->setId('test_id'));
        $this->assertEquals('test_id', $vehicle->getId());
        $this->assertEquals($vehicle, $vehicle->setCity('test_city'));
        $this->assertEquals('test_city', $vehicle->getCity());
        $this->assertEquals($vehicle, $vehicle->setColor('test_color'));
        $this->assertEquals('test_color', $vehicle->getColor());
        $this->assertEquals($vehicle, $vehicle->setConfort('test_confort'));
        $this->assertEquals('test_confort', $vehicle->getConfort());
        $this->assertEquals($vehicle, $vehicle->setContent('test_content'));
        $this->assertEquals('test_content', $vehicle->getContent());
        $this->assertEquals($vehicle, $vehicle->setDistrict($test_district));
        $this->assertEquals($test_district, $vehicle->getDistrict());
        $this->assertEquals($vehicle, $vehicle->setDoors(3));
        $this->assertEquals(3, $vehicle->getDoors());
        $this->assertEquals($vehicle, $vehicle->setEmail($test_email));
        $this->assertEquals($test_email, $vehicle->getEmail());
        $this->assertEquals($vehicle, $vehicle->setFuel('test_fuel'));
        $this->assertEquals('test_fuel', $vehicle->getFuel());
        $this->assertEquals($vehicle, $vehicle->setKilometers(1000));
        $this->assertEquals(1000, $vehicle->getKilometers());
        $this->assertEquals($vehicle, $vehicle->setModel('test_model'));
        $this->assertEquals('test_model', $vehicle->getModel());
        $this->assertEquals($vehicle, $vehicle->setModify(new \DateTime('1970-1-1')));
        $this->assertEquals((new \DateTime('1970-1-1')), $vehicle->getModify());
        $this->assertEquals($vehicle, $vehicle->setOperation('test_operation'));
        $this->assertEquals('test_operation', $vehicle->getOperation());
        $this->assertEquals($vehicle, $vehicle->setPayment('test_payment'));
        $this->assertEquals('test_payment', $vehicle->getPayment());
        $this->assertEquals($vehicle, $vehicle->setPhone($test_phone));
        $this->assertEquals($test_phone, $vehicle->getPhone());
        $this->assertEquals($vehicle, $vehicle->setPrice($test_price));
        $this->assertEquals($test_price, $vehicle->getPrice());
        $this->assertEquals($vehicle, $vehicle->setReceivesLesserValue('test_receives_lesser_value'));
        $this->assertEquals('test_receives_lesser_value', $vehicle->getReceivesLesserValue());
        $this->assertEquals($vehicle, $vehicle->setRegion('test_region'));
        $this->assertEquals('test_region', $vehicle->getRegion());
        $this->assertEquals($vehicle, $vehicle->setSecurity('test_security'));
        $this->assertEquals('test_security', $vehicle->getSecurity());
        $this->assertEquals($vehicle, $vehicle->setSegment('test_segment'));
        $this->assertEquals('test_segment', $vehicle->getSegment());
        $this->assertEquals($vehicle, $vehicle->setStatus('test_status'));
        $this->assertEquals('test_status', $vehicle->getStatus());
        $this->assertEquals($vehicle, $vehicle->setTitle('test_title'));
        $this->assertEquals('test_title', $vehicle->getTitle());
        $this->assertEquals($vehicle, $vehicle->setTransmission('test_transmission'));
        $this->assertEquals('test_transmission', $vehicle->getTransmission());
        $this->assertEquals($vehicle, $vehicle->setType('test_type'));
        $this->assertEquals('test_type', $vehicle->getType());
        $this->assertEquals($vehicle, $vehicle->setVersion('test_version'));
        $this->assertEquals('test_version', $vehicle->getVersion());
        $this->assertEquals($vehicle, $vehicle->setYear(2016));
        $this->assertEquals(2016, $vehicle->getYear());
    }

    public function requiredValueDataProvider()
    {
        return [
            ['Id', 'id'],
            ['City', 'city'],
            ['Content', 'content'],
            ['Email', 'email'],
            ['Model', 'model'],
            ['Modify', 'modify'],
            ['Operation', 'operation'],
            ['Phone', 'phone'],
            ['Pictures', 'pictures'],
            ['Price', 'price'],
            ['Region', 'region'],
            ['Status', 'status'],
            ['Title', 'title'],
            ['Type', 'type'],
            ['Year', 'year'],
        ];
    }
}
