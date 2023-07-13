<?php

namespace Lexide\QueueBall\Test\Queue;

use Lexide\QueueBall\Queue\AbstractQueue;
use PHPUnit\Framework\TestCase;

class AbstractQueueTest extends TestCase
{

    /**
     * @dataProvider waitTimeProvider
     *
     * @param float|int $waitTime
     * @param float|int $maxWaitTime
     * @param bool $expectException
     * @throws \Exception
     */
    public function testSettingWaitTime(float|int $waitTime, float|int $maxWaitTime, bool $expectException = false)
    {
        $queue = new TestQueue(null, $maxWaitTime);
        if ($expectException) {
            $this->expectException("Exception");
        }
        $queue->setWaitTime($waitTime);
        $this->assertSame($waitTime, $queue->getWaitTime());
    }

    public function waitTimeProvider()
    {
        return [
            [ #0
                5,
                10,
                false
            ],
            [ #1
                0,
                10,
                false
            ],
            [ #2
                -2,
                10,
                true
            ],
            [ #3
                10,
                10,
                false
            ],
            [ #4
                12,
                10,
                true
            ]
        ];
    }

}
