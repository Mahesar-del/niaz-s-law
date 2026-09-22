<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageSetting extends Model
{
    protected $fillable = [
        'hero_image',
        'hero_heading',
        'hero_button_text',
        'hero_button_link',
    ];
}
