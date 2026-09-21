<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Attorneys - Niaz Law P.C.</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="antialiased">
        @include('components.header')

        <!-- Attorney Hero Section -->
        <section class="attorney-hero">
            <div class="attorney-hero-bg">
                <img src="{{ asset('images/attorney-hero.jpg') }}" alt="Justice Scales">
                <div class="hero-overlay"></div>
            </div>
            <div class="container attorney-hero-content">
                <div class="hero-text-row">
                    <h1 class="page-title">Lawyer</h1>
                    <div class="title-divider"></div>
                    <p class="page-description">
                        Experienced legal counsel focused on complex business matters, strategic transactions, and practical solutions tailored to each client's needs.
                    </p>
                </div>
            </div>
        </section>

        <!-- Search Bar Section -->
        <section class="search-section">
            <div class="container">
                <div class="search-bar-wrapper">
                    <div class="search-input-group">
                        <div class="search-input-inner">
                            <svg class="search-icon" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            <input type="text" placeholder="Search by name">
                        </div>
                        <button type="button" class="btn btn-search">Search</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filters Section -->
        <section class="filters-section">
            <div class="container">
                <div class="filters-row">
                    <div class="custom-select">
                        <select class="filter-dropdown">
                            <option value="">Practice</option>
                        </select>
                    </div>
                    <div class="custom-select">
                        <select class="filter-dropdown">
                            <option value="">Industry</option>
                        </select>
                    </div>
                    <div class="custom-select">
                        <select class="filter-dropdown">
                            <option value="">Location</option>
                        </select>
                    </div>
                    <div class="custom-select">
                        <select class="filter-dropdown">
                            <option value="">Tittle</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lawyers Grid Section -->
        <section class="lawyers-section">
            <div class="container">
                <div class="lawyers-grid">
                    @for($i=0; $i<9; $i++)
                    <div class="lawyer-card">
                        <div class="lawyer-img">
                            <img src="{{ asset('images/lawyer_profile.jpg') }}" alt="Faisal Syed Niaz">
                        </div>
                        <div class="lawyer-info">
                            <h3>Faisal Syed Niaz</h3>
                            <p class="title">Partner</p>
                            <p class="location">Illinois</p>
                            <p class="email">example.niaz@lw.com</p>
                            <p class="phone">+1.000.000.000</p>
                        </div>
                    </div>
                    @endfor
                </div>
                
                <div class="load-more-container">
                    <button class="btn btn-black btn-load-more">Load More</button>
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
