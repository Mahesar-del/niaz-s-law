<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon-icon.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $attorney->meta_title ?: ($attorney->name . ' - Attorney | Niaz Law P.C.') }}</title>
    <meta name="description" content="{{ $attorney->meta_description ?: ('Learn about ' . $attorney->name . ', ' . ($attorney->title ?? 'Attorney') . ' at Niaz Law P.C.') }}">
    <meta name="keywords" content="{{ $attorney->meta_keywords ?: ($attorney->name . ', attorney Illinois, lawyer Illinois, Niaz Law attorney, ' . ($attorney->title ?? 'legal counsel') . ', Illinois law firm') }}">
    <meta name="robots" content="{{ $attorney->robots ?: 'index, follow' }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Attorney detail page: matches the supplied Figma/PDF composition. */
        .attorney-hero {
            position: relative;
            display: block;
            height: 395px;
            padding: 126px 0 0;
            box-sizing: border-box;
            color: #fff;
            background: linear-gradient(rgba(23, 29, 32, .52), rgba(23, 29, 32, .52)), url('{{ asset('images/Attorney-Page-new.webp') }}') center / cover;
        }
        .attorney-hero__container {
            position: relative;
            height: 100%;
        }
        .attorney-title {
            display: flex;
            align-items: center;
            gap: 22px;
        }
        .attorney-title h1 {
            flex: 0 0 auto;
            margin: 0;
            color: #fff;
            font: 700 clamp(42px, 4vw, 58px) / 1.1 Georgia, serif;
        }
        .attorney-title .attorney-title-line {
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, .66);
        }
        .attorney-title .share-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
        }
        .attorney-profile {
            position: absolute;
            z-index: 2;
            top: 104px;
            left: var(--space-100, 100px);
            display: flex;
            align-items: flex-start;
            gap: 25px;
        }
        .attorney-profile img {
            display: block;
            width: 242px;
            height: 242px;
            object-fit: cover;
            object-position: center top;
        }
        .attorney-profile__meta {
            min-width: 230px;
            padding-top: 8px;
            color: #fff;
        }
        .attorney-profile__meta h3 {
            margin: 0 0 12px;
            color: #fff;
            font: 700 25px / 1.1 Georgia, serif;
        }
        .attorney-profile__meta p {
            margin: 0 0 12px;
            color: #fff;
            font-size: 14px;
            line-height: 1.15;
            overflow-wrap: anywhere;
        }
        .attorney-profile__meta p::before {
            display: inline-block;
            width: 20px;
            margin-right: 8px;
            color: #fff;
            text-align: center;
        }
        .attorney-profile__meta .email::before { content: '✉'; }
        .attorney-profile__meta .phone::before { content: '⌕'; transform: rotate(-35deg); }
        .attorney-profile__meta .location::before { content: '●'; font-size: 11px; }
        .attorney-overview {
            min-height: 201px;
            box-sizing: border-box;
            padding: 38px 0 28px;
            background: #f8f5ef;
        }
        .attorney-overview__inner {
            padding-left: 267px;
        }
        .attorney-overview h2,
        .attorney-section h2 {
            margin: 0;
            color: #080808;
            font: 700 31px / 1.1 Georgia, serif;
        }
        .attorney-overview h2::after,
        .attorney-credentials > h2::after {
            content: '';
            display: block;
            width: 41px;
            height: 2px;
            margin-top: 11px;
            background: #000;
        }
        .attorney-overview p {
            max-width: 1060px;
            margin: 18px 0 0;
            font-size: 15px;
            line-height: 1.7;
            letter-spacing: .01em;
        }
        .attorney-content {
            padding-top: 50px;
            padding-bottom: 0;
        }
        .attorney-section { margin: 0 0 30px; }
        .attorney-section h2 { margin-bottom: 21px; }
        .attorney-section p,
        .attorney-section li {
            font-size: 14px;
            line-height: 1.7;
            letter-spacing: .01em;
        }
        .attorney-section p { margin: 0; }
        .attorney-section ul {
            margin: 18px 0 0 17px;
            padding-left: 0px;
            list-style: disc;
        }
        .attorney-section li {
            display: list-item;
            margin: 11px 0;
            padding-left: 2px;
        }

        .attorney-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 68px;
        }
        .attorney-columns > div + div {
            border-left: 1px solid #cfcfcf;
            padding-left: 68px;
        }
        .attorney-columns h3 {
            margin: 0;
            font: 700 25px / 1.15 Georgia, serif;
        }
        .attorney-insights { margin-top: 6px; margin-bottom: 0; }
        .attorney-insights > h2 { margin-bottom: 27px; }
        .attorney-insights__grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 60px;
        }
        .attorney-insight-card {
            display: grid;
            grid-template-columns: 43% 1fr;
            gap: 24px;
        }
        .attorney-insight-card img {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }
        .attorney-insight-card h3 {
            margin: 10px 0 14px;
            padding-bottom: 13px;
            border-bottom: 1px solid #aaa;
            font: 700 20px / 1.06 Georgia, serif;
        }
        .attorney-insight-card p { font-size: 13px; line-height: 1.5; }
        .attorney-insight-card a {
            display: inline-flex;
            min-width: 150px;
            min-height: 39px;
            align-items: center;
            justify-content: center;
            margin-top: 4px;
            padding: 8px 20px;
            background: #050505;
            color: #fff;
            font-size: 13px;
        }
        @media (max-width: 1024px) {
            .attorney-hero { height: 365px; padding-top: 120px; }
            .attorney-profile { top: 95px; left: var(--space-32, 32px); }
            .attorney-profile img { width: 190px; height: 205px; }
            .attorney-overview__inner { padding-left: 215px; }
            .attorney-insights__grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 768px) {
            .attorney-profile { left: 25px; }
        }
        @media (max-width: 650px) {
            .attorney-hero { height: 500px; padding: 169px 24px 0; display: flex; flex-direction: column; align-items: center; }
            .attorney-title { width: 100%; justify-content: center; }
            .attorney-title h1 { font-size: 28px; line-height: 33px; text-align: center; }
            .attorney-title .attorney-title-line, .attorney-title .share-icon { display: none; }
            .attorney-profile { position: relative; top: auto; left: auto; margin: 20px 0 -100px; gap: 24px; flex-direction: column-reverse; align-items: center; }
            .attorney-profile img { width: 240px; height: 200px; }
            .attorney-profile__meta { padding-top: 0; min-width: 0; color: #fff; text-align: center; width: 100%; }
            .attorney-profile__meta h3 { color: #fff; font-size: 19px; line-height: 21px; margin-bottom: 8px; font-weight:500; }
            .attorney-profile__meta p { color: #fff; font-size: 14px; line-height: 22px; margin-bottom: 8px; }
            .attorney-profile__meta p::before { color: #fff; }
            .attorney-profile__meta .phone, .attorney-profile__meta .location { display: inline-block; margin: 0 8px; }
            .attorney-overview { min-height: auto; padding: 62px 24px 32px; text-align: justify; }
            .attorney-overview__inner { padding-left: 0; }
            .attorney-content { padding: 27px 24px 0px; text-align: justify;}
            .attorney-credentials > h2 { display: block; }
            .attorney-credentials > h2::after { display: block; width: 65px; margin-top: 12px; margin-left: 0; }
            .attorney-columns { grid-template-columns: 1fr; gap: 36px; }
            .attorney-columns > div + div { border: 0; padding: 0; }
            .attorney-insight-card { grid-template-columns: 1fr; gap: 0; }
            .attorney-insight-card:nth-child(n+2) { display: none; }
            .attorney-insight-card img { height: 240px; }
        }
    </style>
</head>
<body>
    @include('components.header')

    @php
        $experiencePoints = preg_split('/\r\n|\r|\n/', $attorney->experience_points ?: '');
        $educationItems = preg_split('/\r\n|\r|\n/', $attorney->education ?: '');
        $admissionItems = preg_split('/\r\n|\r|\n/', $attorney->admissions ?: '');
    @endphp

    <main>
        <section class="attorney-hero">
            <div class="container attorney-hero__container">
                <div class="attorney-title">
                <h1>{{ $attorney->name }}</h1>
                <div class="attorney-title-line"></div>
                <a href="#" class="share-icon" title="Share">
                    <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                        <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92z"/>
                    </svg>
                </a>
            </div>
            <div class="attorney-profile">
                <img src="{{ asset('images/' . ($attorney->photo ?: 'lawyer_profile.jpg')) }}" alt="{{ $attorney->name }}">
                <div class="attorney-profile__meta">
                    <h3>{{ $attorney->title }}</h3>
                    @if($attorney->email)<p class="email">{{ $attorney->email }}</p>@endif
                    @if($attorney->phone)<p class="phone">{{ $attorney->phone }}</p>@endif
                    @if($attorney->location)<p class="location">{{ $attorney->location }}</p>@endif
                </div>
            </div>
        </div>
    </section>

        <section class="attorney-overview">
            <div class="container">
                <div class="attorney-overview__inner">
                    <h2>Overview</h2>
                    <p>{{ $attorney->overview ?: 'Attorney overview will be available soon.' }}</p>
                </div>
            </div>
        </section>

        <div class="container attorney-content">
            <section class="attorney-section">
                <h2>Experience</h2>
                <p>{{ $attorney->experience ?: 'Professional experience will be available soon.' }}</p>
                @if($attorney->experience_points)
                    <ul>
                        @foreach($experiencePoints as $point)
                            @if(trim($point))<li>{{ $point }}</li>@endif
                        @endforeach
                    </ul>
                @endif
            </section>

            <section class="attorney-section attorney-credentials">
                <h2>Credentials</h2>
                <div class="attorney-columns">
                    <div>
                        <h3>Education</h3>
                        <ul>
                            @foreach($educationItems as $item)
                                @if(trim($item))<li>{{ $item }}</li>@endif
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3>Admissions</h3>
                        <ul>
                            @foreach($admissionItems as $item)
                                @if(trim($item))<li>{{ $item }}</li>@endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </section>

            <section class="attorney-section attorney-insights">
                <h2>Insights And News</h2>
                <div class="attorney-insights__grid">
                    @forelse($attorneyPosts as $post)
                    <article class="attorney-insight-card">
                        @if($post->featured_image_url)<img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">@endif
                        <div><h3>{{ $post->title }}</h3><p>{{ Str::limit(html_entity_decode(strip_tags($post->content)), 160) }}</p><a href="{{ route('blog.show',$post) }}">Read now</a></div>
                    </article>
                    @empty
                    <p>No insights have been added for this attorney yet.</p>
                    @endforelse
                </div>
            </section>
        </div>
    </main>

    @include('components.footer')
</body>
</html>
