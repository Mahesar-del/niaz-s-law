<?php
namespace App\Http\Controllers;
use App\Models\Attorney;
use Illuminate\Support\Carbon;
class AttorneyDetailController extends Controller { public function show(Attorney $attorney){return view('attorney-detail',compact('attorney') + ['attorneyPosts'=>$attorney->blogPosts()->where('status','published')->where(function($q){$q->whereNull('published_at')->orWhereDate('published_at','<=',Carbon::today());})->latest()->get()]);} }
