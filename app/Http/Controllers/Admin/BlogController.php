<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attorney;
use App\Models\BlogPost;
use App\Models\Capability;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->get('type', 'blog');

        return view('admin.blog.index', [
            'posts' => BlogPost::where('content_type', $type)->latest()->get(),
            'contentType' => $type,
        ]);
    }

    public function create(Request $request)
    {
        $type = $request->get('type', 'blog');

        return view('admin.blog.form', [
            'post' => new BlogPost(['content_type' => $type]),
            'contentType' => $type,
            'attorneys' => Attorney::orderBy('name')->get(),
            'capabilities' => Capability::orderBy('title')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['show_on_home'] = $request->has('show_on_home');
        $data['content_type'] = $request->input('content_type', 'blog');
        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data = $this->storeImages($request, $data);

        $post = BlogPost::create($data);
        $post->attorneys()->sync($request->input('attorney_ids', []));
        $post->capabilities()->sync($request->input('capability_ids', []));

        return redirect()->route('admin.blog.index', ['type' => $post->content_type])
            ->with('success', 'Content saved.');
    }

    public function edit(BlogPost $blog)
    {
        return view('admin.blog.form', [
            'post' => $blog,
            'contentType' => $blog->content_type,
            'attorneys' => Attorney::orderBy('name')->get(),
            'capabilities' => Capability::orderBy('title')->get(),
        ]);
    }

    public function update(Request $request, BlogPost $blog)
    {
        $data = $this->validated($request, $blog);
        $data['show_on_home'] = $request->has('show_on_home');
        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data = $this->storeImages($request, $data);

        $blog->update($data);
        $blog->attorneys()->sync($request->input('attorney_ids', []));
        $blog->capabilities()->sync($request->input('capability_ids', []));

        return redirect()->route('admin.blog.index', ['type' => $blog->content_type])
            ->with('success', 'Content updated.');
    }

    public function destroy(BlogPost $blog)
    {
        $blog->delete();

        return back()->with('success', 'Content deleted.');
    }

    private function storeImages(Request $request, array $data): array
    {
        foreach (['featured_image', 'home_image'] as $field) {
            unset($data[$field]);

            if ($request->hasFile($field)) {
                $data[$field] = $request->file($field)->store('uploads/blog', 'public');
            }
        }

        return $data;
    }

    private function validated(Request $request, ?BlogPost $post = null): array
    {
        return $request->validate([
            'content_type' => 'nullable|in:blog,case_study,insight',
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:blog_posts,slug,'.($post ? $post->id : null),
            'category' => 'nullable|string|max:100',
            'published_at' => 'nullable|date',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'home_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'content' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
            'robots' => 'required|string',
            'schema_json' => 'nullable|string',
            'show_on_home' => 'nullable|boolean',
            'feature_on_home' => 'nullable|boolean',
            'show_on_attorney_detail' => 'nullable|boolean',
        ]);
    }
}
