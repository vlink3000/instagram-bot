<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * Groups.
 *
 * @method Item[] getItems()
 * @method mixed getType()
 * @method bool isItems()
 * @method bool isType()
 * @method $this setItems(Item[] $value)
 * @method $this setType(mixed $value)
 * @method $this unsetItems()
 * @method $this unsetType()
 */
class Groups extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'type'  => '',
        'items' => 'Item[]',
    ];
}
