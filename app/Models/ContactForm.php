<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Blumilk\Website\Enums\ContactFormStatus;
use Blumilk\Website\Observers\ContactFormObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @property string $topic
 * @property string $message
 * @property string $lang
 * @property ContactFormStatus $status
 */
class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        "email",
        "topic",
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
        static::observe(ContactFormObserver::class);
    }
}
