<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * SharePrefillEntities.
 *
 * @method DirectThread getThread()
 * @method bool isThread()
 * @method $this setThread(DirectThread $value)
 * @method $this unsetThread()
 */
class SharePrefillEntities extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'thread'               => 'DirectThread',
    ];
}
