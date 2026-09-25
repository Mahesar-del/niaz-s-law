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

    public function submit(\Illuminate\Http\Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'company' => 'nullable|string|max:100',
            'practice' => 'required|string',
            'message' => 'required|string',
        ]);

        $contactEmail = ContactSetting::first()->email ?? 'info@niazlawpc.com';

        \Illuminate\Support\Facades\Mail::to($contactEmail)->send(new \App\Mail\ContactInquiry($data));

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['message' => 'Your inquiry has been sent successfully. We will get back to you soon.']);
        }

        return redirect()->back()->with('success', 'Your inquiry has been sent successfully. We will get back to you soon.');
    }
}
