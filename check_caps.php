<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Update "Real Estate Transactions" title
$updated = \App\Models\Capability::where('title', 'Real Estate Transactions')
    ->update(['title' => 'Real Estate & Property Transactions']);

if ($updated) {
    echo "Updated successfully!" . PHP_EOL;
} else {
    echo "Not found or already updated." . PHP_EOL;
    // Show all titles
    $caps = \App\Models\Capability::select('id', 'title')->get();
    foreach ($caps as $c) {
        echo $c->id . ' | ' . $c->title . PHP_EOL;
    }
}
