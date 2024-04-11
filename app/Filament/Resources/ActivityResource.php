<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Enums\DateFormats;
use Blumilk\Website\Filament\Resources\ActivityResource\Pages;
use Blumilk\Website\Models\Activity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class ActivityResource extends Resource
{
    use Translatable;

    protected static ?string $model = Activity::class;
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TranslatableContainer::make(
                    Forms\Components\TextInput::make("title")
                        ->label("Tytuł")
                        ->required()
                        ->maxLength(255),
                )->requiredLocales(config("app.translatable_locales")),
                TranslatableContainer::make(
                    Forms\Components\TextInput::make("subtitle")
                        ->label("Podtytuł")
                        ->maxLength(255),
                )->requiredLocales(config("app.translatable_locales")),
                Forms\Components\Checkbox::make("published")
                    ->label("Opublikowane"),
                Forms\Components\DateTimePicker::make("published_at")
                    ->format(DateFormats::DATE_DISPLAY)
                    ->time(false)
                    ->label("Data publikacji"),
                Forms\Components\FileUpload::make("photo")
                    ->label("Zdjęcie")
                    ->required()
                    ->directory(Activity::PHOTOS_DIRECTORY)
                    ->multiple(false)
                    ->maxSize(1000),
                TranslatableContainer::make(
                    Forms\Components\Textarea::make("description")
                        ->label("Opis")
                        ->required()
                        ->maxLength(65000),
                )->requiredLocales(config("app.translatable_locales")),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")
                    ->label("Tytuł"),
                Tables\Columns\CheckboxColumn::make("published")
                    ->label("Opublikowane"),
                Tables\Columns\TextColumn::make("published_at")->date(DateFormats::DATE_DISPLAY)
                    ->label("Data publikacji"),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            "index" => Pages\ListActivities::route("/"),
            "create" => Pages\CreateActivity::route("/create"),
            "edit" => Pages\EditActivity::route("/{record}/edit"),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return config("app.translatable_locales");
    }
}
