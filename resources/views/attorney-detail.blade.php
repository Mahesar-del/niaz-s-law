<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $attorney->name }} - Niaz Law P.C.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Attorney detail page: matches the supplied Figma/PDF composition. */
        .attorney-hero {
            position: relative;
            display: block;
            height: 395px;
            padding: 126px 5.55vw 0;
            box-sizing: border-box;
            color: #fff;
            background: linear-gradient(rgba(23, 29, 32, .52), rgba(23, 29, 32, .52)), url('{{ asset('images/capability-imge.png') }}') center / cover;
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
        .attorney-title::after {
            content: '';
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, .66);
        }
        .attorney-profile {
            position: absolute;
            z-index: 2;
            top: 230px;
            left: 5.55vw;
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
            padding: 38px 9% 28px calc(5.55vw + 286px);
            background: #f8f5ef;
        }
        .attorney-overview__inner,
        .attorney-content {
            max-width: 1160px;
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
            background: #111;
        }
        .attorney-overview p {
            max-width: 1060px;
            margin: 18px 0 0;
            font-size: 15px;
            line-height: 1.7;
            letter-spacing: .01em;
        }
        .attorney-content {
            margin: 0 auto;
            padding: 50px 5.55vw 76px;
        }
        .attorney-section { margin: 0 0 57px; }
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
            padding-left: 17px;
            list-style: disc;
        }
        .attorney-section li {
            display: list-item;
            margin: 11px 0;
            padding-left: 2px;
        }
        .attorney-credentials > h2 {
            display: flex;
            align-items: center;
            gap: 26px;
            margin-bottom: 30px;
        }
        .attorney-credentials > h2::before { display: none; }
        .attorney-credentials > h2::after {
            flex: 1;
            width: auto;
            height: 1px;
            margin: 0;
            background: #c8c8c8;
            order: 2;
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
        .attorney-insights { margin-top: 6px; }
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
            height: 220px;
            object-fit: cover;
        }
        .attorney-insight-card h3 {
            margin: 10px 0 14px;
            padding-bottom: 13px;
            border-bottom: 1px solid #aaa;
            font: 700 22px / 1.06 Georgia, serif;
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
        @media (max-width: 900px) {
            .attorney-hero { height: 365px; padding-top: 120px; }
            .attorney-profile { top: 215px; }
            .attorney-profile img { width: 190px; height: 205px; }
            .attorney-overview { padding-left: calc(5.55vw + 230px); }
            .attorney-insights__grid { grid-template-columns: 1fr; }
        }
        @media (max-width: 650px) {
            .attorney-hero { height: 300px; padding: 112px 24px 0; }
            .attorney-title::after { display: none; }
            .attorney-profile { position: relative; top: auto; left: auto; margin: 36px 24px -100px; gap: 18px; }
            .attorney-profile img { width: 130px; height: 160px; }
            .attorney-profile__meta { padding-top: 4px; min-width: 0; color: #111; }
            .attorney-profile__meta h3, .attorney-profile__meta p { color: #111; }
            .attorney-profile__meta p::before { color: #111; }
            .attorney-overview { min-height: auto; padding: 130px 24px 32px; }
            .attorney-content { padding: 44px 24px 60px; }
            .attorney-columns { grid-template-columns: 1fr; gap: 36px; }
            .attorney-columns > div + div { border: 0; padding: 0; }
            .attorney-insight-card { grid-template-columns: 1fr; gap: 0; }
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
            <div class="attorney-title"><h1>{{ $attorney->name }}</h1></div>
            <div class="attorney-profile">
                <img src="{{ asset('images/' . ($attorney->photo ?: 'lawyer_profile.jpg')) }}" alt="{{ $attorney->name }}">
                <div class="attorney-profile__meta">
                    <h3>{{ $attorney->title }}</h3>
                    @if($attorney->email)<p class="email">{{ $attorney->email }}</p>@endif
                    @if($attorney->phone)<p class="phone">{{ $attorney->phone }}</p>@endif
                    @if($attorney->location)<p class="location">{{ $attorney->location }}</p>@endif
                </div>
            </div>
        </section>

        <section class="attorney-overview">
            <div class="attorney-overview__inner">
                <h2>Overview</h2>
                <p>{{ $attorney->overview ?: 'Attorney overview will be available soon.' }}</p>
            </div>
        </section>

        <div class="attorney-content">
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
                        <img src="{{ $post->featured_image ? asset('storage/'.$post->featured_image) : asset('images/attorney-hero.jpg') }}" alt="{{ $post->title }}">
                        <div><h3>{{ $post->title }}</h3><p>{{ Str::limit(strip_tags($post->content), 160) }}</p><a href="{{ route('blog.show',$post) }}">Read now</a></div>
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
