<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSetting;
use Illuminate\Http\Request;

class ContactSettingController extends Controller
{
    public function edit()
    {
        $settings = ContactSetting::firstOrCreate(['id' => 1], [
            'franklin_address' => "9933 Franklin Ave.\nFranklin Park, IL 60131",
            'naperville_address' => "3333 Warrenville Road, Suite 200\nLisle, IL 60532, USA",
            'phone' => '(630) 201-5927',
            'email' => 'info@niazlawpc.com',
        ]);

        return view('admin.contact-settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'franklin_address' => ['required', 'string', 'max:500'],
            'naperville_address' => ['required', 'string', 'max:500'],
            'phone' => ['required', 'string', 'max:40'],
            'email' => ['required', 'email', 'max:255'],
        ]);

        ContactSetting::updateOrCreate(['id' => 1], $data);

        return back()->with('success', 'Contact information updated successfully.');
    }
}
