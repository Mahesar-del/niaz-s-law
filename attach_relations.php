<?php
$capabilities = \App\Models\Capability::all();
$attorneyId = 2;
$blogIds = [8, 10, 4, 6, 12, 1, 3, 5, 7, 9, 11];

foreach ($capabilities as $cap) {
    // Attach attorney
    $cap->attorneys()->sync([$attorneyId]);
    
    // Attach 2 random blogs
    shuffle($blogIds);
    $selectedBlogs = array_slice($blogIds, 0, 2);
    $cap->blogPosts()->sync($selectedBlogs);
}
echo 'Successfully attached attorneys and blogs to all capabilities.';
