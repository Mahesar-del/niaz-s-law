<?php

namespace App\Http\Controllers;

use App\Models\Attorney;

class AttorneysController extends Controller
{
    public function index()
    {
        return view('attorneys', ['attorneys' => Attorney::latest()->get()]);
    }
}
