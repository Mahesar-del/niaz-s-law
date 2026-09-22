<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles &amp; Perspectives - Niaz Law P.C.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .blog-page { background: #fff; }
        .blog-hero { min-height: 490px; padding: 142px 0 70px; display: flex; align-items: flex-end; color: #fff; background: linear-gradient(90deg, rgba(0,0,0,.63), rgba(0,0,0,.34)), url('{{ asset('images/commercial-transection-hero.png') }}') center / cover; }
        .blog-hero__content { display: grid; grid-template-columns: minmax(330px, .85fr) 1.15fr; align-items: center; gap: 72px; }
        .blog-hero h1 { margin: 0; color: #fff; font-size: clamp(42px, 4.5vw, 67px); line-height: 1.12; }
        .blog-hero p { max-width: 550px; margin: 0; padding-left: 40px; border-left: 1px solid rgba(255,255,255,.88); color: #f7f7f7; font-size: 17px; line-height: 1.7; }
        .blog-content { padding: 52px 0 102px; }
        .blog-feature { display: grid; grid-template-columns: 1.15fr 1fr; align-items: center; gap: 10px; max-width: 1250px; margin: 0 auto 66px; }
        .blog-feature__image { height: 465px; overflow: hidden; clip-path: polygon(0 0, 100% 0, 73% 100%, 0 100%); }
        .blog-feature__image img { width: 100%; height: 100%; object-fit: cover; object-position: center; }
        .blog-feature__content { margin-left: -68px; padding-left: 68px; }
        .blog-feature h2 { max-width: 530px; margin: 0 0 12px; font-size: clamp(28px, 2.6vw, 42px); line-height: 1.22; }
        .blog-category { margin: 0 0 20px; font-family: var(--font-heading); font-size: 17px; font-weight: 700; }
        .blog-feature__content > p:last-of-type { max-width: 535px; margin: 0 0 26px; font-size: 15px; line-height: 1.65; }
        .article-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 48px 72px; max-width: 1250px; margin: 0 auto; }
        .article-card { display: grid; grid-template-columns: 42% 1fr; gap: 26px; min-width: 0; align-items: start; }
        .article-card__image { width: 100%; height: 250px; object-fit: cover; }
        .article-card__content { padding-top: 15px; }
        .article-card h3 { margin: 0 0 14px; padding-bottom: 14px; border-bottom: 1px solid #8e8e8e; font-size: clamp(19px, 1.6vw, 26px); line-height: 1.18; }
        .article-card p { margin: 0 0 17px; color: #242424; font-size: 13px; line-height: 1.52; }
        .article-button { display: inline-flex; min-width: 150px; min-height: 42px; align-items: center; justify-content: center; padding: 10px 22px; background: #000; color: #fff; font-size: 14px; font-weight: 600; transition: background .2s ease; }
        .article-button:hover { background: #333; }
        .blog-load { text-align: center; margin-top: 78px; }
        @media (max-width: 900px) { .blog-hero__content { grid-template-columns: 1fr; gap: 24px; } .blog-hero p { padding-left: 0; border-left: 0; } .blog-feature { grid-template-columns: 1fr; gap: 30px; } .blog-feature__image { clip-path: none; height: 400px; } .blog-feature__content { margin-left: 0; padding-left: 0; } .article-grid { gap: 42px 32px; } .article-card { grid-template-columns: 1fr; gap: 18px; } .article-card__image { height: 280px; } .article-card__content { padding-top: 0; } }
        @media (max-width: 650px) { .blog-hero { min-height: 500px; padding: 145px 0 52px; } .blog-hero h1 { font-size: 40px; } .blog-hero p { font-size: 16px; } .blog-content { padding: 54px 0 66px; } .blog-feature { margin-bottom: 48px; } .blog-feature__image { height: 300px; } .blog-feature h2 { font-size: 28px; } .article-grid { grid-template-columns: 1fr; gap: 42px; } .article-card { grid-template-columns: 40% 1fr; gap: 17px; } .article-card__image { height: 205px; } .article-card__content { padding-top: 0; } .article-card h3 { font-size: 19px; margin-bottom: 9px; padding-bottom: 9px; } .article-card p { font-size: 12px; margin-bottom: 12px; } .article-button { min-width: 118px; min-height: 36px; font-size: 12px; } .blog-load { margin-top: 52px; } }
    </style>
</head>
<body class="blog-page">
    @include('components.header')
    <main>
        <section class="blog-hero">
            <div class="container blog-hero__content">
                <h1>Articles &amp;<br>Perspectives</h1>
                <p>Read practical legal perspectives and commentary on commercial transactions, infrastructure, aviation, procurement, and evolving business challenges.</p>
            </div>
        </section>
        <section class="blog-content">
            <div class="container">
                <article class="blog-feature">
                    <div class="blog-feature__image"><img src="{{ asset('images/attorney-hero.jpg') }}" alt="Legal proceedings"></div>
                    <div class="blog-feature__content">
                        <h2>Managing Risk in Commercial Agreements</h2>
                        <p class="blog-category">Commercial Transactions</p>
                        <p>Commercial agreements shape important business relationships and can create significant operational and financial obligations. Understanding key terms, responsibilities, and risk allocation can help businesses negotiate with greater clarity and confidence.</p>
                        <a class="article-button" href="/detail">Read Blog</a>
                    </div>
                </article>
                @php
                    $articles = [
                        'domestic-violance.jpg', 'lawywer-helps.jpg', 'order.jpg', 'law.jpg',
                        'domestic-violance.jpg', 'lawywer-helps.jpg', 'order.jpg', 'law.jpg'
                    ];
                @endphp
                <div class="article-grid">
                    @foreach ($articles as $image)
                        <article class="article-card">
                            <img class="article-card__image" src="{{ asset('images/' . $image) }}" alt="Legal insight">
                            <div class="article-card__content">
                                <h3>Domestic Violence in California - How a Lawyer Can Help</h3>
                                <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                                <a class="article-button" href="/detail">Read now</a>
                            </div>
                        </article>
                    @endforeach
                </div>
                <div class="blog-load"><a class="article-button" href="#">Load more</a></div>
            </div>
        </section>
    </main>
    @include('components.footer')
</body>
</html>
