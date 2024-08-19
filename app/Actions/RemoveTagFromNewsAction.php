<?php

declare(strict_types=1);

namespace Blumilk\Website\Actions;

use Blumilk\Website\Models\News;

class RemoveTagFromNewsAction
{
    public function execute(int $tagId): void
    {
        News::query()->whereJsonContains("tags", $tagId)->get()
            ->each(function (News $news) use ($tagId): void {
                $news->tags = array_values(array_diff($news->tags, [$tagId]));
                $news->save();
            });
    }
}
