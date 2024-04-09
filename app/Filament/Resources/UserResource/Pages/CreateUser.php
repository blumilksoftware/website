<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\UserResource\Pages;

use Blumilk\Website\Filament\Resources\UserResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
