<?php

namespace App\Http\Controllers;

use App\Models\ContactSetting;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact-us', ['contactSettings' => ContactSetting::first()]);
    }
}
