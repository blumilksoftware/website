<?php

declare(strict_types=1);

namespace Blumilk\Website\Observers;

use Blumilk\Website\Models\Activity;

class ActivityObserver
{
    public function creating(Activity $activity): void
    {
        $activity->tags = $this->prepareTags($activity->tags);
    }

    public function updating(Activity $activity): void
    {
        $activity->tags = $this->prepareTags($activity->tags);
    }

    private function prepareTags(array $tags): array
    {
        return array_map(
            fn(string $tag): int => (int)$tag,
            $tags,
        );
    }
}
