<?php

declare(strict_types=1);

namespace Blumilk\Website\Actions;

use Blumilk\Website\Models\Activity;

class RemoveTagFromActivitiesAction
{
    public function execute(int $tagId): void
    {
        Activity::query()->whereJsonContains("tags", $tagId)->get()
            ->each(function (Activity $activity) use ($tagId): void {
                $activity->tags = array_diff($activity->tags, [$tagId]);
                $activity->save();
            });
    }
}
