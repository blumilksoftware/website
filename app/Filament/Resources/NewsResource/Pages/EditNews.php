<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\NewsResource\Pages;

use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseEditRecord;
use Blumilk\Website\Filament\Resources\NewsResource;
use Filament\Actions;

class EditNews extends BaseEditRecord
{
    protected static string $resource = NewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
