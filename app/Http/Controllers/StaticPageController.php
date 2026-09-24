<?php
namespace App\Http\Controllers;
use App\Models\StaticPage;
class StaticPageController extends Controller { public function show(StaticPage $page){abort_unless($page->status==='published',404);return view('static-page',compact('page'));} }
