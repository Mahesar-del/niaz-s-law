<?php
require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

foreach (\App\Models\BlogPost::all() as $post) {
    echo "ID: {$post->id} | Title: {$post->title}\n";
    preg_match_all('/<h[1-6][^>]*>(.*?)<\/h[1-6]>/i', $post->content, $matches);
    if (!empty($matches[1])) {
        foreach ($matches[1] as $heading) {
            echo "   - Heading: " . strip_tags($heading) . "\n";
        }
    }
}
