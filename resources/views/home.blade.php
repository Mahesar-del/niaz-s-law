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
            <div class="hero-content">
                <h1>We Stand With You.<br>We Fight for Justice.</h1>
                <a href="#" class="btn btn-secondary">Contact Us <span class="arrow-icon">↗</span></a>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <h2 class="section-title">Latest Insights From Niaz Law</h2>
            </div>
            <div class="insights-grid">
                <div class="insight-card" style="background-image: url('https://images.unsplash.com/photo-1521791136064-7986c2920216?w=800&auto=format&fit=crop');">
                    <div class="insight-content">
                        <h3>Insights &ndash; June 2026</h3>
                    </div>
                </div>
                <div class="insight-card" style="background-image: url('https://images.unsplash.com/photo-1505664194779-8beaceb93744?w=800&auto=format&fit=crop');">
                    <div class="insight-content">
                        <h3>Inside the Courts &ndash; Niaz's Securities<br>Litigation Update</h3>
                    </div>
                </div>
                <div class="insight-card" style="background-image: url('https://images.unsplash.com/photo-1589994965851-a8f479c573a9?w=800&auto=format&fit=crop');">
                    <div class="insight-content">
                        <h3>Niaz's Podcasts</h3>
                    </div>
                </div>
                <div class="insight-card" style="background-image: url('https://images.unsplash.com/photo-1555353540-64fd3b71c93c?w=800&auto=format&fit=crop');">
                    <div class="insight-content">
                        <h3>The Informed Board &ndash; September 2026</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section bg-primary">
            <div class="container services-container">
                <div class="services-img-col">
                    <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?w=800&auto=format&fit=crop" alt="Gavel">
                    <h2>Professional Services Prepared To Be Your Lawyer Firm</h2>
                    <a href="#" class="all-practice-areas" style="color: #fff;">All Practice Areas <span class="arrow-icon">↗</span></a>
                </div>
                <div class="services-links">
                    <a href="#" class="service-link">Commercial Transactions <span>&rarr;</span></a>
                    <a href="#" class="service-link">Procurement & Contracting <span>&rarr;</span></a>
                    <a href="#" class="service-link">Infrastructure & Projects <span>&rarr;</span></a>
                    <a href="#" class="service-link">Operational Risk <span>&rarr;</span></a>
                </div>
            </div>
        </section>

        <section class="about-section">
            <div class="container about-container">
                <div>
                    <h2 class="section-title">Learn About<br>Our Firm</h2>
                    <div class="about-features">
                        <div class="feature">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"></path></svg>
                            </div>
                            <div>
                                <h4>LEGACY</h4>
                                <p>Built on years of advising businesses across complex commercial, infrastructure, and strategic legal matters.</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path></svg>
                            </div>
                            <div>
                                <h4>INTEGRITY</h4>
                                <p>We provide clear, dependable legal guidance with professionalism, discretion, and a strong sense of responsibility.</p>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path></svg>
                            </div>
                            <div>
                                <h4>COMMUNITY</h4>
                                <p>We focus on understanding client priorities and delivering practical legal solutions that support informed business decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-images">
                    <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?w=600&auto=format&fit=crop" alt="Colleagues" class="about-img-1">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&auto=format&fit=crop" alt="Building" class="about-img-2">
                </div>
            </div>
        </section>

        <section class="results-section bg-secondary">
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

        <section class="section bg-secondary" style="padding-top: 0;">
            <div class="container">
                <div class="news-header">
                    <h2>The Latest News And Blog From Niaz Law</h2>
                    <a href="#" class="read-recent">Read Recent Posts <span class="arrow-icon">↗</span></a>
                </div>
                <div class="news-grid">
                    <!-- Post 1 -->
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?w=500&auto=format&fit=crop" alt="Statue of justice">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn btn-primary">Read now</a>
                        </div>
                    </div>
                    <!-- Post 2 -->
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1589391886645-d51941baf7fb?w=500&auto=format&fit=crop" alt="Gavel">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn btn-primary">Read now</a>
                        </div>
                    </div>
                    <!-- Post 3 -->
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1589994965851-a8f479c573a9?w=500&auto=format&fit=crop" alt="Law book">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn btn-primary">Read now</a>
                        </div>
                    </div>
                    <!-- Post 4 -->
                    <div class="news-card">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=500&auto=format&fit=crop" alt="Statue close up">
                        <div class="news-content">
                            <h3>Domestic Violence in California &ndash; How a Lawyer Can Help</h3>
                            <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                            <a href="#" class="btn btn-primary">Read now</a>
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
    </body>
</html>
