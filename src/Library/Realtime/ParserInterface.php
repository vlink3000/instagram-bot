<?php

namespace App\Library\Realtime;

interface ParserInterface
{
    /**
     * Parse incoming MQTT message.
     *
     * @param string $topic   MQTT topic.
     * @param string $payload MQTT payload.
     *
     * @return Message[]
     */
    public function parseMessage(
        $topic,
        $payload
    );
}
