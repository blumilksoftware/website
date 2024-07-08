<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\ContactFormResource\Actions;

use Blumilk\Website\DTOs\ContactFormResponse;
use Blumilk\Website\Enums\ContactFormStatus;
use Blumilk\Website\Mail\ContactFormResponded;
use Blumilk\Website\Models\ContactForm;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;

class RespondToContactFormMessageAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->label("Odpowiedz")
            ->icon("heroicon-m-envelope")
            ->color("success")
            ->visible(fn($record): bool => $record->status !== ContactFormStatus::Responded)
            ->form([
                Forms\Components\Section::make([
                    Forms\Components\TextInput::make("email")
                        ->label("E-mail")
                        ->disabled()
                        ->default(fn($record) => $record->email),
                    Forms\Components\TextInput::make("topic")
                        ->label("Temat")
                        ->disabled()
                        ->default(fn($record) => $record->topic),
                    Forms\Components\Textarea::make("message")
                        ->label("Wiadomość")
                        ->default(fn($record) => $record->message)
                        ->disabled(),
                ]),
                Forms\Components\TextInput::make("responseTopic")
                    ->label("Tytuł odpowiedzi")
                    ->default(fn($record) => "Re: " . $record->topic),
                Forms\Components\RichEditor::make("response")
                    ->label("Odpowiedź")
                    ->disableToolbarButtons(["attachFiles", "codeBlock", "blockquote"])
                    ->maxLength(65000)
                    ->required(),
            ])
            ->action(function (ContactForm $record, array $data): void {
                $details = ContactFormResponse::fromArray($record, $data);

                Mail::to($record->email)->send(new ContactFormResponded($details));

                $record->update([
                    "response" => $details->response,
                    "status" => ContactFormStatus::Responded,
                ]);

                Notification::make()
                    ->title("Sukces")
                    ->body("E-mail został pomyślnie wysłany.")
                    ->success()
                    ->send();
            })
            ->modalHeading("Wyślij odpowiedź na e-mail")
            ->modalButton("Wyślij e-mail");
    }
}
