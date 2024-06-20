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
 * @property array $slug
 * @property string $photo
 * @property bool $published
 * @property Carbon $published_at
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
        "slug",
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
        "slug" => "array",
        "published" => "boolean",
        "tags" => "array",
    ];


    protected $dates = [
        'published_at',
    ];

    public function getPublishedAtAttribute($value)
    {
        return $this->asDateTime($value)->format('d/m Y');
    }

}
