<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Resources;

use Blumilk\Website\Models\Tag;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property string $title
 * @property bool $is_primary
 * @property bool $as_person
 */
class TagResource extends JsonResource
{
    public function toArray($request)
    {
        /** @var Tag $tag */
        $tag = $this;

        return [
            "title" => $tag->title,
            "is_primary" => $tag->is_primary,
            "as_person" => $tag->as_person,
        ];
    }
}
