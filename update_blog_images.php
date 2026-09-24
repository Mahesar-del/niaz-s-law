<?php

use Illuminate\Foundation\Application;

define('LARAVEL_START', microtime(true));
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$images = [
    'images/cap_commercial.jpg',
    'images/cap_corporate.jpg',
    'images/cap_infrastructure.jpg',
    'images/infrastructure_construction_blog.jpg',
    'images/Insights-new.webp',
    'images/Case-Study-new.webp',
    'images/inside-court.jpg',
    'images/commercial-transection-hero.png'
];

$posts = \App\Models\BlogPost::all();

foreach ($posts as $i => $post) {
    if (strpos($post->title, 'Commercial Operations') !== false) {
        $post->featured_image = 'images/cap_commercial.jpg';
    } elseif (strpos($post->title, 'Infrastructure') !== false) {
        $post->featured_image = 'images/infrastructure_construction_blog.jpg';
    } elseif (strpos($post->title, 'Real Estate Transactions') !== false) {
        $post->featured_image = 'images/Insights-new.webp';
    } else {
        $post->featured_image = $images[$i % count($images)];
    }
    $post->save();
}

echo "Updated images for " . count($posts) . " blog posts.\n";
