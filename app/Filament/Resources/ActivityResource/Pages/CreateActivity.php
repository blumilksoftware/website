<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\ActivityResource\Pages;

use Blumilk\Website\Filament\Resources\ActivityResource;
use Filament\Resources\Pages\CreateRecord;

class CreateActivity extends CreateRecord
{
    protected static string $resource = ActivityResource::class;
}
