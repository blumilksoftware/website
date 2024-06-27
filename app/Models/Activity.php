<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property array $title
 * @property array $subtitle
 * @property array $description
 * @property string $slug
 * @property string $photo
 * @property bool $published
 * @property ?Carbon $published_at
 * @property string $url
 */
class Activity extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "activities";

    public $translatable = [
        "title",
        "subtitle",
        "description",
    ];
    protected $fillable = [
        "photo",
        "title",
        "subtitle",
        "description",
        "slug",
        "published",
        "published_at",
        "tags",
        "url",
    ];
    protected $casts = [
        "title" => "array",
        "subtitle" => "array",
        "description" => "array",
        "published" => "boolean",
        "published_at" => "datetime",
        "tags" => "array",
    ];
}
