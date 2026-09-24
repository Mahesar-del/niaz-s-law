<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$updated = \App\Models\Capability::where('title', 'Real Estate Transactions')
    ->update([
        'title' => 'Real Estate & Property Transactions',
        'slug'  => 'real-estate-property-transactions',
    ]);

echo "Fixed: " . $updated . " record(s)" . PHP_EOL;
