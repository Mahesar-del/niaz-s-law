<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $blog->meta_title ?: $blog->title }}</title>
    <meta name="description" content="{{ $blog->meta_description }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .post-hero {
            height: 520px;
            background: linear-gradient(180deg, rgba(0,0,0,.2), rgba(0,0,0,.05)), url('{{ $blog->featured_image_url }}') center top / cover;
            position: relative;
        }
        .post-hero__card {
            width: 884px;
            max-width: 100%;
            height: 264px;
            margin: -130px 0 0 0;
            padding: 48px 56px 40px;
            background: #FAF7F1;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            position: relative;
            z-index: 2;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .post-hero__card h1 {
            max-width: 780px;
            margin: 0 0 24px;
            font-family: 'Libre Baskerville', Georgia, serif;
            font-size: clamp(23px, 2.7vw, 38px);
            font-weight: 700;
            line-height: 1.25;
            color: #000000;
        }
        .post-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
            margin: 0;
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: #444444;
        }
        .post-meta .bullet {
            color: #000;
            font-size: 14px;
        }
        .post-layout {
            max-width: 1220px;
            margin: 40px auto 0;
            padding: 0 16px;
        }
        .post-content {
            max-width: 1080px;
            margin: auto;
            font-size: 17px;
            line-height: 1.8;
            color: #222;
        }
        .post-content h1, .post-content h2, .post-content h3, .post-content h4 { margin: 1.5em 0 .55em; line-height: 1.25; color: #111; }
        .post-content h1 { font-size: 40px; }
        .post-content h2 { font-size: 27px; }
        .post-content h3 { font-size: 25px; }
        .post-content p { margin: 0 0 1.2em; text-align:justify; }
        .post-content ul, .post-content ol { display: block; margin: 0 0 1.3em; padding-left: 1.7em; }
        .post-content ul { list-style: disc; }
        .post-content ol { list-style: decimal; }
        .post-content table { width: 100%; margin: 1.5em 0; border-collapse: collapse; border: 1px solid #bbb; }
        .post-content th, .post-content td { padding: 12px 14px; border: 1px solid #bbb; text-align: left; vertical-align: top; }
        .post-content th { background: #f1ede5; font-weight: 700; }
        .post-content code { padding: 2px 5px; background: #f1f1f1; font-family: monospace; }
        .post-content pre code { padding: 0; background: transparent; }
        .post-content li { margin: .4em 0; }
        .post-content blockquote { margin: 1.5em 0; padding: 15px 22px; border-left: 4px solid #b18a4b; background: #f6f3ed; }
        .post-content pre { padding: 18px; overflow: auto; background: #171717; color: #fff; }
        .post-content img { max-width: 100%; height: auto; }
        .related { margin: 30px 0 30px; padding: 0; }
        .related h2 { margin: 0 0 28px; font: 700 25
            px Georgia; }
        .related-grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 55px; }
        .related-card { display: grid; grid-template-columns: 42% 1fr; gap: 22px; }
        .related-card img { width: 100%; height: 205px; object-fit: cover; }
        .related-card h3 { margin: 0 0 12px; padding-bottom: 12px; border-bottom: 1px solid #999; font: 700 22px/1.15 Georgia; }
        .related-card p { margin: 0 0 16px; font-size: 13px; line-height: 1.5; }
        .related-card a { display: inline-block; padding: 10px 22px; background: #111; color: #fff; text-decoration: none; font-size: 12px; }
        @media (max-width: 800px) {
            .post-hero { height: 420px; }
            .post-hero__card { width: 100%; margin-top: -90px; padding: 32px 24px; }
            .related-grid { grid-template-columns: 1fr; }
            .related-card { grid-template-columns: 1fr; }
            .related-card:nth-child(n+2) { display: none !important; }
            .post-content table,
            .post-content .hide-on-mobile { display: none !important; }
        }
    </style>
</head>
<body>
    @include('components.header')

    <section class="post-hero"></section>

    <div class="container">
        <div class="post-hero__card">
            <h1>What Businesses Should Consider Before Signing a Commercial Contract</h1>
            <p class="post-meta">
                <span class="bullet">•</span>
                <span>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : 'Nov 21, 2026' }}</span>
                <span class="bullet">•</span>
                <span>{{ $blog->category ?: 'James Smith' }}</span>
                <span class="bullet">•</span>
                <span>4 min read</span>
            </p>
        </div>
    </div>

    <main class="post-layout">
        <div class="post-content">
            {!! $blog->content !!}
        </div>
    </main>

    <section class="related">
        <div class="container">
            <h2>Related Insights And News</h2>
            <div class="related-grid">
                @foreach(\App\Models\BlogPost::where('id', '!=', $blog->id)->where('status', 'published')->latest()->take(2)->get() as $related)
                <article class="related-card">
                    <img src="{{ $related->featured_image_url }}" alt="{{ $related->title }}">
                    <div>
                        <h3>{{ $related->title }}</h3>
                        <p>{{ Str::limit(strip_tags($related->content), 150) }}</p>
                        <a href="{{ route('blog.show', $related) }}">Read now</a>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    @include('components.footer')

    <script>
    (function() {
        function hideMobileKeyControls() {
            const headings = document.querySelectorAll('.post-content h1, .post-content h2, .post-content h3, .post-content h4');
            headings.forEach(function(h) {
                const text = h.textContent.toLowerCase();
                if (text.includes('key control') || text.includes('key controls') || text.includes('at a glance')) {
                    h.classList.add('hide-on-mobile');
                }
            });
        }
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', hideMobileKeyControls);
        } else {
            hideMobileKeyControls();
        }
    })();
    </script>
</body>
</html>
