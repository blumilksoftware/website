<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Resources;

use Blumilk\Website\Enums\DateFormats;
use Blumilk\Website\Models\Activity;
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
class ActivityResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var Activity $activity */
        $activity = $this;

        return [
            "id" => $activity->id,
            "title" => $activity->title,
            "subtitle" => $activity->subtitle,
            "description" => $activity->description,
            "slug" => $activity->slug,
            "photo" => $activity->photo,
            "published" => $activity->published,
            "published_at" => $activity->published_at?->format(DateFormats::ACTIVITY_DATE_DISPLAY),
            "url" => $activity->url,
        ];
    }
}
