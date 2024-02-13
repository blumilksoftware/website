<?php

declare(strict_types=1);

namespace Blumilk\Website\Http\Controllers\Dashboard;

use Blumilk\Website\Http\Controllers\Controller;
use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthenticationController extends Controller
{
    public function get(Factory $factory): View
    {
        return $factory->make("dashboard.login");
    }

    public function login(Request $request, AuthManager $auth, Redirector $redirect): RedirectResponse
    {
        $credentials = $request->only("email", "password");

        if ($auth->attempt($credentials)) {
            $request->session()->regenerate();

            return $redirect->route("dashboard");
        }

        return $redirect->back()->withErrors([
            "email" => "Niepoprawne dane logowania",
        ]);
    }

    public function logout(Request $request, AuthManager $auth, Redirector $redirect): RedirectResponse
    {
        $auth->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->route("home");
    }
}
