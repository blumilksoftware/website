<?php

declare(strict_types=1);

namespace Blumilk\Website\Enums;

use Filament\Support\Contracts\HasLabel;

enum ContactFormStatus: string implements HasLabel
{
    case Unread = "unread";
    case Read = "read";
    case Responded = "responded";

    public function getLabel(): ?string
    {
        return match ($this) {
            self::Unread => "Nieprzeczytane",
            self::Read => "Przeczytane",
            self::Responded => "Odpowiedziano",
        };
    }
}
