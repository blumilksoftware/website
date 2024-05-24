<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Filament\Resources\ReferenceResource\Pages;
use Blumilk\Website\Models\Reference;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class ReferenceResource extends Resource
{
    protected static ?string $model = Reference::class;
    protected static ?string $label = "Referencję";
    protected static ?string $pluralLabel = "Referencje";
    protected static ?string $navigationIcon = "heroicon-o-hand-thumb-up";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        Forms\Components\TextInput::make("creator_name")
                            ->label("Imię i nazwisko autora")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make("company")
                            ->label("Firma")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make("associate_link")
                            ->label("Link do LinkedIn")
                            ->url()
                            ->maxLength(255),
                        Forms\Components\Checkbox::make("published")
                            ->label("Opublikowane"),
                    ]),
                    Section::make([
                        TranslatableContainer::make(
                            Forms\Components\Textarea::make("description")
                                ->label("Opis")
                                ->required()
                                ->maxLength(65000),
                        )->requiredLocales(config("app.translatable_locales")),
                        Forms\Components\FileUpload::make("photo")
                            ->label("Zdjęcie")
                            ->directory(Reference::PHOTOS_DIRECTORY)
                            ->imageEditor()
                            ->rules(["mimes:jpeg,png,webp"])
                            ->required()
                            ->multiple(false)
                            ->maxSize(1000),
                    ]),
                ])->from("lg"),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("company")
                    ->label("Firma")
                    ->searchable(),
                Tables\Columns\CheckboxColumn::make("published")
                    ->label("Opublikowane"),
            ])
            ->filters([
                TernaryFilter::make("published")
                    ->label("Status publikacji")
                    ->placeholder("Wszystkie")
                    ->trueLabel("Opublikowane")
                    ->falseLabel("Nieopublikowane"),
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
            "index" => Pages\ListReferences::route("/"),
            "create" => Pages\CreateReferences::route("/create"),
            "edit" => Pages\EditReferences::route("/{record}/edit"),
        ];
    }
}
