<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\EdulandingContactFormResource\Pages;

use Blumilk\Website\Enums\ContactFormStatus;
use Blumilk\Website\Filament\Resources\BaseResource\Pages\BaseEditRecord;
use Blumilk\Website\Filament\Resources\EdulandingContactFormResource;
use Filament\Actions;

class EditEdulandingContactForm extends BaseEditRecord
{
    protected static string $resource = EdulandingContactFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->visible(fn($record): bool => $record->status !== ContactFormStatus::Responded),
        ];
    }
}
