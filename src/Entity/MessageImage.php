<?php

namespace Jetimob\ZApi\Entity;

class MessageImage extends Entity
{
    protected string $phone;
    protected string $image;
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
     * @return MessageImage
     */
    public function setPhone(string $phone): MessageImage
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return MessageImage
     */
    public function setImage(string $image): MessageImage
    {
        $this->image = $image;
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
     * @return MessageImage
     */
    public function setCaption(?string $caption): MessageImage
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
     * @return MessageImage
     */
    public function setDelayMessage(?int $delayMessage): MessageImage
    {
        $this->delayMessage = $delayMessage;
        return $this;
    }

    public static function new(string $phone, string $caption, string $image, ?int $delayMessage = null): self
    {
        return (new static())
            ->setImage($image)
            ->setPhone($phone)
            ->setCaption($caption)
            ->setDelayMessage($delayMessage);
    }
}
