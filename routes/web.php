<?php

declare(strict_types=1);

use Blumilk\Website\Http\Controllers\AboutController;
use Blumilk\Website\Http\Controllers\CareerController;
use Blumilk\Website\Http\Controllers\CompanyDataController;
use Blumilk\Website\Http\Controllers\ContactController;
use Blumilk\Website\Http\Controllers\HomeController;
use Blumilk\Website\Http\Controllers\LogoController;
use Blumilk\Website\Http\Controllers\NewsController;
use Blumilk\Website\Http\Controllers\PolicyController;
use Blumilk\Website\Http\Controllers\ProjectsController;
use CodeZero\LocalizedRoutes\Controllers\FallbackController;
use CodeZero\UriTranslator\UriTranslator;
use Illuminate\Routing\Router;

/** @var Router $router */
$router = app(Router::class);
/** @var UriTranslator $uri */
$uri = app(UriTranslator::class);

$router->get("/", HomeController::class)->name("home");
$router->get($uri->translate("about"), AboutController::class)->name("about");
$router->get($uri->translate("projects"), [ProjectsController::class, "index"])->name("projects");
$router->get($uri->translate("projects/{slug}"), [ProjectsController::class, "get"])->name("projects.entry");
$router->get($uri->translate("career"), [CareerController::class, "index"])->name("career");
$router->get($uri->translate("career/software-engineer"), [CareerController::class, "softwareEngineerPage"])->name("career.software-engineer");
$router->get($uri->translate("contact"), [ContactController::class, "index"])->name("contact");
$router->post($uri->translate("contact"), [ContactController::class, "store"])->name("contact.create");
$router->get($uri->translate("privacy-policy"), PolicyController::class)->name("privacy-policy");
$router->get($uri->translate("logo"), LogoController::class)->name("logo");

$router->get($uri->translate("news"), [NewsController::class, "index"])->name("news");
$router->get($uri->translate("news/{slug}"), [NewsController::class, "get"])->name("news.entry");
$router->get($uri->translate("company-data"), CompanyDataController::class)->name("data");

$router->get("/edu-landing", [HomeController::class, "eduLanding"]);

$router->fallback(FallbackController::class);
