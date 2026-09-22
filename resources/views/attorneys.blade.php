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
                    <div class="custom-dropdown">
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
                    
                    <div class="custom-dropdown">
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

                    <div class="custom-dropdown">
                        <div class="dropdown-header">
                            <span>Location</span>
                            <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-item">Franklin Park</div>
                            <div class="dropdown-item">Naperville / Lisle</div>
                        </div>
                    </div>

                    <div class="custom-dropdown">
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
                    @for($i=0; $i<9; $i++)
                    <div class="lawyer-card" onclick="window.location.href='{{ url('/attorney-detail') }}'">
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

            // Optional: update text on selection and filter
            document.querySelectorAll('.dropdown-item').forEach(item => {
                item.addEventListener('click', function(e) {
                    e.stopPropagation();
                    let parent = this.closest('.custom-dropdown');
                    let headerSpan = parent.querySelector('.dropdown-header span');
                    headerSpan.textContent = this.textContent;
                    parent.classList.remove('open');
                    
                    // Filter functionality
                    let selectedValue = this.textContent.toLowerCase();
                    let visibleCount = 0;
                    document.querySelectorAll('.lawyer-card').forEach(card => {
                        let cardText = card.textContent.toLowerCase();
                        if(cardText.includes(selectedValue)) {
                            card.style.display = 'flex';
                            visibleCount++;
                        } else {
                            card.style.display = 'none';
                        }
                    });

                    // Hide load more if we are filtering or no results
                    const loadMoreBtn = document.querySelector('.load-more-container');
                    if (loadMoreBtn) {
                        loadMoreBtn.style.display = 'none';
                    }
                });
            });

            // Close when clicking outside
            document.addEventListener('click', function() {
                document.querySelectorAll('.custom-dropdown').forEach(dropdown => {
                    dropdown.classList.remove('open');
                });
            });

            // Search functionality
            const searchInput = document.querySelector('.search-input-inner input');
            const searchBtn = document.querySelector('.btn-search');
            
            function performSearch() {
                let query = searchInput.value.toLowerCase();
                let visibleCount = 0;
                document.querySelectorAll('.lawyer-card').forEach(card => {
                    let name = card.querySelector('h3').textContent.toLowerCase();
                    if(name.includes(query)) {
                        card.style.display = 'flex';
                        visibleCount++;
                    } else {
                        card.style.display = 'none';
                    }
                });
                
                // Hide load more if we are searching or no results
                const loadMoreBtn = document.querySelector('.load-more-container');
                if (loadMoreBtn) {
                    if (query !== '' || visibleCount === 0) {
                        loadMoreBtn.style.display = 'none';
                    } else {
                        loadMoreBtn.style.display = 'block';
                    }
                }
            }

            searchInput.addEventListener('input', performSearch);
            searchBtn.addEventListener('click', performSearch);
        </script>
    </body>
</html>
