<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Blumilk\Website\Observers\TagObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property int $id
 * @property array $title
 * @property bool $is_primary
 * @property bool $as_person
 */
class Tag extends Model
{
    use HasTranslations;
    use HasFactory;

    public $translatable = [
        "title",
    ];
    protected $fillable = [
        "title",
        "is_primary",
        "as_person",
    ];
    protected $casts = [
        "is_primary" => "boolean",
        "as_person" => "boolean",
    ];

    public static function boot(): void
    {
        parent::boot();
        static::observe(TagObserver::class);
    }
}
