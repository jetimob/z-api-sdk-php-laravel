<?php

namespace Jetimob\ZApi\Tests\Feature\Message;

use Jetimob\ZApi\Api\Message\MessageResponse;
use Jetimob\ZApi\Tests\AbstractTestCase;
use Jetimob\ZApi\Api\Message\MessageApi;
use Jetimob\ZApi\Entity\MessageImage;
use Jetimob\ZApi\Entity\MessageVideo;
use Jetimob\ZApi\Entity\MessageLink;
use Jetimob\ZApi\Entity\Message;
use Jetimob\ZApi\Facade\ZApi;
use Jetimob\Http\Response;

class MessageApiTest extends AbstractTestCase
{
    protected MessageApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = ZApi::message();
    }

    private function assertResponse(Response $response): void
    {
        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(MessageResponse::class, $response);
    }

    /** @test */
    public function messageApiShouldExist(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(MessageApi::class, $this->api);
    }

    /** @test */
    public function sendTextMessageShouldSuccess(): void
    {
        $response = $this->api->sendTextMessage(Message::new('5551996550359', 'teste da Z-API'));

        $this->assertResponse($response);
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

        $this->assertResponse($response);
    }

    /** @test */
    public function sendImageMessageShouldSuccess(): void
    {
        $response = $this->api->sendImageWithMessage(MessageImage::new(
            '5551996550359',
            'teste da Z-API',
            'https://rocketimob.com.br/img/parceiros/site-para-imobiliaria-rocket-imb-parceiros-crm-jetimob.png',
        ));

        $this->assertResponse($response);
    }

    /** @test */
    public function sendVideoMessageShouldSuccess(): void
    {
        $response = $this->api->sendVideoWithMessage(MessageVideo::new(
            '5551996550359',
            'teste da Z-API',
            'http://techslides.com/demos/sample-videos/small.mp4',
        ));

        $this->assertResponse($response);
    }
}
