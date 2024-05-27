<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Filament\Resources\CaseStudyResource\Pages;
use Blumilk\Website\Models\CaseStudy;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;
    protected static ?string $label = "Case study";
    protected static ?string $pluralLabel = "Case studies";
    protected static ?string $navigationIcon = "heroicon-o-swatch";
    protected static bool $hasTitleCaseModelLabel = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        TranslatableContainer::make(
                            Forms\Components\TextInput::make("name")
                                ->label("Nazwa realizacji")
                                ->required()
                                ->maxLength(255),
                        )->requiredLocales(config("app.translatable_locales")),
                        Forms\Components\TextInput::make("company")
                            ->label("Firma")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make("slug")
                            ->label("Slug")
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->alphaDash()
                            ->maxLength(255),
                        Forms\Components\Select::make("template")
                            ->label("Szablon")
                            ->options(fn(): array => self::getTemplateOptions())
                            ->native(false),
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
                            ->directory(CaseStudy::PHOTOS_DIRECTORY)
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
                Tables\Columns\TextColumn::make("name")
                    ->label("Nazwa realizacji")
                    ->searchable(),
                Tables\Columns\TextColumn::make("template")
                    ->getStateUsing(fn(CaseStudy $record): string => $record->template ?: "-")
                    ->label("Szablon"),
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
            "index" => Pages\ListCaseStudies::route("/"),
            "create" => Pages\CreateCaseStudy::route("/create"),
            "edit" => Pages\EditCaseStudy::route("/{record}/edit"),
        ];
    }

    protected static function getTemplateOptions(): array
    {
        $files = scandir(resource_path("views/case-studies"));
        $options = [];

        foreach ($files as $file) {
            if (str_ends_with($file, ".blade.php")) {
                $options[$file] = $file;
            }
        }

        return $options;
    }
}
