<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\UserResource\Pages;

use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseEditRecord;
use Blumilk\Website\Filament\Resources\UserResource;

class EditUser extends BaseEditRecord
{
    protected static string $resource = UserResource::class;
}
