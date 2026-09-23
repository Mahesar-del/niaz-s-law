<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Studies - Niaz Law P.C.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .case-studies-page { background: #fff; }
        .case-studies-hero { min-height: 460px; padding: 130px 0 66px; color: #fff; background: linear-gradient(90deg, rgba(0, 0, 0, .62), rgba(0, 0, 0, .38)), url('{{ asset('images/commercial-transection-hero.png') }}') center / cover; display: flex; align-items: flex-end; }
        .case-studies-hero__content { display: grid; grid-template-columns: minmax(300px, .85fr) 1.15fr; gap: 78px; align-items: center; }
        .case-studies-hero h1 { margin: 0; color: #fff; font-size: clamp(40px, 4.6vw, 68px); }
        .case-studies-hero p { max-width: 510px; margin: 0; padding-left: 40px; border-left: 1px solid rgba(255,255,255,.9); color: #f7f7f7; font-size: 17px; line-height: 1.7; }
        .case-studies-list { padding: 56px 0 102px; }
        .case-studies-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); column-gap: 60px; row-gap: 72px; max-width: 1000px; margin: 0 auto; }
        .case-study-card { color: #080808; }
        .case-study-card:nth-child(even) { transform: translateY(100px); }
        .case-study-card__image { display: block; width: 100%; aspect-ratio: 1.14 / 1; object-fit: cover; object-position: center 62%; margin-bottom: 18px; }
        .case-study-card h2 { max-width: 520px; margin: 0 0 11px; font-size: clamp(20px, 1.65vw, 27px); line-height: 1.35; }
        .case-study-card p { max-width: 520px; margin: 0 0 18px; color: #262626; font-size: 14px; line-height: 1.5; }
        .case-study-card__button, .case-studies-load-more { display: inline-flex; align-items: center; justify-content: center; min-width: 142px; min-height: 40px; padding: 10px 25px; background: #000; color: #fff; font-size: 13px; font-weight: 600; transition: background .2s ease; }
        .case-study-card__button:hover, .case-studies-load-more:hover { background: #333; }
        .case-studies-load-wrap { text-align: center; margin-top: 78px; }
        .case-studies-load-more { min-width: 136px; }
        @media (max-width: 768px) { .case-studies-hero { min-height: 500px; padding: 145px 0 54px; align-items: flex-end; } .case-studies-hero__content { grid-template-columns: 1fr; gap: 24px; } .case-studies-hero h1 { font-size: 39px; } .case-studies-hero p { padding-left: 0; border-left: 0; font-size: 16px; } .case-studies-list { padding: 56px 0 64px; } .case-studies-grid { grid-template-columns: 1fr; gap: 48px; } .case-study-card:nth-child(even) { transform: none; } .case-study-card__image { aspect-ratio: 1.12 / 1; } .case-study-card h2 { font-size: 21px; } .case-studies-load-wrap { margin-top: 55px; } }
    </style>
</head>
<body class="case-studies-page">
    @include('components.header')
    <main>
        <section class="case-studies-hero">
            <div class="container case-studies-hero__content">
                <h1>Case Studies</h1>
                <p>Explore selected matters that highlight our approach to complex legal issues, strategic transactions, and business-critical challenges.</p>
            </div>
        </section>
        <section class="case-studies-list" aria-label="Case studies">
            <div class="container">
                <div class="case-studies-grid">
                    @forelse ($caseStudies as $caseStudy)
                        <article class="case-study-card">
                            <img class="case-study-card__image" src="{{ $caseStudy->featured_image_url }}" alt="{{ $caseStudy->title }}">
                            <h2>{{ $caseStudy->title }}</h2>
                            <p>{{ Str::limit(strip_tags($caseStudy->content), 180) }}</p>
                            <a class="case-study-card__button" href="{{ route('blog.show',$caseStudy) }}">View Matter</a>
                        </article>
                    @empty
                        <p>No published case studies yet.</p>
                    @endforelse
                </div>
                <div class="case-studies-load-wrap"><a class="case-studies-load-more" href="#">Load more</a></div>
            </div>
        </section>
    </main>
    @include('components.footer')
</body>
</html>
