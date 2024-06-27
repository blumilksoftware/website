<?php

declare(strict_types=1);

namespace Blumilk\Website\Observers;

use Blumilk\Website\Actions\RemoveTagFromActivitiesAction;
use Blumilk\Website\Models\Tag;

class TagObserver
{
    public function __construct(
        protected RemoveTagFromActivitiesAction $removeTagFromActivitiesAction,
    ) {}

    public function deleted(Tag $tag): void
    {
        $this->removeTagFromActivitiesAction->execute($tag->id);
    }
}
