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
                    <div class="custom-dropdown" data-filter="practice">
                        <div class="dropdown-header">
                            <span>Practice</span>
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Commercial Transactions</div>
                            <div class="dropdown-item">Infrastructure & Projects</div>
                            <div class="dropdown-item">Procurement & Contracting</div>
                            <div class="dropdown-item">Aviation</div>
                            <div class="dropdown-item">Commercial Risk</div>
                            <div class="dropdown-item">International Business</div>
                        </div>
                    </div>
                    
                    <div class="custom-dropdown" data-filter="industry">
                        <div class="dropdown-header">
                            <span>Industry</span>
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Aviation</div>
                            <div class="dropdown-item">Energy & Infrastructure</div>
                            <div class="dropdown-item">Technology</div>
                            <div class="dropdown-item">Healthcare & Life Sciences</div>
                            <div class="dropdown-item">Real Estate & Construction</div>
                        </div>
                    </div>

                    <div class="custom-dropdown" data-filter="location">
                        <div class="dropdown-header">
                            <span>Location</span>
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Franklin Park</div>
                            <div class="dropdown-item">Naperville / Lisle</div>
                        </div>
                    </div>

                    <div class="custom-dropdown" data-filter="title">
                        <div class="dropdown-header">
                            <span>Title</span>
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Partner</div>
                            <div class="dropdown-item">Senior of Counsel</div>
                            <div class="dropdown-item">Senior Counsel</div>
                            <div class="dropdown-item">Counsel</div>
                            <div class="dropdown-item">Associate Attorney</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lawyers Grid Section -->
        <section class="lawyers-section">
            <div class="container">
                <div class="lawyers-grid">
                    @forelse($attorneys as $attorney)
                    <div class="lawyer-card" data-name="{{ strtolower($attorney->name) }}" data-practice="{{ strtolower($attorney->practice) }}" data-industry="{{ strtolower($attorney->industry) }}" data-location="{{ strtolower($attorney->location) }}" data-title="{{ strtolower($attorney->title) }}">
                        <div class="lawyer-img">
                            <img src="{{ asset('images/' . ($attorney->photo ?: 'lawyer_profile.jpg')) }}" alt="{{ $attorney->name }}">
                        </div>
                        <div class="lawyer-info">
                            <h3>{{ $attorney->name }}</h3>
                            <p class="title">{{ $attorney->title }}</p>
                            <p class="location">{{ $attorney->location }}</p>
                            <p class="email">{{ $attorney->email }}</p>
                            <p class="phone">{{ $attorney->phone }}</p>
                        </div>
                    </div>
                    @empty
                    <p class="lawyers-empty">No attorneys added yet. New attorneys added from the admin panel will appear here.</p>
                    @endforelse
                </div>
                
                @if($attorneys->count() > 6)
                <div class="load-more-container">
                    <button class="btn btn-black btn-load-more">Load More</button>
                </div>
                @endif
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

            // Custom Dropdown Logic
            document.querySelectorAll('.dropdown-header').forEach(header => {
                header.addEventListener('click', function(e) {
                    e.stopPropagation();
                    let parent = this.parentElement;
                    
                    // Close others
                    document.querySelectorAll('.custom-dropdown').forEach(dropdown => {
                        if (dropdown !== parent) {
                            dropdown.classList.remove('open');
                        }
                    });

                    // Toggle current
                    parent.classList.toggle('open');
                });
            });

            const selectedFilters = { practice: '', industry: '', location: '', title: '' };
            const searchInput = document.querySelector('.search-input-inner input');
            const searchBtn = document.querySelector('.btn-search');
            const cards = [...document.querySelectorAll('.lawyer-card')];

            function applyFilters() {
                const query = searchInput.value.trim().toLowerCase();
                cards.forEach(card => {
                    const nameMatches = !query || card.dataset.name.includes(query);
                    const filtersMatch = Object.entries(selectedFilters).every(([key, value]) => !value || card.dataset[key].includes(value));
                    card.style.display = nameMatches && filtersMatch ? 'flex' : 'none';
                });
                const loadMore = document.querySelector('.load-more-container');
                if (loadMore) loadMore.style.display = 'none';
            }

            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const parent = this.closest('.custom-dropdown');
                    const filter = parent.dataset.filter;
                    selectedFilters[filter] = this.textContent.trim().toLowerCase();
                    parent.querySelector('.dropdown-header span').textContent = this.textContent;
                    parent.classList.remove('open');
                    applyFilters();
                });
            });

            // Close when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.custom-dropdown').forEach(dropdown => {
                    dropdown.classList.remove('open');
                });
            });

            searchInput.addEventListener('input', applyFilters);
            searchBtn.addEventListener('click', applyFilters);
        </script>
    </body>
</html>
