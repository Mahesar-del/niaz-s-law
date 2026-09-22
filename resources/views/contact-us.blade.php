<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Niaz Law P.C.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .contact-page { background: #fff; }
        .contact-hero { min-height: 490px; padding: 142px 0 70px; display: flex; align-items: flex-end; color: #fff; background: linear-gradient(90deg, rgba(0,0,0,.64), rgba(0,0,0,.34)), url('{{ asset('images/commercial-transection-hero.png') }}') center / cover; }
        .contact-hero__content { display: grid; grid-template-columns: minmax(320px, .9fr) 1.1fr; gap: 72px; align-items: center; }
        .contact-hero h1 { margin: 0; color: #fff; font-size: clamp(43px, 4.6vw, 68px); }
        .contact-hero p { max-width: 550px; margin: 0; padding-left: 40px; border-left: 1px solid rgba(255,255,255,.9); color: #f7f7f7; font-size: 16px; line-height: 1.65; }
        .contact-main { padding: 26px 0 88px; }
        .contact-main h2 { margin: 0 0 35px; font-size: clamp(34px, 3vw, 46px); }
        .contact-layout { display: grid; grid-template-columns: 1.08fr .92fr; gap: 82px; align-items: stretch; }
        .contact-form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 24px 28px; }
        .contact-field { display: flex; flex-direction: column; gap: 9px; }
        .contact-field label { font-family: var(--font-heading); font-size: 17px; font-weight: 700; }
        .contact-field input, .contact-field select, .contact-field textarea { width: 100%; border: 1px solid #777; border-radius: 4px; padding: 15px 17px; color: #111; background: #fff; font: 16px var(--font-body); }
        .contact-field input::placeholder, .contact-field textarea::placeholder { color: #9a9a9a; }
        .contact-field textarea { min-height: 116px; resize: vertical; }
        .contact-field--full { grid-column: 1 / -1; }
        .contact-submit { display: block; min-width: 285px; min-height: 54px; margin: 35px auto 0; border: 0; background: #000; color: #fff; font: 600 16px var(--font-heading); cursor: pointer; }
        .contact-map { height: 100%; overflow: hidden; border-radius: 9px; background: #e7e5df; }
        .contact-map iframe { width: 100%; height: 100%; border: 0; display: block; filter: saturate(.72) contrast(.94); }
        .contact-cards { display: grid; grid-template-columns: repeat(4, 292px); justify-content: space-between; gap: 24px; margin-top: 76px; align-items: stretch; }
        .contact-card { width: 292px; height: 211px; padding: 30px 20px 22px; display: flex; flex-direction: column; align-items: center; justify-content: flex-start; text-align: center; background: #faf7f1; border: 1px solid #e1ded8; border-radius: 8px; box-shadow: 0 6px 0 #000; }
        .contact-card svg { width: 34px; height: 34px; margin-bottom: 20px; stroke: #000; stroke-width: 2.25; fill: none; }
        .contact-card h3 { margin: 0 0 13px; font-size: 20px; line-height: 1.2; overflow-wrap: anywhere; }
        .contact-card p { margin: 0; font-size: 17px; line-height: 1.4; overflow-wrap: anywhere; }
        .contact-card--office p { width: 100%; font-size: 20px; line-height: 1.35; text-align: left; white-space: normal; overflow-wrap: normal; }
        @media (max-width: 1320px) { .contact-cards { grid-template-columns: repeat(4, minmax(0, 1fr)); justify-content: stretch; gap: 16px; } .contact-card { width: 100%; } }
        @media (max-width: 950px) { .contact-hero__content { grid-template-columns: 1fr; gap: 24px; } .contact-hero p { padding-left: 0; border: 0; } .contact-layout { grid-template-columns: 1fr; gap: 55px; } .contact-map, .contact-map iframe { min-height: 430px; height: 430px; } }
        @media (max-width: 600px) { .contact-hero { min-height: 490px; padding: 145px 0 52px; } .contact-hero h1 { font-size: 42px; } .contact-hero p { font-size: 16px; } .contact-main { padding: 55px 0 68px; } .contact-main h2 { margin-bottom: 28px; } .contact-form-grid { grid-template-columns: 1fr; gap: 20px; } .contact-field--full { grid-column: auto; } .contact-submit { width: 100%; min-width: 0; } .contact-map, .contact-map iframe { min-height: 330px; height: 330px; } .contact-cards { grid-template-columns: 1fr; justify-content: stretch; gap: 24px; margin-top: 52px; } .contact-card { width: 100%; height: auto; min-height: 190px; padding: 25px 18px 20px; } .contact-card svg { margin-bottom: 13px; } .contact-card h3 { margin-bottom: 8px; font-size: 20px; } .contact-card p { font-size: 15px; } }
    </style>
</head>
<body class="contact-page">
    @include('components.header')
    <main>
        <section class="contact-hero">
            <div class="container contact-hero__content">
                <h1>Contact Us</h1>
                <p>Connect with our team to discuss your business, transaction, project, or other legal needs.</p>
            </div>
        </section>
        <section class="contact-main">
            <div class="container">
                <div class="contact-layout">
                    <div class="contact-form-panel">
                        <h2>Get In Touch</h2>
                        <form action="#" method="post" id="contact-form">
                            <div class="contact-form-grid">
                                <div class="contact-field"><label for="first-name">First Name *</label><input id="first-name" type="text" placeholder="Name" pattern="[A-Za-z][A-Za-z\s'-]*" minlength="2" maxlength="50" data-name-input required></div>
                                <div class="contact-field"><label for="last-name">Last Name *</label><input id="last-name" type="text" placeholder="Name" pattern="[A-Za-z][A-Za-z\s'-]*" minlength="2" maxlength="50" data-name-input required></div>
                                <div class="contact-field"><label for="email">Email *</label><input id="email" type="email" placeholder="Email" required></div>
                                <div class="contact-field"><label for="phone">Phone Number *</label><input id="phone" type="tel" placeholder="Number" inputmode="numeric" pattern="[0-9]{7,15}" minlength="7" maxlength="15" data-phone-input required></div>
                                <div class="contact-field"><label for="company">Company / Organization</label><input id="company" type="text" placeholder="Name"></div>
                                <div class="contact-field"><label for="practice">How Can We Help ? *</label><select id="practice" required><option value="">Select Practice Area</option><option>Commercial Transactions</option><option>Procurement &amp; Contracting</option><option>Infrastructure &amp; Projects</option><option>Operational Risk</option></select></div>
                                <div class="contact-field contact-field--full"><label for="message">Message *</label><textarea id="message" placeholder="Tell us briefly how we can help" required></textarea></div>
                            </div>
                            <button class="contact-submit" type="submit">Submit Inquiry</button>
                        </form>
                    </div>
                    <div class="contact-map"><iframe title="Niaz Law Franklin Park office location" src="https://www.google.com/maps?q=9933+Franklin+Ave,+Franklin+Park,+IL+60131&amp;z=17&amp;output=embed" loading="lazy"></iframe></div>
                </div>
                <section class="contact-cards" aria-label="Contact details">
                    <article class="contact-card"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14" rx="4"/><path d="m3 8 9 6 9-6"/></svg><h3>Email</h3><p>{{ $contactSettings->email ?? 'info@niazlawpc.com' }}</p></article>
                    <article class="contact-card"><svg viewBox="0 0 24 24"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.4 19.4 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.4 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2Z"/></svg><h3>Phone</h3><p>{{ $contactSettings->phone ?? '(630) 201-5927' }}</p></article>
                    <article class="contact-card contact-card--office"><svg viewBox="0 0 24 24"><path d="M20 10c0 6-8 11-8 11S4 16 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg><h3>Franklin Park Office:</h3><p>{!! nl2br(e($contactSettings->franklin_address ?? "9933 Franklin Ave.\nFranklin Park, IL 60131")) !!}</p></article>
                    <article class="contact-card contact-card--office"><svg viewBox="0 0 24 24"><path d="M20 10c0 6-8 11-8 11S4 16 4 10a8 8 0 1 1 16 0Z"/><circle cx="12" cy="10" r="2.5"/></svg><h3>Naperville / Lisle Office:</h3><p>{!! nl2br(e($contactSettings->naperville_address ?? "3333 Warrenville Road, Suite 200\nLisle, IL 60532, USA")) !!}</p></article>
                </section>
            </div>
        </section>
    </main>
    @include('components.footer')
    <script>
        document.querySelectorAll('[data-name-input]').forEach((input) => {
            input.addEventListener('input', () => {
                input.value = input.value.replace(/[^A-Za-z\s'-]/g, '');
                input.setCustomValidity('');
            });
            input.addEventListener('invalid', () => {
                input.setCustomValidity('Please enter a name using letters only.');
            });
        });

        const phoneInput = document.querySelector('[data-phone-input]');
        phoneInput.addEventListener('input', () => {
            phoneInput.value = phoneInput.value.replace(/\D/g, '');
            phoneInput.setCustomValidity('');
        });
        phoneInput.addEventListener('invalid', () => {
            phoneInput.setCustomValidity('Please enter a valid phone number using 7 to 15 digits.');
        });
    </script>
</body>
</html>
