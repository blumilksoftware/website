<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Enums\ContactFormStatus;
use Blumilk\Website\Enums\DateFormats;
use Blumilk\Website\Filament\Resources\ContactFormResource\Pages;
use Blumilk\Website\Mail\ContactFormResponded;
use Blumilk\Website\Models\ContactForm;
use Blumilk\Website\Notifications\ContactFormRespond;
use Exception;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Mail;

class ContactFormResource extends Resource
{
    protected static ?string $model = ContactForm::class;
    protected static ?string $label = "wiadomość";
    protected static ?string $pluralLabel = "Wiadomości";
    protected static ?string $navigationIcon = "heroicon-o-envelope-open";
    protected static bool $hasTitleCaseModelLabel = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        Forms\Components\TextInput::make("email")
                            ->label("E-mail")
                            ->disabled(),
                        Forms\Components\Select::make("status")
                            ->label("Status")
                            ->options(ContactFormStatus::class)
                            ->required(),
                    ]),
                    Section::make([
                        Forms\Components\Textarea::make("message")
                            ->rows(4)
                            ->label("Wiadomość")
                            ->disabled(),
                        Forms\Components\RichEditor::make("respond")
                            ->label("Odpowiedź")
                            ->disableToolbarButtons(["attachFiles"])
                            ->maxLength(65000)
                            ->disabled()
                            ->visible( fn($record) => $record->status === ContactFormStatus::Responded),
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
                Tables\Columns\TextColumn::make("email")
                    ->label("E-mail")
                    ->searchable(),
                Tables\Columns\TextColumn::make("status")
                    ->badge()
                    ->colors([
                        "warning" => static fn($state): bool => $state === ContactFormStatus::Read,
                        "danger" => static fn($state): bool => $state === ContactFormStatus::Unread,
                        "success" => static fn($state): bool => $state === ContactFormStatus::Responded,
                    ])
                    ->label("Status"),
                Tables\Columns\TextColumn::make("created_at")
                    ->date(DateFormats::DATE_DISPLAY)
                    ->label("Data kontaktu")
                    ->sortable(),
            ])->filters([
                Filter::make("published_at")
                    ->form([
                        Forms\Components\DatePicker::make("created_from")
                            ->label("Data od")
                            ->format(DateFormats::DATE_DISPLAY),
                        Forms\Components\DatePicker::make("created_to")
                            ->label("Data do")
                            ->format(DateFormats::DATE_DISPLAY),
                    ])->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data["created_from"],
                                fn(Builder $query, $date): Builder => $query->whereDate("created_at", ">=", $date),
                            )
                            ->when(
                                $data["created_to"],
                                fn(Builder $query, $date): Builder => $query->whereDate("created_at", "<=", $date),
                            );
                    }),
                SelectFilter::make("status")
                    ->label("Status wiadomości")
                    ->options(ContactFormStatus::class),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Action::make('sendEmail')
                    ->label('Wyślij email')
                    ->icon('heroicon-m-envelope')
                    ->color('success')
                    ->visible(fn ($record) => $record->status !== ContactFormStatus::Responded)
                    ->form([
                        Forms\Components\TextInput::make("email")
                            ->label("E-mail")
                            ->disabled()
                            ->default(fn ($record) => $record->email),
                        Forms\Components\TextInput::make("topic")
                            ->label("Temat")
                            ->disabled()
                            ->default(fn ($record) => $record->topic),
                        Forms\Components\Textarea::make('message')
                            ->label('Wiadomość')
                            ->default(fn ($record) => $record->message)
                            ->disabled(),
                        Forms\Components\RichEditor::make("response")
                            ->label("Odpowiedź")
                            ->disableToolbarButtons(["attachFiles"])
                            ->maxLength(65000)
                            ->required(),
                    ])
                    ->action(function ($record, $data) {
                        $details = [
                            'subject' => $record->email,
                            'message' => $data['response'],
                        ];

                        Mail::to($record->email)->send(new ContactFormResponded($details));
                    })
                    ->modalHeading('Wyślij odpowiedź na e-mail')
                    ->modalButton('Wyślij email'),
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
            "edit" => Pages\EditActivity::route("/{record}/edit"),
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }
}
