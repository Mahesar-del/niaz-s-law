<?php

namespace Database\Seeders;

use App\Models\HomePageSetting;
use Illuminate\Database\Seeder;

class HomePageSettingSeeder extends Seeder
{
    public function run()
    {
        HomePageSetting::firstOrCreate(
            ['id' => 1],
            [
                'hero_image' => 'home-hero.png',
                'hero_heading' => "We Stand With You.\nWe Fight for Justice.",
                'hero_button_text' => 'Contact Us',
                'hero_button_link' => '/contact-us',
            ]
        );
    }
}
