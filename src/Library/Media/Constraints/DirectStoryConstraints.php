<?php

namespace App\Library\Media\Constraints;

/**
 * Instagram's direct messaging story media constraints.
 */
class DirectStoryConstraints extends StoryConstraints
{
    /** {@inheritdoc} */
    public function getTitle()
    {
        return 'direct story';
    }

    /** {@inheritdoc} */
    public function getMinDuration()
    {
        return DirectConstraints::MIN_DURATION;
    }

    /** {@inheritdoc} */
    public function getMaxDuration()
    {
        return DirectConstraints::MAX_DURATION;
    }
}
