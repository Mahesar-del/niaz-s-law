<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageSetting;
use App\Models\HeroSlide;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomePageSettingController extends Controller
{
    public function edit()
    {
        $settings = HomePageSetting::firstOrCreate(
            ['id' => 1],
            [
                'hero_image' => 'home-hero.png',
                'hero_heading' => "We Stand With You.\nWe Fight for Justice.",
                'hero_button_text' => 'Contact Us',
                'hero_button_link' => '/contact-us',
            ]
        );

        if (HeroSlide::count() === 0) {
            for ($position = 1; $position <= 3; $position++) {
                HeroSlide::create([
                    'position' => $position,
                    'image' => $settings->hero_image,
                    'heading' => $settings->hero_heading,
                    'button_text' => $settings->hero_button_text,
                    'button_link' => $settings->hero_button_link,
                ]);
            }
        }

        $slides = HeroSlide::orderBy('position')->get();

        return view('admin.home-page-settings', compact('slides'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'slides' => ['required', 'array', 'min:1', 'max:3'],
            'slides.*.heading' => ['required', 'string', 'max:500'],
            'slides.*.button_text' => ['required', 'string', 'max:60'],
            'slides.*.button_link' => ['required', 'string', 'max:255'],
            'slides.*.image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
        ]);

        foreach ($data['slides'] as $position => $slideData) {
            $slide = HeroSlide::firstOrCreate(
                ['position' => (int) $position],
                [
                    'image' => 'home-hero.png',
                    'heading' => $slideData['heading'],
                    'button_text' => $slideData['button_text'],
                    'button_link' => $slideData['button_link'],
                ]
            );

            if ($request->hasFile("slides.$position.image")) {
                $image = $request->file("slides.$position.image");
                $fileName = 'hero-slide-' . $position . '.' . strtolower($image->getClientOriginalExtension());
                $image->move(public_path('images'), $fileName);
                $slide->image = $fileName;
            }

            $slide->fill([
                'heading' => $slideData['heading'],
                'button_text' => $slideData['button_text'],
                'button_link' => $slideData['button_link'],
            ])->save();
        }

        return back()->with('success', 'Hero slides updated successfully.');
    }

    public function createSlide()
    {
        if (HeroSlide::count() >= 3) {
            return back()->with('error', 'You can add a maximum of three hero slides.');
        }

        $nextPosition = (HeroSlide::max('position') ?? 0) + 1;

        HeroSlide::create([
            'position' => $nextPosition,
            'image' => 'home-hero.png',
            'heading' => "We Stand With You.\nWe Fight for Justice.",
            'button_text' => 'Contact Us',
            'button_link' => '/contact-us',
        ]);

        return back()->with('success', 'A new hero slide has been added.');
    }

    public function destroySlide(HeroSlide $heroSlide)
    {
        if (HeroSlide::count() <= 1) {
            return back()->with('error', 'At least one hero slide is required.');
        }

        $heroSlide->delete();

        return back()->with('success', 'Hero slide deleted successfully.');
    }
}
