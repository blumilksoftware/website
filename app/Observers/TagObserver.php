<?php

declare(strict_types=1);

namespace Blumilk\Website\Observers;

use Blumilk\Website\Actions\RemoveTagFromNewsAction;
use Blumilk\Website\Models\Tag;

class TagObserver
{
    public function __construct(
        protected RemoveTagFromNewsAction $removeTagFromNewsAction,
    ) {}

    public function deleted(Tag $tag): void
    {
        $this->removeTagFromNewsAction->execute($tag->id);
    }
}
