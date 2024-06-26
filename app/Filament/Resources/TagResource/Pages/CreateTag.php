<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\TagResource\Pages;

use Blumilk\Website\Filament\Resources\TagResource;
use Filament\Resources\Pages\CreateRecord;

class CreateTag extends CreateRecord
{
    protected static string $resource = TagResource::class;
}
