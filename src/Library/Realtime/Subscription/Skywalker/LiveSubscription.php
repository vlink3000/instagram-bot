<?php

namespace App\Library\Realtime\Subscription\Skywalker;

use App\Library\Realtime\Subscription\SkywalkerSubscription;

class LiveSubscription extends SkywalkerSubscription
{
    const ID = 'live';
    const TEMPLATE = 'ig/live_notification_subscribe/%s';

    /** {@inheritdoc} */
    public function getId()
    {
        return self::ID;
    }

    /** {@inheritdoc} */
    public function __toString()
    {
        return sprintf(self::TEMPLATE, $this->_accountId);
    }
}
