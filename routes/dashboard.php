<?php

declare(strict_types=1);

use Blumilk\Website\Http\Controllers\Dashboard\AuthenticationController;
use Blumilk\Website\Http\Controllers\Dashboard\DashboardController;
use Blumilk\Website\Http\Controllers\Dashboard\PasswordUpdateController;
use Illuminate\Routing\Router;

/** @var Router $router */
$router = app(Router::class);

$router->middleware("guest")->group(function () use ($router): void {
    $router->get("/login", [AuthenticationController::class, "get"])->name("login");
    $router->post("/login", [AuthenticationController::class, "login"]);
});

$router->middleware("auth")->group(function () use ($router): void {
    $router->get("/", DashboardController::class)->name("dashboard");
    $router->post("/logout", [AuthenticationController::class, "logout"])->name("logout");
    $router->get("/password", [PasswordUpdateController::class, "edit"])->name("password.edit");
    $router->patch("/password", [PasswordUpdateController::class, "update"])->name("password.update");
});
