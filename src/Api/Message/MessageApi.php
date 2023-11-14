<?php

namespace Jetimob\ZApi\Api\Message;

use Jetimob\ZApi\Entity\MessageImage;
use Jetimob\ZApi\Entity\MessageVideo;
use Jetimob\ZApi\Entity\MessageLink;
use Jetimob\ZApi\Api\AbstractApi;
use Jetimob\ZApi\Entity\Message;
use GuzzleHttp\RequestOptions;
use Jetimob\Http\Response;
use JsonException;
use Throwable;

class MessageApi extends AbstractApi
{
    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function sendTextMessage(Message $message): Response
    {
        return $this->mappedPost('send-text', MessageResponse::class, [
            RequestOptions::JSON => $message->toArray()
        ]);
    }

    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function sendTextWithLinkMessage(MessageLink $message): Response
    {
        return $this->mappedPost('send-link', MessageResponse::class, [
            RequestOptions::JSON => $message->toArray()
        ]);
    }

    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function sendImageWithMessage(MessageImage $message): Response
    {
        return $this->mappedPost('send-image', MessageResponse::class, [
            RequestOptions::JSON => $message->toArray()
        ]);
    }

    /**
     * @throws Throwable
     * @throws JsonException
     */
    public function sendVideoWithMessage(MessageVideo $message): Response
    {
        return $this->mappedPost('send-video', MessageResponse::class, [
            RequestOptions::JSON => $message->toArray()
        ]);
    }
}
