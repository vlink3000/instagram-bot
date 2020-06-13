<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * Bold.
 *
 * @method mixed getEnd()
 * @method mixed getStart()
 * @method bool isEnd()
 * @method bool isStart()
 * @method $this setEnd(mixed $value)
 * @method $this setStart(mixed $value)
 * @method $this unsetEnd()
 * @method $this unsetStart()
 */
class Bold extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'start' => '',
        'end'   => '',
    ];
}
