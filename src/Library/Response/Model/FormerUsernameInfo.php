<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * FormerUsernameInfo.
 *
 * @method bool getHasFormerUsernames()
 * @method bool isHasFormerUsernames()
 * @method $this setHasFormerUsernames(bool $value)
 * @method $this unsetHasFormerUsernames()
 */
class FormerUsernameInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'has_former_usernames' => 'bool',
    ];
}
