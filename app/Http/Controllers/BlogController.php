<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Support\Carbon;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with(['attorneys', 'capabilities'])
            ->where('content_type', 'blog')->where('status', 'published')
            ->where(function ($query) { $query->whereNull('published_at')->orWhereDate('published_at', '<=', Carbon::today()); })
            ->orderByDesc('published_at')->orderByDesc('created_at')->get();
        return view('blog-page', compact('posts'));
    }

    public function show(BlogPost $blog)
    {
        abort_unless($blog->status === 'published' && (!$blog->published_at || $blog->published_at->isToday() || $blog->published_at->isPast()), 404);
        return view('blog-detail', compact('blog'));
    }
}
