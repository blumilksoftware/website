<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources;

use Blumilk\Website\Filament\Resources\UserResource\Pages;
use Blumilk\Website\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $label = "Użytkownik";
    protected static ?string $pluralLabel = "Użytkownicy";
    protected static ?string $navigationIcon = "heroicon-o-rectangle-stack";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                Forms\Components\TextInput::make("password")
                    ->label("Hasło")
                    ->required()
                    ->password()
                    ->confirmed(),
                Forms\Components\TextInput::make("password_confirmation")
                    ->label("Potwierdź hasło")
                    ->required()
                    ->password(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")
                    ->label("Imię i nazwisko"),
                Tables\Columns\TextColumn::make("email")
                    ->label("E-mail"),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            "index" => Pages\ListUsers::route("/"),
            "create" => Pages\CreateUser::route("/create"),
            "edit" => Pages\EditUser::route("/{record}/edit"),
        ];
    }
}
