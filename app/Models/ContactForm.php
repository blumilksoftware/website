<?php

declare(strict_types=1);

namespace Blumilk\Website\Models;

use Blumilk\Website\Enums\ContactFormStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $email
 * @property string $message
 * @property ContactFormStatus $status
 */
class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        "email",
        "message",
        "status",
        "response",
    ];
    protected $casts = [
        "status" => ContactFormStatus::class,
    ];
}
