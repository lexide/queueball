<?php
/**
 * @package queueball
 */

namespace Lexide\QueueBall\Message;

class BasicMessageFactory implements QueueMessageFactoryInterface
{
    /**
     * @param string $message
     * @param string $queueId
     * @return QueueMessage
     */
    public function createMessage(string $message, string $queueId): QueueMessage
    {
        $queueMessage = new QueueMessage();
        $queueMessage->setMessage($message);
        $queueMessage->setQueueId($queueId);
        return $queueMessage;
    }

} 
