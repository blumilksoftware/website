<?php

declare(strict_types=1);

namespace Blumilk\Website\Filament\Resources\EdulandingContactFormResource\Actions;

use Blumilk\Website\DTOs\EdulandingContactFormResponse;
use Blumilk\Website\Enums\ContactFormStatus;
use Blumilk\Website\Mail\EdulandingContactFormResponded;
use Blumilk\Website\Models\EdulandingContactForm;
use Filament\Forms;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Illuminate\Support\Facades\Mail;

class RespondToEdulandingContactFormMessageAction extends Action
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
                    Forms\Components\TextInput::make("full_name")
                        ->label("Imię i nazwisko")
                        ->disabled()
                        ->default(fn($record) => $record->full_name),
                    Forms\Components\TextInput::make("company_name")
                        ->label("Nazwa firmy")
                        ->disabled()
                        ->default(fn($record) => $record->company_name),
                    Forms\Components\Textarea::make("message")
                        ->label("Wiadomość")
                        ->default(fn($record) => $record->message)
                        ->disabled(),
                ]),
                Forms\Components\TextInput::make("responseTopic")
                    ->label("Tytuł odpowiedzi")
                    ->default(fn($record) => "Re: " . $record->company_name),
                Forms\Components\RichEditor::make("response")
                    ->label("Odpowiedź")
                    ->disableToolbarButtons(["attachFiles", "codeBlock", "blockquote"])
                    ->maxLength(65000)
                    ->required(),
            ])
            ->action(function (EdulandingContactForm $record, array $data): void {
                app()->setLocale($record->lang);

                $details = EdulandingContactFormResponse::fromArray($record, $data);

                Mail::to($record->email)->send(new EdulandingContactFormResponded($details));

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
