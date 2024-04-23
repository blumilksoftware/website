<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\UserResource\Pages;

use Blumilk\Website\Filament\Resources\UserResource;
use Filament\Resources\Pages\EditRecord;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;
}
