<?php

declare(strict_types=1);

use Blumilk\Website\Http\Controllers\ContactController;
use Blumilk\Website\Http\Controllers\HomeController;
use Illuminate\Routing\Router;
use Illuminate\Translation\Translator;

/** @var Router $router */
$router = app(Router::class);
$lang = app(Translator::class);

$router->get("/", HomeController::class)->name("home");
$router->get($lang->uri("contact"), ContactController::class)->name("contact");
