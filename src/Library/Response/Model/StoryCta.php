<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * StoryCta.
 *
 * @method string getFelixDeepLink()
 * @method AndroidLinks[] getLinks()
 * @method bool isFelixDeepLink()
 * @method bool isLinks()
 * @method $this setFelixDeepLink(string $value)
 * @method $this setLinks(AndroidLinks[] $value)
 * @method $this unsetFelixDeepLink()
 * @method $this unsetLinks()
 */
class StoryCta extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'links'           => 'AndroidLinks[]',
        'felix_deep_link' => 'string',
    ];
}
