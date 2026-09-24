<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Update Database
$updated1 = \App\Models\Capability::where('title', 'Infrastructure & Construction')
    ->update([
        'title' => 'Infrastructure & Construction Projects',
        'slug'  => 'infrastructure-construction-projects',
    ]);
echo "Fixed DB Infrastructure: " . $updated1 . " record(s)\n";

$updated2 = \App\Models\Capability::where('title', 'Aviation & Transportation')
    ->update([
        'title' => 'Aviation, Logistics & Transportation',
        'slug'  => 'aviation-logistics-transportation',
    ]);
echo "Fixed DB Aviation: " . $updated2 . " record(s)\n";

// Update BlogContentSeeder.php
$file = __DIR__ . '/database/seeders/BlogContentSeeder.php';
$content = file_get_contents($file);
$content = str_replace("'Infrastructure & Construction'", "'Infrastructure & Construction Projects'", $content);
$content = str_replace("'Aviation & Transportation'", "'Aviation, Logistics & Transportation'", $content);
file_put_contents($file, $content);
echo "Fixed Seeder.\n";

// Clear view cache
Artisan::call('view:clear');
echo "Cleared view cache.\n";
