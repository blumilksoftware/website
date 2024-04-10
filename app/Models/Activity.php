<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @property string $photo
 * @property string $title
 * @property string $subtitle
 * @property string $description
 */
class Activity extends Model
{
    use HasTranslations;

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
    ];
}
