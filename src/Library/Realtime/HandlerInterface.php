<?php

namespace App\Library\Realtime;

use App\Library\Realtime\Handler\HandlerException;

interface HandlerInterface
{
    /**
     * Handle the message.
     *
     * @param Message $message
     *
     * @throws HandlerException
     */
    public function handleMessage(
        Message $message);
}
