<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Filament\Resources\TagResource\Pages;
use Blumilk\Website\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;
    protected static ?string $label = "tag";
    protected static ?string $pluralLabel = "Tagi";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make([
                    TranslatableContainer::make(
                        Forms\Components\TextInput::make("title")
                            ->label("Tytuł")
                            ->required()
                            ->maxLength(255),
                    )->requiredLocales(config("app.translatable_locales")),
                    Forms\Components\Checkbox::make("is_primary")
                        ->label("Pokaż jako główny"),
                    Forms\Components\Checkbox::make("as_person")
                        ->label("Tag jako osoba"),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")
                    ->label("Tag")
                    ->sortable()
                    ->searchable(),
                Tables\Columns\CheckboxColumn::make("is_primary")
                    ->label("Pokaż jako główny"),
                Tables\Columns\CheckboxColumn::make("as_person")
                    ->label("Tag jako osoba"),
            ])
            ->actions([
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
            "index" => Pages\ListTags::route("/"),
            "create" => Pages\CreateTag::route("/create"),
            "edit" => Pages\EditTag::route("/{record}/edit"),
        ];
    }
}
