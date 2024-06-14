<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property array $name
 * @property array $description
 * @property string $photo
 * @property array $slug
 * @property string $company
 * @property string $template
 * @property bool $published
 */
class CaseStudy extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "case-studies";

    public $translatable = [
        "name",
        "description",
        "slug",
    ];
    protected $fillable = [
        "name",
        "description",
        "photo",
        "published",
        "company",
        "slug",
        "template",
    ];
    protected $casts = [
        "name" => "array",
        "description" => "array",
        "published" => "boolean",
        "slug" => "array",
    ];
}
