<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capability;
use Illuminate\Support\Carbon;

class CapabilitiesController extends Controller
{
    public function index()
    {
        return view('capabilities', ['adminCapabilities' => Capability::latest()->get()]);
    }

    public function show(Capability $capability)
    {
        $capability->load('attorneys');
        return view('commercial-transactions', compact('capability') + ['capabilityPosts'=>$capability->blogPosts()->where('status','published')->where(function($q){$q->whereNull('published_at')->orWhereDate('published_at','<=',Carbon::today());})->latest()->get()]);
    }
}
