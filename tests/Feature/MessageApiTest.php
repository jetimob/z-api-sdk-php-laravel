<?php

namespace Jetimob\ZApi\Tests\Feature;

use Jetimob\ZApi\Api\Message\MessageApi;
use Jetimob\ZApi\Entity\Message;
use Jetimob\ZApi\Entity\MessageLink;
use Jetimob\ZApi\Facade\ZApi;
use Jetimob\ZApi\Tests\AbstractTestCase;

class MessageApiTest extends AbstractTestCase
{
    protected MessageApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = ZApi::message();
    }

    /** @test */
    public function messageApiShouldExist(): void
    {
        $this->assertInstanceOf(MessageApi::class, $this->api);
    }

    /** @test */
    public function sendTextMessageShouldSuccess(): void
    {
        $response = $this->api->sendTextMessage(Message::new('5551996550359', 'teste da Z-API'));
        $this->assertSame(200, $response->getStatusCode());
        dump($response);
    }

    /** @test */
    public function sendTextWithLinkMessageShouldSuccess(): void
    {
        $response = $this->api->sendTextWithLinkMessage(MessageLink::new(
            '5551996550359',
            'teste da Z-API',
            'TESTE',
            'https://ac-landing-pages-user-uploads-production.s3.amazonaws.com/0000053730/ae361e8e-dbea-4a4f-a121-e0a04481de1d.png',
            'https://app.jetimob.com/',
            'teste de link z-api',
        ));

        $this->assertSame(200, $response->getStatusCode());
        dump($response);
    }
}
