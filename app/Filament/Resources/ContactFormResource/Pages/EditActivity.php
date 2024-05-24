<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\ContactFormResource\Pages;

use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseEditRecord;
use Blumilk\Website\Filament\Resources\ContactFormResource;
use Filament\Actions;

class EditActivity extends BaseEditRecord
{
    protected static string $resource = ContactFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
