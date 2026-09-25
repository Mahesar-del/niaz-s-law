<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\BlogPost;

$post7 = BlogPost::find(7);
if ($post7) { $post7->featured_image = 'images/infra_practical_study.jpg'; $post7->save(); }

$post9 = BlogPost::find(9);
if ($post9) { $post9->featured_image = 'images/infra_business_leaders.jpg'; $post9->save(); }

$post13 = BlogPost::find(13);
if ($post13) { $post13->featured_image = 'images/infra_risk_management.jpg'; $post13->save(); }

// For duplicates in Commercial / Aviation
$images = ['images/cap_corporate.jpg', 'images/cap_real_estate_new.jpg', 'images/inside-court.jpg', 'images/cap_aviation_new.jpg'];
$posts = BlogPost::whereIn('id', [4, 6, 10, 12])->get();
foreach ($posts as $i => $post) {
    $post->featured_image = $images[$i % count($images)];
    $post->save();
}
echo "Updated blog posts successfully.\n";
