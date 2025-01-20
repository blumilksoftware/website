<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Enums\DateFormats;
use Blumilk\Website\Filament\Resources\NewsResource\Pages;
use Blumilk\Website\Helpers\ImageConverter;
use Blumilk\Website\Models\News;
use Blumilk\Website\Models\Tag;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;

class NewsResource extends Resource
{
    use Translatable;

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
                                ->maxLength(255)
                                ->live(onBlur: true)
                                ->afterStateUpdated(
                                    fn(Set $set, Component $component, ?string $state) => $component->getMeta("locale") === "pl"
                                        ? $set("../slug", Str::slug($state))
                                        : null,
                                ),
                        )->requiredLocales(config("app.translatable_locales")),
                        Forms\Components\TextInput::make("slug")
                            ->label("Slug")
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->alphaDash()
                            ->maxLength(255),
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
                            Forms\Components\RichEditor::make("description")
                                ->label("Opis")
                                ->disableToolbarButtons(["attachFiles"])
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
                            ->directory(News::PHOTOS_DIRECTORY)
                            ->saveUploadedFileUsing(fn(TemporaryUploadedFile $file): string => ImageConverter::convertToWebp($file, News::PHOTOS_DIRECTORY))
                            ->rules(["mimes:jpeg,png,webp"])
                            ->multiple(false)
                            ->maxSize(2500),
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
            "index" => Pages\ListNews::route("/"),
            "create" => Pages\CreateNews::route("/create"),
            "edit" => Pages\EditNews::route("/{record}/edit"),
        ];
    }

    public static function getTranslatableLocales(): array
    {
        return config("app.translatable_locales");
    }

    protected static ?string $model = News::class;
    protected static ?string $label = "aktualność";
    protected static ?string $pluralLabel = "Aktualności";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";
    protected static bool $hasTitleCaseModelLabel = false;
}
