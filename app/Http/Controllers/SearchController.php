<?php

namespace App\Http\Controllers;

use App\Models\Attorney;
use App\Models\BlogPost;
use App\Models\Capability;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = trim((string) $request->query('q'));
        $like = '%' . $query . '%';

        return view('search-results', [
            'query' => $query,
            'posts' => $query === '' ? collect() : BlogPost::where('status', 'published')->where(function ($builder) use ($like) {$builder->where('title', 'like', $like)->orWhere('category', 'like', $like)->orWhere('content', 'like', $like);})->latest()->get(),
            'capabilities' => $query === '' ? collect() : Capability::where('title', 'like', $like)->orWhere('description', 'like', $like)->get(),
            'attorneys' => $query === '' ? collect() : Attorney::where('name', 'like', $like)->orWhere('practice', 'like', $like)->orWhere('industry', 'like', $like)->get(),
            'pages' => $query === '' ? collect() : StaticPage::where('status', 'published')->where(function ($builder) use ($like) {$builder->where('title', 'like', $like)->orWhere('content', 'like', $like);})->get(),
        ]);
    }
}
