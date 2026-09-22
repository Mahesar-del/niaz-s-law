<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf- protests">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Niaz Law P.C.</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        @include('components.header')
        <section class="hero">
            <div class="container hero-container">
                <div class="hero-content">
                    <h1>We Stand With You.<br>We Fight for Justice.</h1>
                    <a href="/contact-us" class="btn btn-secondary">Contact Us <span class="arrow-icon"><img src="{{ asset('images/arrow.svg') }}" alt="Arrow" style="width: 32px; height: 32px; vertical-align: middle;"></span></a>
                </div>
                <div class="hero-indicators">
                    <span class="indicator active"></span>
                    <span class="indicator"></span>
                    <span class="indicator"></span>
                    <span class="indicator"></span>
                </div>
            </div>
        </section>

        <section class="section insights-section">
            <div class="container">
                <h2 class="section-title">Latest Insights From Niaz Law</h2>
                <div class="insights-grid">
                    <div class="insight-card" style="background-image: url('{{ asset('images/insight-june.png') }}');">
                        <div class="insight-content">
                            <h3>Insights &ndash; June 2026</h3>
                        </div>
                    </div>
                    <div class="insight-card" style="background-image: url('{{ asset('images/inside-court.jpg') }}');">
                        <div class="insight-content">
                            <h3>Inside the Courts &ndash; Niaz's Securities<br>Litigation Update</h3>
                        </div>
                    </div>
                    <div class="insight-card" style="background-image: url('{{ asset('images/niaz-podcast.jpg') }}');">
                        <div class="insight-content">
                            <h3>Niaz's Podcasts</h3>
                        </div>
                    </div>
                    <div class="insight-card" style="background-image: url('{{ asset('images/informed-board.jpg') }}');">
                        <div class="insight-content">
                            <h3>The Informed Board &ndash; September 2026</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section bg-primary">
            <div class="container services-container">
                <div class="services-img-col">
                    <img src="{{ asset('images/professsional-services.jpg') }}" alt="Gavel">
                    <h2 class="services-heading">Professional Services<br>Prepared To Be Your<br>Lawyer Firm</h2>
                    <a href="#" class="all-practice-areas desktop-only" style="color: #fff; text-decoration: none;">All Practice Areas ↗</a>
                </div>
                <div class="services-list-col">
                    <div class="services-links">
                        <a href="/commercial-transactions" class="service-link" style="color:#fff; text-decoration:none;">Commercial Transactions <img src="{{ asset('images/errow-side.svg') }}" alt="Arrow Right" style="width: 27px; height: auto;"></a>
                        <a href="#" class="service-link" style="color:#fff; text-decoration:none;">Procurement & Contracting <img src="{{ asset('images/errow-side.svg') }}" alt="Arrow Right" style="width: 27px; height: auto;"></a>
                        <a href="#" class="service-link" style="color:#fff; text-decoration:none;">Infrastructure & Projects <img src="{{ asset('images/errow-side.svg') }}" alt="Arrow Right" style="width: 27px; height: auto;"></a>
                        <a href="#" class="service-link" style="color:#fff; text-decoration:none;">Operational Risk <img src="{{ asset('images/errow-side.svg') }}" alt="Arrow Right" style="width: 27px; height: auto;"></a>
                    </div>
                </div>
                <div class="mobile-only" style="text-align: center; width: 100%;">
                    <a href="#" class="all-practice-areas" style="color: #fff; text-decoration: none; margin: 0 auto;">All Practice Areas ↗</a>
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
                    <img src="{{ asset('images/our-firm-below.png') }}" alt="Colleagues" class="about-img-below">
                    <img src="{{ asset('images/our-firm-up.png') }}" alt="Building" class="about-img-up">
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
                    <a href="#" class="read-recent">Read Recent Posts <span class="arrow-icon"><img src="{{ asset('images/arrow.svg') }}" alt="Arrow" style="width: 32px; height: 32px; vertical-align: middle;"></span></a>
                </div>
                <div class="news-grid">
                    <!-- Post 1 -->
                    <div class="news-card">
                        <img src="{{ asset('images/domestic-violance.jpg') }}" alt="Domestic Violence">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn-black">Read now</a>
                        </div>
                    </div>
                    <!-- Post 2 -->
                    <div class="news-card">
                        <img src="{{ asset('images/lawywer-helps.jpg') }}" alt="Lawyer Helps">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn-black">Read now</a>
                        </div>
                    </div>
                    <!-- Post 3 -->
                    <div class="news-card">
                        <img src="{{ asset('images/order.jpg') }}" alt="Order">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn-black">Read now</a>
                        </div>
                    </div>
                    <!-- Post 4 -->
                    <div class="news-card">
                        <img src="{{ asset('images/law.jpg') }}" alt="Law">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn-black">Read now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="contact-bg"></div>
            <div class="container contact-container">
                <div class="map-placeholder">
                    <div class="map-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <p>Map location will appear here<br>once firm address is confirmed</p>
                </div>
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
    </body>
</html>
