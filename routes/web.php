<?php

declare(strict_types=1);

use Blumilk\Website\Http\Controllers\AboutController;
use Blumilk\Website\Http\Controllers\ActivitiesController;
use Blumilk\Website\Http\Controllers\CareerController;
use Blumilk\Website\Http\Controllers\CaseStudiesController;
use Blumilk\Website\Http\Controllers\ContactController;
use Blumilk\Website\Http\Controllers\HomeController;
use Blumilk\Website\Http\Controllers\LegalController;
use Blumilk\Website\Http\Controllers\MeetupsController;
use Blumilk\Website\Http\Controllers\PartnersController;
use CodeZero\UriTranslator\UriTranslator;
use Illuminate\Routing\Router;

/** @var Router $router */
$router = app(Router::class);
/** @var UriTranslator $uri */
$uri = app(UriTranslator::class);

$router->get("/", HomeController::class)->name("home");
$router->get($uri->translate("about"), AboutController::class)->name("about");
$router->get($uri->translate("case-studies"), [CaseStudiesController::class, "index"])->name("case-studies");
$router->get($uri->translate("case-studies/{slug}"), [CaseStudiesController::class, "get"])->name("case-studies.entry");
$router->get($uri->translate("partners"), PartnersController::class)->name("partners");
$router->get($uri->translate("career"), [CareerController::class, "index"])->name("career");
$router->get($uri->translate("career/software-engineer"), [CareerController::class, "softwareEngineerPage"])->name("career.software-engineer");
$router->get($uri->translate("contact"), ContactController::class)->name("contact");

$router->get($uri->translate("meetups"), MeetupsController::class)->name("meetups");
$router->get($uri->translate("activities"), [ActivitiesController::class, "index"])->name("activities");
$router->get($uri->translate("activities/{slug}"), [ActivitiesController::class, "get"])->name("activities.entry");
$router->get($uri->translate("legal"), LegalController::class)->name("legal");
