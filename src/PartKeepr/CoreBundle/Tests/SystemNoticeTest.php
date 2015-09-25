<?php
namespace PartKeepr\CoreBundle\Tests;

use Dunglas\ApiBundle\Api\IriConverter;
use Liip\FunctionalTestBundle\Test\WebTestCase;

class SystemNoticeTest extends WebTestCase
{
    public function setUp()
    {
        $this->loadFixtures(array());
    }

    public function testSystemNotices()
    {
        $client = static::makeClient(true);

        $systemNoticeService = $this->getContainer()->get("partkeepr.systemnoticeservice");
        $notice = $systemNoticeService->createUniqueSystemNotice("FOO", "BAR", "DING");

        /**
         * @var $iriConverter IriConverter
         */
        $iriConverter = $this->getContainer()->get("api.iri_converter");

        $iri = $iriConverter->getIriFromItem($notice);
        $ackIri = $iri."/acknowledge";


        $client->request(
            'GET',
            $iri
        );

        $response = json_decode($client->getResponse()->getContent());

        $this->assertEquals("FOO", $response->type);
        $this->assertEquals("BAR", $response->title);
        $this->assertEquals("DING", $response->description);
        $this->assertEquals(false, $response->acknowledged);

        $client->request(
            'PUT',
            $ackIri
        );

        $client->request(
            'GET',
            $iri
        );

        $response = json_decode($client->getResponse()->getContent());
        $this->assertEquals(true, $response->acknowledged);
    }
}