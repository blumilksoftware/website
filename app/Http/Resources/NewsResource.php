<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Resources;

use Blumilk\Website\Enums\DateFormats;
use Blumilk\Website\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string $id
 * @property array $title
 * @property array $subtitle
 * @property array $description
 * @property array $slug
 * @property string $photo
 * @property bool $published
 * @property Carbon $published_at
 * @property string $url
 * @property array $tags
 */
class NewsResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var News $news */
        $news = $this;

        return [
            "id" => $news->id,
            "title" => $news->title,
            "subtitle" => $news->subtitle,
            "description" => $news->description,
            "slug" => $news->slug,
            "photo" => $news->photo,
            "published" => $news->published,
            "published_at" => $news->published_at?->translatedFormat(DateFormats::NEWS_DATE_DISPLAY),
            "url" => $news->url,
        ];
    }
}
