<?php

namespace App\Library\Realtime\Subscription\GraphQl;

use App\Library\Realtime\Subscription\GraphQlSubscription;

class DirectTypingSubscription extends GraphQlSubscription
{
    const QUERY = '17867973967082385';

    /**
     * Constructor.
     *
     * @param string $accountId
     */
    public function __construct(
        $accountId)
    {
        parent::__construct(self::QUERY, [
            'user_id' => $accountId,
        ]);
    }

    /** {@inheritdoc} */
    public function getId()
    {
        return 'direct_typing';
    }
}
