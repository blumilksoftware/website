<?php

declare(strict_types=1);

namespace Blumilk\Website\Enums;

use Filament\Support\Contracts\HasLabel;

enum Role: string implements HasLabel
{
    case Moderator = "moderator";
    case Admin = "admin";

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Moderator => "Moderator",
            self::Admin => "Administrator",
        };
    }
}
