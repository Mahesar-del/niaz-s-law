<?php

namespace App\Http\Controllers;
use App\Models\BlogPost; use Illuminate\Support\Carbon;

class InsightsController extends Controller
{
    public function index()
    {
        return view('insights-page',['insights'=>BlogPost::where('content_type','insight')->where('status','published')->where(function($q){$q->whereNull('published_at')->orWhereDate('published_at','<=',Carbon::today());})->latest()->get()]);
    }
}
