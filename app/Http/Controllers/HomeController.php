<?php

namespace App\Http\Controllers;

use App\Models\HomePageSetting;
use App\Models\HeroSlide;
use App\Models\ContactSetting;
use App\Models\BlogPost;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'homeSettings' => HomePageSetting::first(),
            'heroSlides' => HeroSlide::orderBy('position')->get(),
            'contactSettings' => ContactSetting::first(),
            'homePosts' => BlogPost::where('status','published')->where('show_on_home',true)->where(function($q){$q->whereNull('published_at')->orWhereDate('published_at','<=',Carbon::today());})->orderByDesc('published_at')->take(4)->get(),
        ]);
    }
}
