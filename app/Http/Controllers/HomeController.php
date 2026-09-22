<?php

namespace App\Http\Controllers;

use App\Models\HomePageSetting;
use App\Models\HeroSlide;
use App\Models\ContactSetting;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'homeSettings' => HomePageSetting::first(),
            'heroSlides' => HeroSlide::orderBy('position')->get(),
            'contactSettings' => ContactSetting::first(),
        ]);
    }
}
