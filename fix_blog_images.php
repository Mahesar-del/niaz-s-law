<?php
$blogs = \App\Models\BlogPost::all();
$defaultImage = 'images/commercial-big.jpg';

foreach($blogs as $blog) {
    if ($blog->featured_image) {
        $path = ltrim($blog->featured_image, '/');
        // Check if it's in public/images
        if (strpos($path, 'images/') === 0 && !file_exists(public_path($path))) {
            $blog->featured_image = $defaultImage;
            $blog->save();
        } 
        // Otherwise, it should be in storage
        elseif (strpos($path, 'images/') !== 0 && !file_exists(storage_path('app/public/' . $path))) {
            $blog->featured_image = $defaultImage;
            $blog->save();
        }
    } else {
        $blog->featured_image = $defaultImage;
        $blog->save();
    }
}
echo 'Fixed broken blog images.';
