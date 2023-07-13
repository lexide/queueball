<?php

namespace Lexide\QueueBall\Message;

/**
 *
 */
interface QueueMessageFactoryInterface
{

    /**
     * @param string $message
     * @param string $queueId
     * @return QueueMessage
     */
    public function createMessage(string $message, string $queueId): QueueMessage;

} 
