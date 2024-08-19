<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\NewsResource\Pages;

use Blumilk\Website\Filament\Resources\NewsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
