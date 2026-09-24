<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Niaz Law P.C.</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            /* Insights Section Animations */
            .insights-section .section-title {
                opacity: 0;
                transform: translateX(-40px);
                transition: opacity 0.7s ease, transform 0.7s ease;
            }
            .insights-section .section-title.anim-in {
                opacity: 1;
                transform: translateX(0);
            }
            .insight-card {
                opacity: 0;
                transform: translateY(40px);
                transition: opacity 0.6s ease, transform 0.6s ease, box-shadow 0.3s ease;
                overflow: hidden;
            }
            .insight-card.anim-in {
                opacity: 1;
                transform: translateY(0);
            }
            /* Ken-burns zoom on background */
            .insight-card::before {
                content: '';
                position: absolute;
                inset: 0;
                background: inherit;
                background-size: cover;
                background-position: center;
                transition: transform 6s ease;
                transform: scale(1);
                z-index: 0;
            }
            .insight-card:hover::before {
                transform: scale(1.07);
            }
            /* Slide-up text on hover */
            .insight-card .insight-content {
                transition: transform 0.4s ease;
                transform: translateY(8px);
                position: relative;
                z-index: 1;
            }
            .insight-card:hover .insight-content {
                transform: translateY(0);
            }
            /* Underline accent on hover */
            .insight-card .insight-content h3::after {
                content: '';
                display: block;
                width: 0;
                height: 2px;
                background: #fff;
                margin-top: 8px;
                transition: width 0.4s ease;
            }
            .insight-card:hover .insight-content h3::after {
                width: 48px;
            }
        </style>
    </head>
    <body class="antialiased">
        @include('components.header')
        @php
            $fallbackSlide = (object) [
                'image' => $homeSettings->hero_image ?? 'home-hero.png',
                'heading' => $homeSettings->hero_heading ?? "We Stand With You.\nWe Fight for Justice.",
                'button_text' => $homeSettings->hero_button_text ?? 'Contact Us',
                'button_link' => $homeSettings->hero_button_link ?? '/contact-us',
            ];
            $slides = $heroSlides->isNotEmpty() ? $heroSlides : collect([$fallbackSlide]);
        @endphp
        <section class="hero hero-slider" data-hero-slider>
            @foreach($slides as $index => $slide)
                <div class="hero-slide {{ $index === 0 ? 'active' : '' }}" style="--hero-image: url('{{ asset('images/' . $slide->image) }}');">
                    <div class="container hero-container">
                        <div class="hero-content">
                            <h1>{!! nl2br(e($slide->heading)) !!}</h1>
                            <a href="{{ $slide->button_link }}" class="btn btn-secondary">{{ $slide->button_text }} <span class="arrow-icon"><img src="{{ asset('images/arrow.svg') }}" alt="" style="width: 32px; height: 32px; vertical-align: middle;"></span></a>
                        </div>
                    </div>
                </div>
            @endforeach
            @if($slides->count() > 1)
                <div class="hero-indicators">
                    @foreach($slides as $index => $slide)
                        <button type="button" class="indicator {{ $index === 0 ? 'active' : '' }}" aria-label="Show hero slide {{ $index + 1 }}"></button>
                    @endforeach
                </div>
            @endif
        </section>

        <section class="section insights-section">
            <div class="container">
                <h2 class="section-title insights-title">Latest Insights From Niaz Law</h2>
                <div class="insights-grid">
                    @forelse($homeInsights as $insight)
                    <a class="insight-card" href="{{ route('blog.show', $insight) }}" style="background-image: linear-gradient(0deg, rgba(0,0,0,.78), rgba(0,0,0,.08)), url('{{ $insight->featured_image_url ?: asset('images/insight-june.png') }}');" aria-label="Read {{ $insight->title }}">
                        <div class="insight-content">
                            <h3>{{ $insight->title }}</h3>
                        </div>
                    </a>
                    @empty
                    <a class="insight-card" href="{{ url('/blog') }}" style="background-image: url('{{ asset('images/insight-june.png') }}');">
                        <div class="insight-content">
                            <h3>Niaz's Insights &ndash; June 2026</h3>
                        </div>
                    </a>
                    <a class="insight-card" href="{{ url('/blog') }}" style="background-image: url('{{ asset('images/inside-court.jpg') }}');">
                        <div class="insight-content">
                            <h3>Inside the Courts &ndash; Niaz's Securities<br>Litigation Update</h3>
                        </div>
                    </a>
                    <a class="insight-card" href="{{ url('/blog') }}" style="background-image: url('{{ asset('images/niaz-podcast.jpg') }}');">
                        <div class="insight-content">
                            <h3>Niaz's Podcasts</h3>
                        </div>
                    </a>
                    <a class="insight-card" href="{{ url('/blog') }}" style="background-image: url('{{ asset('images/informed-board.jpg') }}');">
                        <div class="insight-content">
                            <h3>The Informed Board &ndash; September 2026</h3>
                        </div>
                    </a>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="services-section bg-primary">
            <div class="container services-container">
                <div class="services-img-col">
                    <img src="{{ asset('images/professsional-services.jpg') }}" alt="Gavel">
                    <h2 class="services-heading">Professional Services<br>Prepared To Be Your<br>Lawyer Firm</h2>
                    <a href="{{ route('capabilities') }}" class="all-practice-areas desktop-only" style="color: #fff; text-decoration: none;">All Practice Areas ↗</a>
                </div>
                <div class="services-list-col">
                    <div class="services-links">
                        @foreach($homeCapabilities as $cap)
                        <a href="{{ $cap->slug ? route('capabilities.show', $cap->slug) : route('capabilities') }}" class="service-link" style="color:#fff; text-decoration:none;">{{ $cap->title }} <img src="{{ asset('images/errow-side.svg') }}" alt="Arrow Right" style="width: 27px; height: auto;"></a>
                        @endforeach
                    </div>
                </div>
                <div class="mobile-only" style="text-align: center; width: 100%;">
                    <a href="{{ route('capabilities') }}" class="all-practice-areas" style="color: #fff; text-decoration: none; margin: 0 auto;">All Practice Areas ↗</a>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="container about-container">
                <div class="about-left-col">
                    <h2 class="section-title about-section-title">Learn About<br class="desktop-only"> <span class="our-firm-text">Our Firm</span></h2>
                    <div class="about-features">
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="{{ asset('images/legacy.png') }}" alt="Legacy">
                            </div>
                            <div>
                                <h4>LEGACY</h4>
                                <p>Built on years of advising businesses across complex commercial, infrastructure, and strategic legal matters.</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="{{ asset('images/integraty.svg') }}" alt="Integrity">
                            </div>
                            <div>
                                <h4>INTEGRITY</h4>
                                <p>We provide clear, dependable legal guidance with professionalism, discretion, and a strong sense of responsibility.</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <img src="{{ asset('images/community.svg') }}" alt="Community">
                            </div>
                            <div>
                                <h4>COMMUNITY</h4>
                                <p>We focus on understanding client priorities and delivering practical legal solutions that support informed business decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-images">
                    <img src="{{ asset('images/Community-new.webp') }}" alt="Community" class="about-img-below">
                    <img src="{{ asset('images/Legacy-new.webp') }}" alt="Legacy" class="about-img-up">
                </div>
            </div>
        </section>

        <section class="results-section">
            <div class="container results-container">
                <div class="results-img">
                    <h2>WE LEAVE EVERY OUNCE OF EFFORT, SKILL, AND HEART IN THE COURTROOM.</h2>
                    <span class="we-deliver">We Deliver Results.</span>
                </div>
                <div class="results-list">
                    <div class="result-item">
                        <h4>COMMERCIAL LITIGATION</h4>
                        <h3>Resolving a High-Stakes Contract Dispute Between Business Partners</h3>
                    </div>
                    <div class="result-item">
                        <h4>PROCUREMENT & CONTRACTING</h4>
                        <h3>Securing a Favorable Resolution in a Complex Vendor Dispute</h3>
                    </div>
                    <div class="result-item">
                        <h4>INFRASTRUCTURE & PROJECTS</h4>
                        <h3>Guiding a Major Project Through Contractual and Stakeholder Conflict</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="section news-section">
            <div class="container">
                <div class="news-header">
                    <h2>The Latest News And Blog From Niaz Law</h2>
                    <a href="{{ url('/blog') }}" class="read-recent">Read Recent Posts <span class="arrow-icon"><img src="{{ asset('images/arrow.svg') }}" alt="Arrow" style="width: 32px; height: 32px; vertical-align: middle;"></span></a>
                </div>
                <div class="news-grid">
                    @forelse($homePosts as $post)
                    <div class="news-card">
                        <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}">
                        <div class="news-content">
                            <h3>{{ $post->title }}</h3>
                            <p>{{ Str::limit(strip_tags($post->content), 130) }}</p>
                            <a href="{{ route('blog.show',$post) }}" class="btn-black">Read now</a>
                        </div>
                    </div>
                    @empty
                    <p>No featured posts yet.</p>
                    @endforelse
                </div>
            </div>
        </section>
        <section class="contact-section">
            <div class="contact-bg"></div>
            <div class="container contact-container">
                <iframe class="home-map" title="Niaz Law Franklin Park office location" src="https://www.google.com/maps?q=9933+Franklin+Ave,+Franklin+Park,+IL+60131&amp;z=17&amp;output=embed" loading="lazy"></iframe>
                <div class="contact-form-card">
                    <h2>Have Questions?<br>Get in Touch!</h2>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
        @include('components.footer')
        <script>
            (() => {
                const slider = document.querySelector('[data-hero-slider]');
                if (!slider) return;
                const slides = [...slider.querySelectorAll('.hero-slide')];
                const indicators = [...slider.querySelectorAll('.indicator')];
                if (slides.length < 2) return;
                let activeIndex = 0;
                const show = (index) => {
                    activeIndex = (index + slides.length) % slides.length;
                    slides.forEach((slide, i) => slide.classList.toggle('active', i === activeIndex));
                    indicators.forEach((indicator, i) => indicator.classList.toggle('active', i === activeIndex));
                };
                indicators.forEach((indicator, index) => indicator.addEventListener('click', () => show(index)));
                setInterval(() => show(activeIndex + 1), 6500);
            })();

            // Insights Section Scroll Animation
            (() => {
                const title = document.querySelector('.insights-title');
                const cards = document.querySelectorAll('.insights-grid .insight-card');

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('anim-in');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.15 });

                if (title) observer.observe(title);

                cards.forEach((card, i) => {
                    card.style.transitionDelay = (i * 0.12) + 's';
                    observer.observe(card);
                });
            })();
        </script>
    </body>
</html>
