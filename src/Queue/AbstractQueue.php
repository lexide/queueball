<?php

namespace Lexide\QueueBall\Queue;

use Lexide\QueueBall\Exception\QueueException;
use Lexide\QueueBall\Message\QueueMessage;

/**
 * Abstract class for encapsulating queue functionality
 *
 * stores queue ID to prevent having to pass the value through every time
 *
 */
abstract class AbstractQueue
{

    protected ?string $queueId;
    protected float|int $waitTime = 0;
    protected float|int $maxWaitTime = 20;

    /**
     * @param ?string $queueId
     * @param float|int $maxWaitTime
     */
    public function __construct(?string $queueId = null, float|int $maxWaitTime = 20)
    {
        $this->setQueueId($queueId);
        $this->maxWaitTime = $maxWaitTime;
    }

    /**
     * @param ?string $queueId
     */
    public function setQueueId(?string $queueId): void
    {
        $this->queueId = $queueId;
    }

    /**
     * @return string
     * @throws QueueException
     */
    public function getQueueId(): string
    {
        if (empty($this->queueId)) {
            throw new QueueException("No queue ID has been set");
        }
        return $this->queueId;
    }

    /**
     * @param float|int $seconds
     * @throws \Exception
     */
    public function setWaitTime(float|int $seconds): void
    {
        $seconds = (int) $seconds;
        if ($seconds < 0 || $this->maxWaitTime < $seconds) {
            throw new \Exception("WaitTime must be a period between 0 to {$this->maxWaitTime} seconds");
        }
        $this->waitTime = $seconds;
    }

    /**
     * @return float|int
     */
    public function getWaitTime(): float|int
    {
        return $this->waitTime;
    }

    /**
     * @param string $queueId
     * @param array $options
     */
    abstract public function createQueue(string $queueId, array $options = []): void;

    /**
     * @param ?string $queueId
     */
    abstract public function deleteQueue(?string $queueId = null);

    /**
     * @param string $messageBody
     * @param ?string $queueId
     */
    abstract public function sendMessage(string $messageBody, ?string $queueId = null): void;

    /**
     * @param ?string $queueId
     * @param float|int|null $waitTime
     * @return QueueMessage
     */
    abstract public function receiveMessage(?string $queueId = null, float|int|null $waitTime = null): QueueMessage;

    /**
     * @param QueueMessage $message
     */
    abstract public function completeMessage(QueueMessage $message): void;

    /**
     * @param QueueMessage $message
     */
    abstract public function returnMessage(QueueMessage $message): void;

} 
