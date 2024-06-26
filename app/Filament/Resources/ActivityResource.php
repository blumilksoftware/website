<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Enums\DateFormats;
use Blumilk\Website\Filament\Resources\ActivityResource\Pages;
use Blumilk\Website\Models\Activity;
use Blumilk\Website\Models\Tag;
use CodeZero\UniqueTranslation\UniqueTranslationRule;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class ActivityResource extends Resource
{
    use Translatable;

    protected static ?string $model = Activity::class;
    protected static ?string $label = "aktualność";
    protected static ?string $pluralLabel = "Aktualności";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";
    protected static bool $hasTitleCaseModelLabel = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
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
                        TranslatableContainer::make(
                            Forms\Components\TextInput::make("slug")
                                ->label("Slug")
                                ->required()
                                ->rules([
                                    fn(?Model $record): UniqueTranslationRule => UniqueTranslationRule::for("activities", "slug")->ignore($record?->getKey()),
                                ])
                                ->alphaDash()
                                ->maxLength(255),
                        )->requiredLocales(config("app.translatable_locales")),
                        Forms\Components\Checkbox::make("published")
                            ->label("Opublikowane"),
                        Forms\Components\DateTimePicker::make("published_at")
                            ->format(DateFormats::DATE_DISPLAY)
                            ->time(false)
                            ->required()
                            ->label("Data publikacji"),
                    ]),
                    Section::make([
                        TranslatableContainer::make(
                            Forms\Components\Textarea::make("description")
                                ->label("Opis")
                                ->required()
                                ->maxLength(65000),
                        )->requiredLocales(config("app.translatable_locales")),
                        Forms\Components\Select::make("tags")
                            ->label("Tagi")
                            ->multiple()
                            ->options(Tag::all()->pluck("title", "id")->toArray()),
                        Forms\Components\TextInput::make("url")
                            ->label("Url")
                            ->maxLength(2048),
                        Forms\Components\FileUpload::make("photo")
                            ->label("Zdjęcie")
                            ->required()
                            ->directory(Activity::PHOTOS_DIRECTORY)
                            ->multiple(false)
                            ->maxSize(1000),
                    ]),
                ])->from("lg"),
            ])->columns(1);
    }

    /**
     * @throws Exception
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")
                    ->label("Tytuł")
                    ->searchable(),
                Tables\Columns\CheckboxColumn::make("published")
                    ->label("Opublikowane"),
                Tables\Columns\TextColumn::make("published_at")
                    ->date(DateFormats::DATE_DISPLAY)
                    ->label("Data publikacji")
                    ->sortable(),
            ])->defaultSort("published_at", "desc")
            ->filters([
                TernaryFilter::make("published")
                    ->label("Status publikacji")
                    ->placeholder("Wszystkie")
                    ->trueLabel("Opublikowane")
                    ->falseLabel("Nieopublikowane"),
                Filter::make("published_at")
                    ->form([
                        Forms\Components\DatePicker::make("published_from")
                            ->label("Data publikacji od")
                            ->format(DateFormats::DATE_DISPLAY),
                        Forms\Components\DatePicker::make("published_to")
                            ->label("Data publikacji do")
                            ->format(DateFormats::DATE_DISPLAY),
                    ])->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data["published_from"],
                                fn(Builder $query, $date): Builder => $query->whereDate("published_at", ">=", $date),
                            )
                            ->when(
                                $data["published_to"],
                                fn(Builder $query, $date): Builder => $query->whereDate("published_at", "<=", $date),
                            );
                    }),
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
