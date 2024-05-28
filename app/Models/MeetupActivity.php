<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property array $title
 * @property array $description
 * @property string $presenter_name
 * @property string $photo
 * @property string $slug
 * @property string $associate_link
 * @property bool $published
 * @property Carbon $published_at
 */
class MeetupActivity extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "meetup-activities";

    public $translatable = [
        "title",
        "description",
    ];
    protected $fillable = [
        "title",
        "description",
        "presenter_name",
        "photo",
        "published",
        "published_at",
        "associate_link",
    ];
    protected $casts = [
        "name" => "array",
        "description" => "array",
        "published" => "boolean",
        "published_at" => "date",
    ];
}
