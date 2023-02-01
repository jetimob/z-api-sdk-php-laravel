<?php

namespace Jetimob\ZApi\Entity;

class Message extends Entity
{
    protected string $phone;
    protected string $message;
    protected ?int $delayMessage = null;
    protected ?int $delayTyping = null;

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     * @return Message
     */
    public function setPhone(string $phone): Message
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
     * @return Message
     */
    public function setMessage(string $message): Message
    {
        $this->message = $message;
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
     * @return Message
     */
    public function setDelayMessage(?int $delayMessage): Message
    {
        $this->delayMessage = $delayMessage;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDelayTyping(): ?int
    {
        return $this->delayTyping;
    }

    /**
     * @param int|null $delayTyping
     * @return Message
     */
    public function setDelayTyping(?int $delayTyping): Message
    {
        $this->delayTyping = $delayTyping;
        return $this;
    }

    public static function new(string $phone, string $message): self
    {
        return (new static())
            ->setPhone($phone)
            ->setMessage($message);
    }
}
