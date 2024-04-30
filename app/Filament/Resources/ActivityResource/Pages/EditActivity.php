<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\ActivityResource\Pages;

use Blumilk\Website\Filament\Resources\ActivityResource;
use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseEditRecord;
use Filament\Actions;

class EditActivity extends BaseEditRecord
{
    protected static string $resource = ActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
