<?php
$data = [
    [
        'title' => 'Corporate Transactions & Governance',
        'image' => 'images/cap_corporate.jpg',
    ],
    [
        'title' => 'Commercial Operations & Strategic Sourcing',
        'image' => 'images/cap_commercial.jpg',
    ],
    [
        'title' => 'Infrastructure & Construction',
        'image' => 'images/cap_infrastructure.jpg',
    ],
    [
        'title' => 'Aviation & Transportation',
        'image' => 'images/cap_commercial.jpg', // Re-using premium image
    ],
    [
        'title' => 'Real Estate Transactions',
        'image' => 'images/cap_infrastructure.jpg', // Fits Real Estate
    ],
];

foreach ($data as $d) {
    $cap = \App\Models\Capability::where('title', $d['title'])->first();
    if ($cap) {
        $cap->image = $d['image'];
        $cap->save();
    }
}
echo 'Premium images updated in database';
