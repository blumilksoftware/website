<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\UserResource\Pages;

use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseListRecord;
use Blumilk\Website\Filament\Resources\UserResource;

class ListUsers extends BaseListRecord
{
    protected static string $resource = UserResource::class;
}
