<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\BaseResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class BaseListRecord extends ListRecords
{
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
