<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\ActivityResource\Pages;

use Blumilk\Website\Filament\Resources\ActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActivities extends ListRecords
{
    protected static string $resource = ActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
