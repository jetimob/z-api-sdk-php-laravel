<?php

namespace Jetimob\ZApi\Tests\Feature\Queue;

use Jetimob\ZApi\Api\Queue\QueueResponse;
use Jetimob\ZApi\Tests\AbstractTestCase;
use Jetimob\ZApi\Api\Queue\QueueApi;
use Jetimob\ZApi\Facade\ZApi;
use Jetimob\Http\Response;

class QueueApiTest extends AbstractTestCase
{
    protected QueueApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = ZApi::queue();
    }

    private function assertResponse(Response $response): void
    {
        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(QueueResponse::class, $response);
    }

    /** @test */
    public function instanceApiShouldExist(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(QueueApi::class, $this->api);
    }

    /** @test */
    public function getQueueSuccessfully(): void
    {
        $response = $this->api->getQueue();

        $this->assertResponse($response);
    }

    /** @test */
    public function getQueueCountSuccessfully(): void
    {
        $response = $this->api->getQueueCount();

        $this->assertResponse($response);
    }
}
