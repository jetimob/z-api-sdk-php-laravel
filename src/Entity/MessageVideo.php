<?php

namespace Jetimob\ZApi\Entity;

class MessageVideo extends Entity
{
    protected string $phone;
    protected string $video;
    protected ?string $caption;
    protected ?int $delayMessage = null;

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return MessageVideo
     */
    public function setPhone(string $phone): MessageVideo
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * @param string $video
     * @return MessageVideo
     */
    public function setVideo(string $video): MessageVideo
    {
        $this->video = $video;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     * @return MessageVideo
     */
    public function setCaption(?string $caption): MessageVideo
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDelayMessage(): ?int
    {
        return $this->delayMessage;
    }

    /**
     * @param int|null $delayMessage
     * @return MessageVideo
     */
    public function setDelayMessage(?int $delayMessage): MessageVideo
    {
        $this->delayMessage = $delayMessage;
        return $this;
    }

    public static function new(string $phone, string $caption, string $video, ?int $delayMessage = null): self
    {
        return (new static())
            ->setVideo($video)
            ->setPhone($phone)
            ->setCaption($caption)
            ->setDelayMessage($delayMessage);
    }
}
