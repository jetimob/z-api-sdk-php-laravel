<?php

namespace Jetimob\ZApi\Tests\Feature\Instance;

use Jetimob\ZApi\Api\Instance\InstanceResponse;
use Jetimob\ZApi\Api\Instance\InstanceApi;
use Jetimob\ZApi\Tests\AbstractTestCase;
use Jetimob\ZApi\Facade\ZApi;
use Jetimob\Http\Response;

class InstanceApiTest extends AbstractTestCase
{
    protected InstanceApi $api;

    public function setUp(): void
    {
        parent::setUp();
        $this->api = ZApi::instance();
    }

    private function assertResponse(Response $response): void
    {
        $this->assertSame(200, $response->getStatusCode());
        $this->assertInstanceOf(InstanceResponse::class, $response);
    }

    /** @test */
    public function instanceApiShouldExist(): void
    {
        $this->assertNotNull($this->api);
        $this->assertInstanceOf(InstanceApi::class, $this->api);
    }

    /** @test */
    public function getInstanceStatusSuccessfully(): void
    {
        $response = $this->api->getInstanceStatus();

        $this->assertResponse($response);
    }

    /** @test */
    public function shouldRebootInstanceSuccessfully(): void
    {
        $response = $this->api->rebootInstance();

        $this->assertResponse($response);
    }

    /** @test */
    public function shouldDisconnectInstanceSuccessfully(): void
    {
        $response = $this->api->disconnectInstance();

        $this->assertResponse($response);
    }
}
