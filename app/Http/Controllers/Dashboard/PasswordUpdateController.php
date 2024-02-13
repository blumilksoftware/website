<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers\Dashboard;

use Blumilk\Website\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordUpdateController extends Controller
{
    public function edit(Factory $factory): View
    {
        return $factory->make("dashboard.password");
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            "current_password" => ["required", "current_password"],
            "password" => ["required", Password::defaults(), "confirmed"],
        ]);

        $request->user()->update([
            "password" => Hash::make($validated["password"]),
        ]);

        return redirect()->back()
            ->with("success", "Zaktualizowano hasło");
    }
}
