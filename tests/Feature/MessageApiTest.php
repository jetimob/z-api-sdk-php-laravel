<?php

namespace Jetimob\ZApi\Tests\Feature;

use Jetimob\ZApi\Api\Message\MessageApi;
use Jetimob\ZApi\Entity\Message;
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
    public function sendMessageShouldSuccess(): void
    {
        $response = $this->api->sendMessage(Message::new('5551996550359', 'teste da Z-API'));
        $this->assertSame(200, $response->getStatusCode());
        dump($response);
    }
}
