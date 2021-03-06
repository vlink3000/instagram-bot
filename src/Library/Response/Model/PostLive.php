<?php

namespace App\Library\Response\Model;

use App\Library\AutoPropertyMapper;

/**
 * PostLive.
 *
 * @method PostLiveItem[] getPostLiveItems()
 * @method bool isPostLiveItems()
 * @method $this setPostLiveItems(PostLiveItem[] $value)
 * @method $this unsetPostLiveItems()
 */
class PostLive extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'post_live_items' => 'PostLiveItem[]',
    ];
}
