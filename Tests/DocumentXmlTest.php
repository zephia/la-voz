<?php

namespace Zephia\OLXFeed\Tests;

use JMS\Serializer\SerializerBuilder;
use Zephia\LaVozFeed\Document;
use Zephia\LaVozFeed\Entity\Ad;
use Zephia\LaVozFeed\Entity\AdBag;
use Zephia\LaVozFeed\Entity\District;
use Zephia\LaVozFeed\Entity\Email;
use Zephia\LaVozFeed\Entity\Phone;
use Zephia\LaVozFeed\Entity\Picture;
use Zephia\LaVozFeed\Entity\Price;
use Zephia\LaVozFeed\Entity\Vehicle;

class DocumentXmlTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Document
     */
    private $document;

    public function setUp()
    {
        $serializer = SerializerBuilder::create()
            ->addMetadataDir(__DIR__ . '/../resources/config/serializer')
            ->build();
        $this->document = new Document($serializer);
    }

    public function test_basic_xml()
    {
        $xml_string = $this->document->generate((new AdBag));
        $xml_object = simplexml_load_string($xml_string);

        $xml_string_for_comparision = $this->getXml('basic.xml');
        $xml_object_for_comparision = simplexml_load_string($xml_string_for_comparision);

        $this->assertEquals($xml_string, $xml_string_for_comparision);
        $this->assertEquals($xml_object, $xml_object_for_comparision);
    }

    public function test_general_xml()
    {
        $ad = (new Ad)
            ->setId('1')
            ->setCity('Córdoba')
            ->setContent('Nokia 1100')
            ->setDistrict((new District)->setDistrict('Nueva Córdoba')->setZone('centro'))
            ->setEmail((new Email)->setEmail('test@test.com')->setHidden(true))
            ->setModify(new \DateTime('2016-01-01 00:00:00'))
            ->setOperation('venta')
            ->setPayment('contado')
            ->setPhone((new Phone)->setHidden(true)->setPhone('1234567890'))
            ->setPrice((new Price)->setHidden(true)->setValue(1000))
            ->addPicture(
                (new Picture)
                    ->setPicture('http://www.redusers.com/noticias/wp-content/uploads/2015/03/1100Nokia-650x450.jpg')
            )
            ->setRegion('Córdoba')
            ->setStatus('nuevo')
            ->setTitle('Nokia 1100')
            ->setType('6257');
        $xml_string = $this->document->generate((new AdBag)->addAd($ad));
        $xml_object = simplexml_load_string($xml_string);

        $xml_string_for_comparision = $this->getXml('general.xml');
        $xml_object_for_comparision = simplexml_load_string($xml_string_for_comparision);

        $this->assertEquals($xml_string, $xml_string_for_comparision);
        $this->assertEquals($xml_object, $xml_object_for_comparision);
    }

    public function test_vehicle_xml()
    {
        $vehicle = (new Vehicle)
            ->setId('11111111')
            ->setCity('Córdoba')
            ->setColor('champagne')
            ->setConfort('aire acondicionado, stereo dvd, vidrios polarizados')
            ->setContent('Excelente estado, cubiertas nuevas. Llantas de aleación.')
            ->setDistrict((new District)->setDistrict('Valle Escondido'))
            ->setDoors(3)
            ->setEmail((new Email)->setEmail('prueba@lavoz.com')->setHidden(true))
            ->setFuel('Nafta')
            ->setKilometers(24100)
            ->setModel('4043')
            ->setModify(new \DateTime('2013-04-10 15:40:05'))
            ->setOperation('venta')
            ->setPayment('facilidades')
            ->setPhone((new Phone)->setPhone('157665566'))
            ->setPrice((new Price)->setCurrency('U$S')->setHidden(true)->setValue(12000))
            ->addPicture(
                (new Picture)
                    ->setPicture('http://www.sudominio.com/image.jpg')
            )
            ->setReceivesLesserValue('si')
            ->setRegion('Córdoba')
            ->setSecurity('3 luces de stop, blindado, alarma')
            ->setSegment('familiar')
            ->setStatus('usado')
            ->setTitle('Vendo volkswagen fox en buen estado')
            ->setTransmission('Manual')
            ->setType('6324')
            ->setVersion('850')
            ->setYear(2005);
        $xml_string = $this->document->generate((new AdBag)->addAd($vehicle));
        $xml_object = simplexml_load_string($xml_string);

        $xml_string_for_comparision = $this->getXml('vehicle.xml');
        $xml_object_for_comparision = simplexml_load_string($xml_string_for_comparision);

        $this->assertEquals($xml_string, $xml_string_for_comparision);
        $this->assertEquals($xml_object, $xml_object_for_comparision);
    }

    private function getXml($file_name)
    {
        return file_get_contents(__DIR__ . '/xml_samples/' . $file_name);
    }
}