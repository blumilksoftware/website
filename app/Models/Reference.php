<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property string $creator_name
 * @property array $description
 * @property string $photo
 * @property string $company
 * @property bool $published
 * @property string $sex
 */
class Reference extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "references";

    public $translatable = [
        "description",
    ];
    protected $fillable = [
        "creator_name",
        "photo",
        "company",
        "description",
        "published",
        "sex",
    ];
    protected $casts = [
        "description" => "array",
        "published" => "boolean",
    ];
}
