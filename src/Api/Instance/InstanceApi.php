<?php

namespace Jetimob\ZApi\Api\Instance;

use Jetimob\ZApi\Api\AbstractApi;
use Jetimob\Http\Response;
use JsonException;
use Throwable;

class InstanceApi extends AbstractApi
{
    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function getInstanceStatus(): Response
    {
        return $this->mappedGet('status', InstanceResponse::class);
    }

    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function rebootInstance(): Response
    {
        return $this->mappedGet('restart', InstanceResponse::class);
    }

    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function disconnectInstance(): Response
    {
        return $this->mappedGet('disconnect', InstanceResponse::class);
    }
}
