<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run()
    {
        for ($position = 1; $position <= 3; $position++) {
            HeroSlide::firstOrCreate(
                ['position' => $position],
                [
                    'image' => 'home-hero.png',
                    'heading' => "We Stand With You.\nWe Fight for Justice.",
                    'button_text' => 'Contact Us',
                    'button_link' => '/contact-us',
                ]
            );
        }
    }
}
