<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * Insights.
 *
 * @method mixed getInstagramInsights()
 * @method bool isInstagramInsights()
 * @method $this setInstagramInsights(mixed $value)
 * @method $this unsetInstagramInsights()
 */
class Insights extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'instagram_insights' => '',
    ];
}
