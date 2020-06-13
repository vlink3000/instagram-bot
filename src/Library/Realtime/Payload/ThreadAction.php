<?php

namespace App\Library\Realtime\Payload;

use App\Library\AutoPropertyMapper;

/**
 * ThreadAction.
 *
 * @method \App\Library\Response\Model\ActionLog getActionLog()
 * @method string getUserId()
 * @method bool isActionLog()
 * @method bool isUserId()
 * @method $this setActionLog(\App\Library\Response\Model\ActionLog $value)
 * @method $this setUserId(string $value)
 * @method $this unsetActionLog()
 * @method $this unsetUserId()
 */
class ThreadAction extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'user_id'    => 'string',
        'action_log' => '\App\Library\Response\Model\ActionLog',
    ];
}
