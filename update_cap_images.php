<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Update Real Estate
\App\Models\Capability::where('title', 'like', '%Real Estate%')
    ->update(['image' => 'images/cap_real_estate_new.jpg']);

// Update Aviation
\App\Models\Capability::where('title', 'like', '%Aviation%')
    ->update(['image' => 'images/cap_aviation_new.jpg']);

// Update Infrastructure
\App\Models\Capability::where('title', 'like', '%Infrastructure%')
    ->update(['image' => 'images/cap_infrastructure_new.jpg']);

echo "Updated images for Capabilities.\n";
