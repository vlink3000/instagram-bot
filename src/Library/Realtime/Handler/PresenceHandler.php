<?php

namespace App\Library\Realtime\Handler;

use App\Library\Realtime\HandlerInterface;
use App\Library\Realtime\Message;
use App\Library\Realtime\Subscription\GraphQl\AppPresenceSubscription;
use App\Library\Response\Model\UserPresence;

class PresenceHandler extends AbstractHandler implements HandlerInterface
{
    const MODULE = AppPresenceSubscription::ID;

    /** {@inheritdoc} */
    public function handleMessage(
        Message $message)
    {
        $data = $message->getData();
        if (!isset($data['presence_event']) || !is_array($data['presence_event'])) {
            throw new HandlerException('Invalid presence (event data is missing).');
        }
        $presence = new UserPresence($data['presence_event']);
        $this->_target->emit('presence', [$presence]);
    }
}
