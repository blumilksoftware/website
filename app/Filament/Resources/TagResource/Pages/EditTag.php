<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\TagResource\Pages;

use Blumilk\Website\Filament\Resources\TagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTag extends EditRecord
{
    protected static string $resource = TagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
