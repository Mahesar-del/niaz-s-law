<?php

namespace App\Http\Controllers;

use App\Models\ContactSetting;
use App\Models\Capability;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us', [
            'contactSettings' => ContactSetting::first(),
            'capabilities' => Capability::orderBy('title')->get(),
        ]);
    }
}
