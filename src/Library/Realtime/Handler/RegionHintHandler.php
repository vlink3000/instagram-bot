<?php

namespace App\Library\Realtime\Handler;

use App\Library\Realtime\HandlerInterface;
use App\Library\Realtime\Message;

class RegionHintHandler extends AbstractHandler implements HandlerInterface
{
    const MODULE = 'region_hint';

    /** {@inheritdoc} */
    public function handleMessage(
        Message $message)
    {
        $region = $message->getData();
        if ($region === null || $region === '') {
            throw new HandlerException('Invalid region hint.');
        }
        $this->_target->emit('region-hint', [$message->getData()]);
    }
}
