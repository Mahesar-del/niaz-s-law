<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commercial Transactions - Niaz Law P.C.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Custom Styles for Commercial Transactions Page */
        body {
            background-color: #F8F5EF; /* Ensure body matches the site background if needed, but the original seems to have a light/white background for this page or sections */
            background-color: #ffffff; 
        }

        .ct-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
        }
        /* Overview Images */
        .ct-overview-images {
            display: flex;
            gap: 40px;
            margin-bottom: 3px;
            align-items: flex-start;
        }
        .ct-overview-images .img-left {
            flex: 1.2;
        }
        .ct-overview-images .img-left img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }
        .ct-overview-images .img-right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding-top: 20px;
        }
        .ct-overview-images .img-right img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            margin-bottom: 30px;
        }
        .ct-overview-images .img-right h2 {
            font-family: var(--font-heading);
            font-weight: 700;
            font-size: 34px;
            line-height: 46px;
            letter-spacing: 0.5px;
            color: #000000;
            margin: 0;
        }
        .ct-text-content {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 32px;
            letter-spacing: 0.5px;
            text-align: justify;
            color: #000000;
            margin-bottom: 32px;
        }
        .ct-text-content p {
            margin-bottom: 20px;
        }
        /* Experience */
        .ct-section-title {
            text-align: center;
            font-family: 'Libre Baskerville', serif;
            font-weight: 700;
            font-size: 34px;
            line-height: 46px;
            letter-spacing: 0.5px;
            color: #000000;
            margin-bottom: 30px;
        }
        .ct-tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }
        .ct-tabs button {
            width: 234px;
            height: 50px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #000;
            background: transparent;
            font-weight: 400;
            cursor: pointer;
            transition: all 0.3s ease-out;
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: #000;
        }
        .ct-tabs button.active {
            background: #000;
            color: #fff;
        }
        .ct-tab-content {
            display: none;
            animation: fadeIn 0.3s ease-out;
        }
        .ct-tab-content.active {
            display: block;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .ct-advise-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto 40px;
            text-align: left;
        }
        .ct-advise-item {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 30px;
            letter-spacing: 0.5px;
            color: #000000;
            border-bottom: 0.3px solid rgba(0, 0, 0, 0.7);
            padding-bottom: 20px;
        }
        .ct-advise-item strong {
            font-weight: 600;
            color: #000000;
        }
        .ct-list {
            list-style: none;
            padding: 0;
            max-width: 1000px;
            margin: 0 auto 40px;
            text-align: left;
        }
        .ct-list li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 15px;
            line-height: 1.6;
            color: #333;
        }
        .ct-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            color: #000;
            font-weight: bold;
        }
        /* Lawyers */
        .ct-lawyers {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-bottom: 80px;
        }
        .ct-lawyer-card {
            background: #F8F5EF;
            padding: 0;
            text-align: left;
            border-radius: 4px;
            overflow: hidden;
        }
        .ct-lawyer-card img {
            width: 100%;
            height: auto;
            aspect-ratio: 397 / 230;
            object-fit: cover;
            object-position: top center;
            margin-bottom: 0;
            display: block;
        }
        .ct-lawyer-info {
            padding: 20px;
        }
        .ct-lawyer-card h3 {
            font-size: 20px;
            margin-bottom: 5px;
            font-family: var(--font-heading);
            color: #000;
        }
        .ct-lawyer-card p {
            color: #333;
            font-size: 12px;
            margin-bottom: 15px;
            font-family: 'Inter', sans-serif;
        }
        .ct-lawyer-links {
            display: flex;
            flex-direction: column;
            gap: 2px;
            font-size: 12px;
            font-family: 'Inter', sans-serif;
        }
        .ct-lawyer-links a {
            color: #333;
            text-decoration: none;
        }
        /* Insights */
        .ct-insights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-bottom: 80px;
        }
        .ct-insight-card {
            display: flex;
            gap: 30px;
            background: #fff;
            align-items: center;
        }
        .ct-insight-card img {
            width: 45%;
            aspect-ratio: 262.5 / 342;
            object-fit: cover;
            object-position: center;
            display: block;
        }
        .ct-insight-content {
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 55%;
        }
        .ct-insight-content h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 15px;
            font-family: 'Libre Baskerville', serif;
            line-height: 1;
            border-bottom: 1px solid #ccc;
            padding-bottom: 15px;
            color: #3A3A38;
        }
        .ct-insight-content p {
            font-size: 15px;
            color: #0E0E0E;
            margin-bottom: 7.5px;
            line-height: 22px;
            font-family: 'Inter', sans-serif;
            text-align: justify;
        }
        .ct-btn-black {
            background: #000;
            color: #fff;
            width: 188px;
            height: 42px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            font-size: 14px;
            font-family: 'Libre Baskerville', serif;
            text-decoration: none;
            transition: all 0.3s ease-out;
        }
        .ct-btn-black:hover {
            opacity: 0.8;
        }
        /* Capabilities */
        .ct-capabilities {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 80px;
        }
        .ct-cap-btn {
            border: 1px solid #999;
            padding: 20px;
            text-align: left;
            font-weight: 700;
            font-family: 'Libre Baskerville', serif;
            font-size: 14px;
            display: block;
            transition: all 0.3s;
            color: #000;
            text-decoration: none;
        }
        .ct-cap-btn:hover {
            border-color: #000;
            background: #f9f9f9;
        }
        /* Contact */
        .ct-contact {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-bottom: 60px;
        }
        .ct-contact img {
            width: 100%;
            height: 450px;
            object-fit: cover;
        }
        .ct-contact-content h2 {
            font-size: 32px;
            margin-bottom: 20px;
            font-family: var(--font-heading);
        }
        .ct-contact-content p {
            line-height: 1.6;
            margin-bottom: 20px;
            color: #333;
        }
        .ct-contact-content .ct-btn-black {
            padding: 15px 30px;
            margin-top: 10px;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .ct-advise-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            .ct-overview-images {
                flex-direction: column;
            }
            .ct-overview-images .img-left img, 
            .ct-overview-images .img-right img {
                height: 300px;
            }
            .ct-overview-images .img-right h2 {
                margin-top: 20px;
            }
            .ct-lawyers, .ct-insights, .ct-capabilities, .ct-contact {
                grid-template-columns: 1fr;
            }
            .ct-insight-card {
                flex-direction: column;
            }
            .ct-insight-card img {
                width: 100%;
                height: 250px;
            }
            .ct-insight-content {
                width: 100%;
            }
            .ct-tabs {
                flex-direction: column;
            }
            .ct-contact img {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    @include('components.header')

    @include('components.page-hero', [
        'bgImage' => asset('images/commercial-transection-hero.png'),
        'titleLeft' => 'Commercial',
        'titleRight' => 'Transactions',
        'text' => 'We advise businesses on complex commercial, infrastructure, and operational matters with practical legal guidance aligned to their strategic objectives.'
    ])

    <div class="container" style="padding-top: 23px; padding-bottom: 60px;">
        <!-- Overview Images -->
        <div class="ct-overview-images">
            <div class="img-left">
                <img src="{{ asset('images/commercial-big.jpg') }}" alt="Statue of Justice">
            </div>
            <div class="img-right">
                <img src="{{ asset('images/commercial-small.jpg') }}" alt="Scales of Justice">
                <h2>Commercial Transactions<br>Overview</h2>
            </div>
        </div>

        <div class="ct-text-content">
            <p>Our Commercial Transactions practice advises businesses on a wide range of contractual, operational, and strategic matters that support both day-to-day operations and long-term growth. We assist clients with structuring, drafting, reviewing, and negotiating commercial agreements, including vendor contracts, joint ventures, strategic collaborations, and other business-critical partnerships. Our work is focused on helping clients manage legal risk and operate successfully in today's complex business environment.</p>
            <p>We take a practical, industry-focused approach to our practice, offering insight tailored to the unique contexts and distinct dynamics that may affect performance, risk, and strategy. We provide comprehensive guidance spanning business formation, structural considerations, operations, growth, and exit strategies, ensuring our advice remains relevant throughout the lifecycle of your business and through completion of your commercial transactions.</p>
        </div>

        <!-- Experience -->
        <h2 class="ct-section-title">Experience</h2>
        <div class="ct-tabs">
            <button class="active" onclick="switchTab('how-we-advise', this)">How We Advise</button>
            <button onclick="switchTab('rep-matters', this)">Representative Matters</button>
        </div>

        <div id="how-we-advise" class="ct-tab-content active">
            <div class="ct-advise-grid">
                <div class="ct-advise-item">
                    <strong>Commercial Agreements</strong> — Structuring, drafting, and negotiating agreements that support business operations and commercial objectives.
                </div>
                <div class="ct-advise-item">
                    <strong>Strategic Business Arrangements</strong> — Supporting commercial collaborations, partnerships, and other arrangements tied to broader business strategy.
                </div>
                <div class="ct-advise-item">
                    <strong>Contract Drafting & Negotiation</strong> — Preparing and negotiating clear contractual terms designed to protect business interests and manage obligations.
                </div>
                <div class="ct-advise-item">
                    <strong>Joint Ventures & Partnerships</strong> — Advising on the structure, responsibilities, governance, and commercial terms of collaborative ventures.
                </div>
                <div class="ct-advise-item">
                    <strong>Vendor & Supplier Agreements</strong> — Advising on contracts governing key vendor, supplier, and service-provider relationships.
                </div>
                <div class="ct-advise-item">
                    <strong>Procurement & Contracting</strong> — Providing legal guidance on procurement processes, commercial contracting, and related risk considerations.
                </div>
                <div class="ct-advise-item">
                    <strong>Commercial Risk Allocation</strong> — Identifying and addressing contractual and operational risks through carefully structured commercial terms.
                </div>
            </div>
        </div>

        <div id="rep-matters" class="ct-tab-content" style="display: none;">
            <ul class="ct-list">
                <li>Advised businesses on the structuring and negotiation of complex commercial agreements involving multiple stakeholders.</li>
                <li>Counseled clients on vendor, supplier, and procurement arrangements, including contractual obligations and risk allocation.</li>
                <li>Supported strategic business initiatives and joint ventures in targeted key domestic and international markets.</li>
                <li>Advised on commercial matters connected with infrastructure and aviation-related projects and operations.</li>
                <li>Assisted clients with cross-border transactions involving business activities in the United States and the Middle East.</li>
            </ul>
        </div>

        <!-- Lawyers -->
        <h2 class="ct-section-title" style="margin-top: 20px; margin-bottom: 20px;">Lawyers in Commercial Transactions</h2>
        <div class="ct-lawyers">
            <!-- Lawyer 1 -->
            <div class="ct-lawyer-card">
                <img src="{{ asset('images/lawyer_profile.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&q=80&w=397&h=230&crop=faces'" alt="Faisal Syed Niaz">
                <div class="ct-lawyer-info">
                    <h3>Faisal Syed Niaz</h3>
                    <p>Illinois</p>
                    <div class="ct-lawyer-links">
                        <a href="mailto:example.niaz@lw.com">example.niaz@lw.com</a>
                        <a href="tel:+1000000000">+1.000.000.000</a>
                    </div>
                </div>
            </div>
            <!-- Lawyer 2 -->
            <div class="ct-lawyer-card">
                <img src="{{ asset('images/lawyer_profile.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&q=80&w=397&h=230&crop=faces'" alt="Faisal Syed Niaz">
                <div class="ct-lawyer-info">
                    <h3>Faisal Syed Niaz</h3>
                    <p>Illinois</p>
                    <div class="ct-lawyer-links">
                        <a href="mailto:example.niaz@lw.com">example.niaz@lw.com</a>
                        <a href="tel:+1000000000">+1.000.000.000</a>
                    </div>
                </div>
            </div>
            <!-- Lawyer 3 -->
            <div class="ct-lawyer-card">
                <img src="{{ asset('images/lawyer_profile.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1556157382-97eda2d62296?auto=format&fit=crop&q=80&w=397&h=230&crop=faces'" alt="Faisal Syed Niaz">
                <div class="ct-lawyer-info">
                    <h3>Faisal Syed Niaz</h3>
                    <p>Illinois</p>
                    <div class="ct-lawyer-links">
                        <a href="mailto:example.niaz@lw.com">example.niaz@lw.com</a>
                        <a href="tel:+1000000000">+1.000.000.000</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Insights And News -->
        <h2 class="ct-section-title" style="text-align: left;">Insights And News</h2>
        <div class="ct-insights">
            <!-- Insight 1 -->
            <div class="ct-insight-card">
                <img src="{{ asset('images/domestic-violance.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&q=80&w=400'" alt="Justice Statue">
                <div class="ct-insight-content">
                    <h3>Domestic Violence in California – How a Lawyer Can Help</h3>
                    <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                    <a href="#" class="ct-btn-black">Read now</a>
                </div>
            </div>
            <!-- Insight 2 -->
            <div class="ct-insight-card">
                <img src="{{ asset('images/order.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1589391886645-d51941baf7fb?auto=format&fit=crop&q=80&w=400'" alt="Gavel">
                <div class="ct-insight-content">
                    <h3>Domestic Violence in California – How a Lawyer Can Help</h3>
                    <p>Understand how California domestic violence laws work, what protections may be available, and how an attorney can guide you through the legal process.</p>
                    <a href="#" class="ct-btn-black">Read now</a>
                </div>
            </div>
        </div>

        <!-- Related Capabilities -->
        <h2 class="ct-section-title" style="text-align: left;">Related Capabilities</h2>
        <div class="ct-capabilities">
            <a href="#" class="ct-cap-btn">Commercial Transactions</a>
            <a href="#" class="ct-cap-btn">Infrastructure & Projects</a>
            <a href="#" class="ct-cap-btn">Procurement & Contracting</a>
            <a href="#" class="ct-cap-btn">Corporate Law & Finance</a>
            <a href="#" class="ct-cap-btn">Restructuring & Counseling</a>
            <a href="#" class="ct-cap-btn">Operational & Commercial Risk</a>
        </div>

        <!-- Let's Discuss Your Business Needs -->
        <div class="ct-contact">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32d7?auto=format&fit=crop&q=80&w=800" alt="Business Meeting">
            <div class="ct-contact-content">
                <h2>Let's Discuss Your Business Needs</h2>
                <p><strong>Discuss Your Case with NiazLaw</strong></p>
                <p>Whether you are negotiating a key agreement, structuring a new commercial arrangement, or addressing business risks, we are dedicated to helping you stay aligned with your business objectives.</p>
                <p>Reach out to discuss your transaction.</p>
                <a href="#" class="ct-btn-black">Talk to Our Team</a>
            </div>
        </div>

    </div>

    @include('components.footer')
    
    <script>
        function switchTab(tabId, btnElement) {
            document.querySelectorAll('.ct-tab-content').forEach(el => el.style.display = 'none');
            document.querySelectorAll('.ct-tabs button').forEach(el => el.classList.remove('active'));
            document.getElementById(tabId).style.display = 'block';
            btnElement.classList.add('active');
        }
    </script>
</body>
</html>
