<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * Attribution.
 *
 * @method string getName()
 * @method bool isName()
 * @method $this setName(string $value)
 * @method $this unsetName()
 */
class Attribution extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'name' => 'string',
    ];
}
