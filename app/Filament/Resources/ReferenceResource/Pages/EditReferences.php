<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\ReferenceResource\Pages;

use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseEditRecord;
use Blumilk\Website\Filament\Resources\ReferenceResource;
use Filament\Actions;

class EditReferences extends BaseEditRecord
{
    protected static string $resource = ReferenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
