<?php

namespace Jetimob\ZApi\Entity;

class MessageLink extends Entity
{
    protected string $phone;
    protected string $message;
    protected string $image;
    protected string $linkUrl;
    protected string $title;
    protected string $linkDescription;
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
     * @return MessageLink
     */
    public function setPhone(string $phone): MessageLink
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return MessageLink
     */
    public function setMessage(string $message): MessageLink
    {
        $this->message = $message;
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
     * @return MessageLink
     */
    public function setImage(string $image): MessageLink
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkUrl(): string
    {
        return $this->linkUrl;
    }

    /**
     * @param string $linkUrl
     * @return MessageLink
     */
    public function setLinkUrl(string $linkUrl): MessageLink
    {
        $this->linkUrl = $linkUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return MessageLink
     */
    public function setTitle(string $title): MessageLink
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getLinkDescription(): string
    {
        return $this->linkDescription;
    }

    /**
     * @param string $linkDescription
     * @return MessageLink
     */
    public function setLinkDescription(string $linkDescription): MessageLink
    {
        $this->linkDescription = $linkDescription;
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
     * @return MessageLink
     */
    public function setDelayMessage(?int $delayMessage): MessageLink
    {
        $this->delayMessage = $delayMessage;
        return $this;
    }

    public static function new(
        string $phone,
        string $message,
        string $title,
        string $image,
        string $linkUrl,
        string $linkDescription,
        ?int $delayMessage = null
    ): self {
        return (new static())
            ->setMessage($message)
            ->setTitle($title)
            ->setPhone($phone)
            ->setImage($image)
            ->setLinkUrl($linkUrl)
            ->setDelayMessage($delayMessage)
            ->setLinkDescription($linkDescription);
    }
}
