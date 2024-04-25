<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\BaseResource\Pages;

use Filament\Resources\Pages\EditRecord;

class BaseEditRecord extends EditRecord
{
    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl("index");
    }
}
