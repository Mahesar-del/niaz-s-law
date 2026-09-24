<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Fix the duplicate slug - revert "Real Estate & Property Transactions" back to "Real Estate Transactions"
// so the seeder can find and update it properly
$updated = \App\Models\Capability::where('title', 'Real Estate & Property Transactions')
    ->update([
        'title' => 'Real Estate Transactions',
        'slug'  => 'real-estate-transactions',
    ]);

echo "Fixed: " . $updated . " record(s)" . PHP_EOL;

// Show all capabilities now
$caps = \App\Models\Capability::select('id', 'title', 'slug')->get();
foreach ($caps as $c) {
    echo $c->id . ' | ' . $c->title . ' | ' . $c->slug . PHP_EOL;
}
