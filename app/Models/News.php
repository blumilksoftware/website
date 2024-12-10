<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Blumilk\Website\Observers\NewsObserver;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Spatie\Translatable\HasTranslations;

/**
 * @property array $title
 * @property array $description
 * @property string $slug
 * @property string $photo
 * @property bool $published
 * @property ?Carbon $published_at
 * @property string $url
 * @property array $tags
 */
class News extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "news";

    public $translatable = [
        "title",
        "description",
    ];
    protected $fillable = [
        "photo",
        "title",
        "description",
        "slug",
        "published",
        "published_at",
        "tags",
        "url",
    ];
    protected $casts = [
        "title" => "array",
        "description" => "array",
        "published" => "boolean",
        "published_at" => "datetime",
        "tags" => "array",
    ];

    public static function boot(): void
    {
        parent::boot();
        static::observe(NewsObserver::class);
    }

    public function getRelatedTagModels(): Collection
    {
        return Tag::query()->whereIn("id", $this->tags)->get();
    }
}
