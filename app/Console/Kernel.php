<?php

declare(strict_types=1);

namespace Blumilk\Website\Console;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function commands(): void
    {
        $this->load(__DIR__ . "/Commands");
    }
}
