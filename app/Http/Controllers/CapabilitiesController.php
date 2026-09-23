<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capability;

class CapabilitiesController extends Controller
{
    public function index()
    {
        return view('capabilities', ['adminCapabilities' => Capability::latest()->get()]);
    }
}
