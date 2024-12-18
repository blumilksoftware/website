<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Enums\Role;
use Blumilk\Website\Filament\Resources\UserResource\Pages;
use Blumilk\Website\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Split;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserResource extends Resource
{
    public static function form(Form $form): Form
    {
        /** @var User $authUser */
        $authUser = auth()->user();

        return $form
            ->schema([
                Split::make([
                    Section::make([
                        Forms\Components\TextInput::make("name")
                            ->label("Imię i nazwisko")
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make("email")
                            ->label("E-mail")
                            ->required()
                            ->maxLength(255)
                            ->email()
                            ->unique(ignoreRecord: true),
                        Forms\Components\Select::make("role")
                            ->label("Rola")
                            ->disabled(fn(string $context): bool => !($context === "create") && $authUser->id === $form->model->id)
                            ->options(Role::class)
                            ->required(),
                    ]),
                    Section::make([
                        Forms\Components\TextInput::make("password")
                            ->label("Hasło")
                            ->minValue(8)
                            ->required(fn(string $context): bool => $context === "create")
                            ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                            ->dehydrated(fn(?string $state): bool => filled($state))
                            ->password()
                            ->confirmed(),
                        Forms\Components\TextInput::make("password_confirmation")
                            ->label("Potwierdź hasło")
                            ->required(fn(string $context): bool => $context === "create")
                            ->dehydrateStateUsing(fn(string $state): string => Hash::make($state))
                            ->dehydrated(fn(?string $state): bool => filled($state))
                            ->password(),
                        Forms\Components\Checkbox::make("active")
                            ->disabled(fn(User $user): bool => $user->id === $authUser->id)
                            ->label("Aktywny")
                            ->default(true),
                    ]),
                ])->from("lg"),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")
                    ->label("Imię i nazwisko")
                    ->searchable(),
                Tables\Columns\TextColumn::make("email")
                    ->label("E-mail")
                    ->searchable(),
                Tables\Columns\CheckboxColumn::make("active")
                    ->disabled(fn(User $user): bool => $user->id === auth()->user()->id)
                    ->label("Aktywny"),
                Tables\Columns\TextColumn::make("role")
                    ->label("Rola"),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            "index" => Pages\ListUsers::route("/"),
            "create" => Pages\CreateUser::route("/create"),
            "edit" => Pages\EditUser::route("/{record}/edit"),
        ];
    }

    public static function canAccess(): bool
    {
        return auth()->user()->isAdmin();
    }

    public static function canDelete(Model $record): bool
    {
        /** @var User $user */
        $user = auth()->user();

        return $user->isAdmin() && $record->id !== $user->id;
    }

    protected static ?string $model = User::class;
    protected static ?string $label = "użytkownika";
    protected static ?string $pluralLabel = "Użytkownicy";
    protected static ?string $navigationIcon = "heroicon-o-user-group";
    protected static bool $hasTitleCaseModelLabel = false;
}
