<?php

namespace Lexide\QueueBall\Message;

/**
 *
 */
class QueueMessage
{

    protected string $id;

    protected string $message;

    protected array $attributes = [];

    protected string $receiptId;

    protected string $queueId;

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param mixed $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return ?string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param string $receiptId
     */
    public function setReceiptId(string $receiptId): void
    {
        $this->receiptId = $receiptId;
    }

    /**
     * @return ?string
     */
    public function getReceiptId(): ?string
    {
        return $this->receiptId;
    }

    /**
     * @param string $queueId
     */
    public function setQueueId(string $queueId): void
    {
        $this->queueId = $queueId;
    }

    /**
     * @return ?string
     */
    public function getQueueId(): ?string
    {
        return $this->queueId;
    }

}
