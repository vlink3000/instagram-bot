<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * ChainingInfo.
 *
 * @method string getSources()
 * @method bool isSources()
 * @method $this setSources(string $value)
 * @method $this unsetSources()
 */
class ChainingInfo extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'sources' => 'string',
    ];
}
