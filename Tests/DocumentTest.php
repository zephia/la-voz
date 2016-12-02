<?php

namespace Zephia\LaVozFeed\Tests;

use JMS\Serializer\SerializerInterface;
use Zephia\LaVozFeed\Document;
use Zephia\LaVozFeed\Entity\AdBag;

class DocumentTest extends \PHPUnit_Framework_TestCase
{
    public function test_generate_ok()
    {
        $serializer = $this->mockSerializer();
        $serializer->expects(
            new \PHPUnit_Framework_MockObject_Matcher_InvokedCount(1)
        )->method('serialize')->willReturn('<?xml version "1.0" ?>');
        $response = (new Document($serializer))->generate(new AdBag);
        $this->assertEquals('<?xml version "1.0" ?>', $response);
    }

    private function mockSerializer()
    {
        return $this->getMockBuilder(SerializerInterface::class)->getMock();
    }
}