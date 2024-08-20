<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Filament\Resources\ProjectResource\Pages;
use Blumilk\Website\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $label = "projekt";
    protected static ?string $pluralLabel = "Projekty";
    protected static ?string $navigationIcon = "heroicon-o-swatch";
    protected static bool $hasTitleCaseModelLabel = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        TranslatableContainer::make(
                            Forms\Components\TextInput::make("name_first_part")
                                ->label("Część 1 tytułu")
                                ->required()
                                ->maxLength(255),
                        )->requiredLocales(config("app.translatable_locales")),
                        TranslatableContainer::make(
                            Forms\Components\TextInput::make("name_second_part")
                                ->label("Część 2 tytułu")
                                ->required()
                                ->maxLength(255),
                        )->requiredLocales(config("app.translatable_locales")),
                        Forms\Components\ColorPicker::make("color")
                            ->label("Kolor tekstu części 2")
                            ->required(),
                        TranslatableContainer::make(
                            Forms\Components\TextInput::make("name_third_part")
                                ->label("Część 3 tytułu")
                                ->maxLength(255),
                        ),
                    ]),
                    Section::make([
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
                        Forms\Components\FileUpload::make("photo")
                            ->label("Zdjęcie")
                            ->directory(Project::PHOTOS_DIRECTORY)
                            ->imageEditor()
                            ->rules(["mimes:jpeg,png,webp"])
                            ->required()
                            ->multiple(false)
                            ->maxSize(1000),
                        Forms\Components\Checkbox::make("published")
                            ->label("Opublikowane"),
                    ]),
                ])->from("lg"),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name_first_part")
                    ->label("Nazwa realizacji")
                    ->searchable(),
                Tables\Columns\TextColumn::make("template")
                    ->getStateUsing(fn(Project $record): string => $record->template ?: "-")
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
            "index" => Pages\ListProject::route("/"),
            "create" => Pages\CreateProject::route("/create"),
            "edit" => Pages\EditProject::route("/{record}/edit"),
        ];
    }

    protected static function getTemplateOptions(): array
    {
        $files = scandir(resource_path("views/projects"));
        $options = [];

        foreach ($files as $file) {
            if (str_ends_with($file, ".blade.php")) {
                $options[$file] = str_replace(".blade.php", "", $file);
            }
        }

        return $options;
    }
}
