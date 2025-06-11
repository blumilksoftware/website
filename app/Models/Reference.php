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
 * @property ?string $company
 * @property bool $published
 * @property string $sex
 * @property ?int $sort_order
 * @property ?string $position
 */
class Reference extends Model
{
    use HasTranslations;
    use HasFactory;

    public const string PHOTOS_DIRECTORY = "references";

    public $translatable = [
        "description",
        "position",
    ];
    protected $fillable = [
        "creator_name",
        "photo",
        "company",
        "description",
        "published",
        "sex",
        "position",
    ];
    protected $casts = [
        "description" => "array",
        "published" => "boolean",
    ];

    public function getPhotoPath(): string
    {
        if (file_exists(storage_path("app/public/" . $this->photo)) && !!$this->photo) {
            return asset("storage/" . $this->photo);
        }

        return $this->sex === "female"
            ? asset("graphics/placeholders/female.webp")
            : asset("graphics/placeholders/male.webp");
    }
}
