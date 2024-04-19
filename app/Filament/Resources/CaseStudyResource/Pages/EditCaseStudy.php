<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\CaseStudyResource\Pages;

use Blumilk\Website\Filament\Resources\CaseStudyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCaseStudy extends EditRecord
{
    protected static string $resource = CaseStudyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
