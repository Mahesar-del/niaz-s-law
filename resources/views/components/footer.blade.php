@php($footerContact = \App\Models\ContactSetting::first()) @php($footerSettings = \App\Models\FooterSetting::first()) @php($footerCapabilities = \App\Models\Capability::whereIn('id', $footerSettings->capability_ids ?? [])->get()) @php($footerStaticPages = \App\Models\StaticPage::where('status', 'published')->orderBy('title')->get())
<footer class="site-footer">
    <div class="container">
        <div class="footer-logo">
            <img src="{{ asset('images/footer-logo.png') }}" alt="Niaz Law P.C. Logo">
        </div>
        <hr class="footer-divider">
        <div class="footer-grid">
            <!-- About Us -->
            <div class="footer-col">
                <h4>About Us</h4>
                <p>Expert legal counsel and dedicated representation for your business and personal legal matters.</p>
                <div class="footer-socials">
                    <a href="#"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12c0-5.523-4.477-10-10-10z"/></svg></a>
                    <a href="#"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-1.47 0-2.12.8-2.49 1.37v-1.17h-2.76v8.36h2.76v-4.64c0-1.24.23-2.44 1.77-2.44 1.52 0 1.54 1.41 1.54 2.52v4.56h2.44M7.83 18.5v-8.36H5.06v8.36h2.77M6.45 6.09c-.9 0-1.62.72-1.62 1.62s.72 1.63 1.62 1.63 1.62-.73 1.62-1.63-.72-1.62-1.62-1.62z"/></svg></a>
                    <a href="#"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg></a>
                    <a href="#"><svg viewBox="0 0 24 24" fill="currentColor" fill-rule="evenodd"><path d="M12 0C8.74 0 8.33.01 7.05.07c-1.27.06-2.14.26-2.9.56a5.88 5.88 0 0 0-2.12 1.38 5.88 5.88 0 0 0-1.38 2.12c-.3.76-.5 1.63-.56 2.9C.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.14.56 2.9a5.88 5.88 0 0 0 1.38 2.12 5.88 5.88 0 0 0 2.12 1.38c.76.3 1.63.5 2.9.56 1.28.06 1.69.07 4.95.07s3.67-.01 4.95-.07c1.27-.06 2.14-.26 2.9-.56a5.88 5.88 0 0 0 2.12-1.38 5.88 5.88 0 0 0 1.38-2.12c.3-.76.5-1.63.56-2.9.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.14-.56-2.9a5.88 5.88 0 0 0-1.38-2.12 5.88 5.88 0 0 0-2.12-1.38c-.76-.3-1.63-.5-2.9-.56C15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 1 1 0 12.32 6.16 6.16 0 0 1 0-12.32zm6.4 2.88a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0zM12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/></svg></a>
                </div>
            </div>
            <!-- Services --><div class="footer-col"><h4>Services</h4><ul class="footer-links">@foreach($footerCapabilities as $capability)<li><a href="{{ route('capabilities.show', ['capability' => $capability->slug ?: $capability->id]) }}">{{ $capability->title }}</a></li>@endforeach</ul></div><!-- Page -->
            <div class="footer-col">
                <h4>Page</h4>
                <ul class="footer-links">
                    <li><a href="/attorneys">Lawyer</a></li>
                    <li><a href="/contact-us">Appointment</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/case-study">Cases</a></li>
                    <li><a href="/blog">Blog</a></li>
                </ul>
            </div>
            <!-- Links -->
            <div class="footer-col">
                <h4>Links</h4>
                <ul class="footer-links">
                    @forelse($footerStaticPages as $staticPage)
                    <li><a href="{{ route('static-pages.show', $staticPage) }}">{{ $staticPage->title }}</a></li>
                    @empty
                    <li><span>No pages available</span></li>
                    @endforelse
                </ul>
            </div>
            <!-- Contact Us -->
            <div class="footer-col contact-info">
                <h4>Contact Us</h4>
                <ul>
                    <li>
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <span>{{ $footerContact->email ?? 'info@niazlawpc.com' }}</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        <span>{{ $footerContact->phone ?? '(630) 201-5927' }}</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>{!! nl2br(e($footerContact->franklin_address ?? "9933 Franklin Ave.\nFranklin Park, IL 60131")) !!}</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span>{!! nl2br(e($footerContact->naperville_address ?? "3333 Warrenville Road, Suite 200\nLisle, IL 60532, USA")) !!}</span>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="footer-divider">
        <div class="footer-bottom">
            <p>Copyright &copy; 2026 Niaz Law P.C. - All Rights Reserved.</p>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const footerCols = document.querySelectorAll('.site-footer .footer-col');
    footerCols.forEach(function(col) {
        const h4 = col.querySelector('h4');
        if (h4 && col.querySelector('.footer-links')) {
            h4.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    col.classList.toggle('active');
                }
            });
        }
    });
});
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const footerHeaders = document.querySelectorAll('.footer-col h4');
        footerHeaders.forEach(header => {
            header.addEventListener('click', function() {
                if (window.innerWidth <= 1024) {
                    const col = this.parentElement;
                    // Only apply if there's a list to show (prevents logo/contact cols from toggling strangely)
                    if (col.querySelector('.footer-links')) {
                        col.classList.toggle('open');
                    }
                }
            });
        });
    });
</script>
