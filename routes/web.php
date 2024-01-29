<?php

declare(strict_types=1);

use Blumilk\Website\Http\Controllers\AboutController;
use Blumilk\Website\Http\Controllers\CareerController;
use Blumilk\Website\Http\Controllers\CaseStudiesController;
use Blumilk\Website\Http\Controllers\ContactController;
use Blumilk\Website\Http\Controllers\EventsController;
use Blumilk\Website\Http\Controllers\HomeController;
use Blumilk\Website\Http\Controllers\LegalController;
use Blumilk\Website\Http\Controllers\MeetupsController;
use Blumilk\Website\Http\Controllers\PartnersController;
use Illuminate\Routing\Router;
use Illuminate\Translation\Translator;

/** @var Router $router */
$router = app(Router::class);
$lang = app(Translator::class);

$router->get("/", HomeController::class)->name("home");
$router->get($lang->uri("about"), AboutController::class)->name("about");
$router->get($lang->uri("case-studies"), [CaseStudiesController::class, "index"])->name("case-studies");
$router->get($lang->uri("case-studies/{slug}"), [CaseStudiesController::class, "get"])->name("case-studies.entry");
$router->get($lang->uri("partners"), PartnersController::class)->name("partners");
$router->get($lang->uri("career"), CareerController::class)->name("career");
$router->get($lang->uri("contact"), ContactController::class)->name("contact");

$router->get($lang->uri("meetups"), MeetupsController::class)->name("meetups");
$router->get($lang->uri("events"), [EventsController::class, "index"])->name("events");
$router->get($lang->uri("events/{slug}"), [EventsController::class, "get"])->name("event");
$router->get($lang->uri("legal"), LegalController::class)->name("legal");
