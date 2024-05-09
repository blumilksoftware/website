<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\MeetupActivityResource\Pages;

use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseEditRecord;
use Blumilk\Website\Filament\Resources\MeetupActivityResource;
use Filament\Actions;

class EditMeetupActivity extends BaseEditRecord
{
    protected static string $resource = MeetupActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
