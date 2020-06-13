<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * Badging.
 *
 * @method mixed getIds()
 * @method mixed getItems()
 * @method bool isIds()
 * @method bool isItems()
 * @method $this setIds(mixed $value)
 * @method $this setItems(mixed $value)
 * @method $this unsetIds()
 * @method $this unsetItems()
 */
class Badging extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'ids'   => '',
        'items' => '',
    ];
}
