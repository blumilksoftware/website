<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Resources;

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
        return [
            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'description' => $this->description,
            'slug' => $this->slug,
            'photo' => $this->photo,
            'published' => $this->published,
            'published_at' => $this->published_at?->format('d/m Y'),
            'url' => $this->url,
            'tags' => $this->tags,
        ];
    }
    public static function getTags(): array
    {
        return [
            "cwup",
            "soda",
            "lmt",
            "publikacje",
        ];
    }
}
