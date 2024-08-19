<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\NewsResource\Pages;

use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseListRecord;
use Blumilk\Website\Filament\Resources\NewsResource;

class ListNews extends BaseListRecord
{
    protected static string $resource = NewsResource::class;
}
