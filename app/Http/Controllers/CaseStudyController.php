<?php

namespace App\Http\Controllers;
use App\Models\BlogPost; use Illuminate\Support\Carbon;

class CaseStudyController extends Controller
{
    public function index()
    {
        $caseStudies = BlogPost::where('content_type','case_study')->where('status','published')->where(function($q){$q->whereNull('published_at')->orWhereDate('published_at','<=',Carbon::today());})->latest()->paginate(6);
        return view('case-study', compact('caseStudies'));
    }
}
