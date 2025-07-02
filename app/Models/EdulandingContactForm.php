<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Blumilk\Website\Enums\ContactFormStatus;
use Blumilk\Website\Observers\EdulandingContactFormObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @property string $topic
 * @property string $message
 * @property string $lang
 * @property ContactFormStatus $status
 */
class EdulandingContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        "email",
        "full_name",
        "company_name",
        "message",
        "status",
        "response",
        "lang",
    ];
    protected $casts = [
        "status" => ContactFormStatus::class,
    ];

    public static function boot(): void
    {
        parent::boot();
        static::observe(EdulandingContactFormObserver::class);
    }
}
