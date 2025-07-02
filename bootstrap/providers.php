<?php

declare(strict_types=1);

use App\Providers\TelescopeServiceProvider;
use Blumilk\Website\Providers\AppServiceProvider;
use Blumilk\Website\Providers\Filament\AdminPanelProvider;

return [
    TelescopeServiceProvider::class,
    AppServiceProvider::class,
    AdminPanelProvider::class,
];
