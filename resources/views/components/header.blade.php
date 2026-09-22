<header class="navbar">
    <div class="container navbar-container">
        <div class="nav-logo">
            <a href="/">
                <img src="{{ asset('images/header-logo.png') }}" alt="Niaz Law P.C." style="max-height: 50px; width: auto;">
            </a>
        </div>
        <div style="display: flex; align-items: center; gap: 32px;">
            <nav class="nav-links">
                <a href="/attorneys">Attorneys</a>
                <a href="#">Capabilities</a>
                <a href="/blog">Insights &amp; Resources</a>
                <a href="#">About</a>
                <a href="/contact-us">Contact</a>
            </nav>
            <div class="nav-actions" style="display: flex; align-items: center; gap: 16px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                <button class="mobile-menu-toggle" type="button" aria-label="Open menu" aria-controls="mobile-menu" aria-expanded="false"><svg class="hamburger-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></button>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" id="mobile-menu" aria-hidden="true">
    <div class="mobile-menu__panel">
        <div class="mobile-menu__top">
            <a href="/"><img src="{{ asset('images/header-logo.png') }}" alt="Niaz Law P.C."></a>
            <button class="mobile-menu__close" type="button" aria-label="Close menu">×</button>
        </div>
        <nav class="mobile-menu__links" aria-label="Mobile navigation">
            <a href="/attorneys">Attorneys</a><a href="#">Capabilities</a><a href="/insights">Insights &amp; Resources <svg class="mobile-menu__chevron" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></a><a href="#">About</a><a href="/contact-us">Contact</a>
        </nav>
        <div class="mobile-menu__socials"><a href="#">f</a><a href="#">in</a><a href="#">♥</a><a href="#">◎</a></div>
    </div>
</div>

<script>
    (() => {
        const navbar = document.querySelector('.navbar');
        const menu = document.querySelector('.mobile-menu');
        const menuToggle = document.querySelector('.mobile-menu-toggle');
        const menuClose = document.querySelector('.mobile-menu__close');
        let previousScrollY = window.scrollY;

        const closeMenu = () => {
            document.body.classList.remove('mobile-menu-open');
            menu.setAttribute('aria-hidden', 'true');
            menuToggle.setAttribute('aria-expanded', 'false');
        };

        menuToggle.addEventListener('click', () => {
            const isOpen = document.body.classList.toggle('mobile-menu-open');
            menu.setAttribute('aria-hidden', String(!isOpen));
            menuToggle.setAttribute('aria-expanded', String(isOpen));
        });
        menuClose.addEventListener('click', closeMenu);
        menu.addEventListener('click', (event) => {
            if (event.target === menu || event.target.closest('.mobile-menu__links a')) closeMenu();
        });

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            if (currentScrollY <= 0) {
                navbar.classList.remove('navbar-hidden', 'scrolled');
            } else if (currentScrollY > previousScrollY && currentScrollY > 80) {
                navbar.classList.add('navbar-hidden');
            } else if (currentScrollY < previousScrollY) {
                navbar.classList.remove('navbar-hidden');
                navbar.classList.add('scrolled');
            }

            previousScrollY = currentScrollY;
        }, { passive: true });
    })();
</script>
