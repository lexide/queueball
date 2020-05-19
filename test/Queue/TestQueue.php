<?php

namespace Lexide\QueueBall\Test\Queue;

use Lexide\QueueBall\Message\QueueMessage;
use Lexide\QueueBall\Queue\AbstractQueue;

class TestQueue extends AbstractQueue
{

    /**
     * @inheritDoc
     */
    public function createQueue($queueId, $options = [])
    {
    }

    /**
     * @inheritDoc
     */
    public function deleteQueue($queueId = null)
    {
    }

    /**
     * @inheritDoc
     */
    public function sendMessage($messageBody, $queueId = null)
    {
    }

    /**
     * @inheritDoc
     */
    public function receiveMessage($queueId = null, $waitTime = null)
    {
    }

    /**
     * @inheritDoc
     */
    public function completeMessage(QueueMessage $message)
    {
    }

    /**
     * @inheritDoc
     */
    public function returnMessage(QueueMessage $message)
    {
    }
}