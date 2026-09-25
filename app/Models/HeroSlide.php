<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSlide extends Model
{
    protected $fillable = [
        'position',
        'image',
        'mobile_image',
        'heading',
        'button_text',
        'button_link',
    ];
}
