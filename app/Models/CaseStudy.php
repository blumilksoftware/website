<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property array $name_1
 * @property array $name_2
 * @property array $name_3
 * @property string $photo
 * @property string $slug
 * @property string $template
 * @property bool $published
 * @property string $color
 */
class CaseStudy extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "case-studies";

    public $translatable = [
        "name_1",
        "name_2",
        "name_3",
    ];
    protected $fillable = [
        "name_1",
        "name_2",
        "name_3",
        "photo",
        "published",
        "slug",
        "template",
        "color",
    ];
    protected $casts = [
        "name_1" => "array",
        "name_2" => "array",
        "name_3" => "array",
        "published" => "boolean",
    ];
}
