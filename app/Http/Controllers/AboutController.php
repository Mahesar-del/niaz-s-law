<?php
namespace App\Http\Controllers;
use App\Models\Capability; use App\Models\Attorney;
class AboutController extends Controller { public function index(){return view('about',['aboutCapabilities'=>Capability::latest()->take(4)->get(),'aboutAttorneys'=>Attorney::orderBy('name')->get()]);} }
