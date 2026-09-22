<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Faisal Syed Niaz - Niaz Law P.C.</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        @include('components.header')

        <!-- Attorney Detail Hero Section -->
        <section class="attorney-detail-hero">
            <div class="hero-bg-container">
                <img src="{{ asset('images/attorney-hero.jpg') }}" alt="Cityscape background" class="hero-bg-img">
                <div class="hero-overlay-dark"></div>
            </div>
            <div class="container hero-content-container">
                <!-- Title Row -->
                <div class="hero-title-row">
                    <h1 class="lawyer-name">Faisal Syed Niaz</h1>
                    <div class="title-line"></div>
                    <div class="share-icon">
                        <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                    </div>
                </div>

                <!-- Info Row with Overlapping Image -->
                <div class="hero-info-row">
                    <div class="profile-image-container">
                        <img src="{{ asset('images/lawyer_profile.jpg') }}" alt="Faisal Syed Niaz">
                    </div>
                    <div class="contact-info-list">
                        <p class="lawyer-title">Partner</p>
                        <ul class="contact-details">
                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span>example.niaz@lw.com</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                <span>+1.000.000.000</span>
                            </li>
                            <li>
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                <span>Illinois</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Overview Section -->
        <section class="overview-section">
            <div class="container">
                <div class="overview-content">
                    <div class="profile-spacer"></div> <!-- Space for the overlapping image -->
                    <div class="overview-text-container">
                        <h2>Overview</h2>
                        <p>Faisal Syed Niaz is an infrastructure and commercial transactions attorney with more than 15 years of experience advising businesses on complex transactions, infrastructure matters, aviation, and strategic business initiatives across the United States and the Middle East.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section class="experience-section">
            <div class="container">
                <h2>Experience</h2>
                <p>Over the course of his career, Faisal has advised businesses on a wide range of transactional, infrastructure, and project-related legal matters. His experience includes supporting clients with commercial agreements, contractual obligations, aviation matters, strategic initiatives, and cross-border business activities involving the United States and the Middle East. He brings a practical, business-focused approach to helping clients structure transactions, manage risk, and address complex legal and operational considerations.</p>
                <ul class="experience-list">
                    <li>Commercial Transactions</li>
                    <li>Infrastructure & Projects</li>
                    <li>Procurement & Contracting</li>
                    <li>Commercial & Operational Risk</li>
                </ul>
            </div>
        </section>

        <!-- Credentials Section -->
        <section class="credentials-section">
            <div class="container">
                <h2>Credentials</h2>
                <div class="credentials-grid">
                    <div class="credential-column">
                        <h3>Education</h3>
                        <ul>
                            <li>Juris Doctor (JD), Michigan State University</li>
                            <li>Bachelor's Degree in Psychology and Marketing, Southern Illinois University</li>
                        </ul>
                    </div>
                    <div class="credential-column admissions-col">
                        <h3>Admissions</h3>
                        <ul>
                            <li>Illinois Bar</li>
                            <li>U.S. District Court for the Northern District of Illinois</li>
                            <li>U.S. Tax Court</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Insights And News Section -->
        <section class="insights-news-section">
            <div class="container">
                <h2>Insights And News</h2>
                <div class="insights-grid">
                    <div class="insight-card">
                        <img src="{{ asset('images/insight_1.jpg') }}" alt="Justice Statue">
                        <div class="insight-content">
                            <h3>Domestic Violence in California - How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn btn-black">Read more</a>
                        </div>
                    </div>
                    <div class="insight-card">
                        <img src="{{ asset('images/insight_2.jpg') }}" alt="Gavel">
                        <div class="insight-content">
                            <h3>Domestic Violence in California - How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn btn-black">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('components.footer')
        
        <script>
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        </script>
    </body>
</html>
