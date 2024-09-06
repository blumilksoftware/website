<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property array $name_first_part
 * @property array $name_second_part
 * @property array $name_third_part
 * @property string $photo
 * @property string $slug
 * @property string $template
 * @property bool $published
 * @property string $color
 * @property int $sort_order
 */
class Project extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "projects";

    public $translatable = [
        "name_first_part",
        "name_second_part",
        "name_third_part",
    ];
    protected $fillable = [
        "name_first_part",
        "name_second_part",
        "name_third_part",
        "photo",
        "published",
        "slug",
        "template",
        "color",
    ];
    protected $casts = [
        "name_first_part" => "array",
        "name_second_part" => "array",
        "name_third_part" => "array",
        "published" => "boolean",
    ];
}
