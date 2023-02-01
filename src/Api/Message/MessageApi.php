<?php

namespace Jetimob\ZApi\Api\Message;

use GuzzleHttp\RequestOptions;
use Jetimob\Http\Response;
use Jetimob\ZApi\Api\AbstractApi;
use Jetimob\ZApi\Entity\Message;
use JsonException;
use Throwable;

class MessageApi extends AbstractApi
{
    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function sendMessage(Message $message): Response
    {
        return $this->mappedPost('send-text', MessageResponse::class, [
            RequestOptions::JSON => $message->toArray()
        ]);
    }
}
