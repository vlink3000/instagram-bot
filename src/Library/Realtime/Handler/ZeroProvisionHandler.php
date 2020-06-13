<?php

namespace App\Library\Realtime\Handler;

use App\Library\Realtime\HandlerInterface;
use App\Library\Realtime\Message;
use App\Library\Realtime\Payload\ZeroProvisionEvent;

class ZeroProvisionHandler extends AbstractHandler implements HandlerInterface
{
    const MODULE = 'zero_provision';

    /** {@inheritdoc} */
    public function handleMessage(
        Message $message)
    {
        $data = $message->getData();
        if (!isset($data['zero_product_provisioning_event']) || !is_array($data['zero_product_provisioning_event'])) {
            throw new HandlerException('Invalid zero provision (event data is missing).');
        }
        $provision = new ZeroProvisionEvent($data['zero_product_provisioning_event']);
        $this->_target->emit('zero-provision', [$provision]);
    }
}
