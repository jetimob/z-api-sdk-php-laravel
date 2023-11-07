<?php

namespace Jetimob\ZApi\Api\Queue;

use Jetimob\ZApi\Api\AbstractApi;
use Jetimob\Http\Response;
use JsonException;
use Throwable;

class QueueApi extends AbstractApi
{
    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function getQueue(): Response
    {
        return $this->mappedGet('queue', QueueResponse::class);
    }

    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function getQueueCount(): Response
    {
        return $this->mappedGet('queue/count', QueueResponse::class);
    }
}
