<?php

namespace App\Library\Realtime\Payload;

use App\Library\AutoPropertyMapper;

/**
 * StoryScreenshot.
 *
 * @method \App\Library\Response\Model\User getActionUserDict()
 * @method int getMediaType()
 * @method bool isActionUserDict()
 * @method bool isMediaType()
 * @method $this setActionUserDict(\App\Library\Response\Model\User $value)
 * @method $this setMediaType(int $value)
 * @method $this unsetActionUserDict()
 * @method $this unsetMediaType()
 */
class StoryScreenshot extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'action_user_dict' => '\App\Library\Response\Model\User',
        /*
         * A number describing what type of media this is.
         */
        'media_type'       => 'int',
    ];
}
