<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights, News &amp; Reports - Niaz Law P.C.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .insights-page { background: #fff; }
        .insights-hero { min-height: 500px; padding: 76px 0; display: flex; align-items: center; color: #fff; background: linear-gradient(90deg, rgba(0,0,0,.65), rgba(0,0,0,.32)), url('{{ asset('images/commercial-transection-hero.png') }}') center / cover; }
        .insights-hero__content { display: grid; grid-template-columns: auto 1fr; gap: 70px; align-items: center; width: 100%; }
        .insights-hero h1 { margin: 0; color: #fff; font-size: clamp(42px, 4.45vw, 66px); line-height: 1.1; font-family: var(--font-heading); font-weight: 700; }
        .insights-hero p { max-width: 550px; margin: 0; padding: 20px 0 20px 40px; border-left: 2px solid #fff; color: #f8f8f8; font-size: 17px; line-height: 1.7; }
        .insights-content { padding: 32px 0 50px; }
        .insight-feature { display: grid; grid-template-columns: 1.16fr 1fr; align-items: center; max-width: 1250px; margin: 0 auto 32px; }
        .insight-feature--reverse { grid-template-columns: 1fr 1.16fr; }
        .insight-feature__visual { height: 465px; overflow: hidden; clip-path: polygon(0 0, 100% 0, 73% 100%, 0 100%); }
        .insight-feature--reverse .insight-feature__visual { grid-column: 2; clip-path: polygon(27% 0, 100% 0, 100% 100%, 0 100%); }
        .insight-feature__visual img { display: block; width: 100%; height: 100%; object-fit: cover; object-position: center; }
        .insight-feature__content { z-index: 1; margin-left: -72px; padding-left: 72px; }
        .insight-feature--reverse .insight-feature__content { grid-column: 1; grid-row: 1; margin: 0 -72px 0 0; padding: 0 72px 0 0; }
        .insight-feature h2 { max-width: 540px; margin: 0 0 13px; font-size: clamp(29px, 2.65vw, 42px); line-height: 1.19; }
        .insight-feature__category { margin: 0 0 20px; font-family: var(--font-heading); font-size: 17px; font-weight: 700; }
        .insight-feature__text { max-width: 530px; margin: 0 0 26px; font-size: 15px; line-height: 1.65; }
        .insight-button { display: inline-flex; min-width: 170px; min-height: 44px; align-items: center; justify-content: center; padding: 10px 24px; background: #000; color: #fff; font-size: 14px; font-weight: 600; }
        .insight-button:hover { background: #333; }
        .insight-tiles { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 9px; max-width: 1250px; margin: 18px auto 0; }
        .insight-tile { position: relative; min-height: 220px; overflow: hidden; display: flex; align-items: flex-end; padding: 27px 30px; color: #fff; background: #111; }
        .insight-tile::before { content: ''; position: absolute; inset: 0; background: linear-gradient(0deg, rgba(0,0,0,.83), rgba(0,0,0,.08)); z-index: 1; }
        .insight-tile img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
        .insight-tile h3 { position: relative; z-index: 2; margin: 0; color: #fff; font-size: clamp(21px, 1.75vw, 27px); line-height: 1.2; }
        .insights-load { margin-top: 32px; text-align: center; }
        @media (max-width: 900px) { .insights-hero__content { grid-template-columns: 1fr; gap: 24px; } .insights-hero p { padding: 0; border: 0; text-align: justify; } .insight-feature, .insight-feature--reverse { grid-template-columns: 1fr; gap: 30px; } .insight-feature__visual, .insight-feature--reverse .insight-feature__visual { grid-column: auto; clip-path: none; height: 370px; } .insight-feature__content, .insight-feature--reverse .insight-feature__content { grid-column: auto; grid-row: auto; margin: 0; padding: 0; } .insight-feature p { text-align: justify; } }
        @media (max-width: 650px) { .insights-hero { min-height: 440px; padding: 130px 0 50px; } .insights-hero h1 { font-size: 40px; } .insights-hero p { font-size: 16px; } .insights-content { padding: 24px 0 35px; } .insight-feature { margin-bottom: 24px; } .insight-feature__visual, .insight-feature--reverse .insight-feature__visual { height: 285px; } .insight-feature h2 { font-size: 28px; } .insight-tiles { grid-template-columns: 1fr; } .insight-tile { min-height: 205px; padding: 23px; } .insight-tile h3 { font-size: 22px; } .insights-load { margin-top: 24px; } }
    </style>
</head>
<body class="insights-page">
    @include('components.header')
    <main>
        <section class="insights-hero">
            <div class="container insights-hero__content">
                <h1>Insights,<br>News &amp; Reports</h1>
                <p>Explore firm updates, legal developments, and in-depth reports on issues affecting businesses, industries, and complex commercial matters.</p>
            </div>
        </section>
        <section class="insights-content">
            <div class="container">
                <article class="insight-feature">
                    <div class="insight-feature__visual"><img src="{{ asset('images/attorney-hero.jpg') }}" alt="Legal proceedings"></div>
                    <div class="insight-feature__content">
                        <h2>Managing Risk in Commercial Agreements</h2>
                        <p class="insight-feature__category">Commercial Transactions</p>
                        <p class="insight-feature__text">Commercial agreements shape important business relationships and can create significant operational and financial obligations. Understanding key terms, responsibilities, and risk allocation can help businesses negotiate with greater clarity and confidence.</p>
                        <a href="/detail" class="insight-button">Read Insight</a>
                    </div>
                </article>
                <article class="insight-feature insight-feature--reverse">
                    <div class="insight-feature__visual"><img src="{{ asset('images/attorney-hero.jpg') }}" alt="Legal proceedings"></div>
                    <div class="insight-feature__content">
                        <h2>Managing Risk in Commercial Agreements</h2>
                        <p class="insight-feature__category">Commercial Transactions</p>
                        <p class="insight-feature__text">Commercial agreements shape important business relationships and can create significant operational and financial obligations. Understanding key terms, responsibilities, and risk allocation can help businesses negotiate with greater clarity and confidence.</p>
                        <a href="/detail" class="insight-button">Read Insight</a>
                    </div>
                </article>
                @php
                    $tiles = [
                        ['image' => 'insight-june.png', 'title' => 'Key Legal Considerations for Infrastructure Projects'],
                        ['image' => 'informed-board.jpg', 'title' => 'Developments in Commercial Contracting'],
                        ['image' => 'insight-june.png', 'title' => 'Understanding Procurement Risk'],
                        ['image' => 'insight-june.png', 'title' => 'Key Legal Considerations for Infrastructure Projects'],
                        ['image' => 'insight-june.png', 'title' => 'Key Legal Considerations for Infrastructure Projects'],
                        ['image' => 'insight-june.png', 'title' => 'Key Legal Considerations for Infrastructure Projects'],
                        ['image' => 'insight-june.png', 'title' => 'Key Legal Considerations for Infrastructure Projects'],
                        ['image' => 'informed-board.jpg', 'title' => 'The Informed Board - September 2026'],
                    ];
                @endphp
                <div class="insight-tiles">
                    @foreach ($tiles as $tile)
                        <a class="insight-tile" href="/detail">
                            <img src="{{ asset('images/' . $tile['image']) }}" alt="">
                            <h3>{{ $tile['title'] }}</h3>
                        </a>
                    @endforeach
                </div>
                <div class="insights-load"><a href="#" class="insight-button">Load more</a></div>
            </div>
        </section>
    </main>
    @include('components.footer')
</body>
</html>
