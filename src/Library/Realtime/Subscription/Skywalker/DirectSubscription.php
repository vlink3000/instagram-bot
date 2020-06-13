<?php

namespace App\Library\Realtime\Subscription\Skywalker;

use App\Library\Realtime\Subscription\SkywalkerSubscription;

class DirectSubscription extends SkywalkerSubscription
{
    const ID = 'direct';
    const TEMPLATE = 'ig/u/v1/%s';

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
