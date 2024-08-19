<?php

declare(strict_types=1);

namespace Blumilk\Website\Observers;

use Blumilk\Website\Models\News;

class NewsObserver
{
    public function creating(News $news): void
    {
        $news->tags = $this->prepareTags($news->tags);
    }

    public function updating(News $news): void
    {
        $news->tags = $this->prepareTags($news->tags);
    }

    private function prepareTags(array $tags): array
    {
        return array_map(
            fn(string $tag): int => (int)$tag,
            $tags,
        );
    }
}
