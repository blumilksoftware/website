<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\ProjectResource\Pages;

use Blumilk\Website\Filament\Resources\ProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;
}
