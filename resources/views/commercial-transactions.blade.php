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
            margin-bottom: 40px;
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
            font-size: 32px;
            font-family: var(--font-heading);
            margin: 0;
            line-height: 1.3;
        }
        .ct-text-content {
            font-size: 16px;
            line-height: 1.8;
            color: #333;
            margin-bottom: 80px;
        }
        .ct-text-content p {
            margin-bottom: 20px;
        }
        /* Experience */
        .ct-section-title {
            text-align: center;
            font-size: 32px;
            margin-bottom: 30px;
            font-family: var(--font-heading);
        }
        .ct-tabs {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 40px;
        }
        .ct-tabs button {
            padding: 12px 30px;
            border: 1px solid #000;
            background: transparent;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            font-family: var(--font-body);
        }
        .ct-tabs button.active {
            background: #000;
            color: #fff;
        }
        .ct-list {
            list-style: none;
            padding: 0;
            max-width: 900px;
            margin: 0 auto 80px;
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
            background: #fff;
            padding: 0;
            text-align: left;
            border-bottom: 1px solid #eee;
            padding-bottom: 20px;
        }
        .ct-lawyer-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .ct-lawyer-card h3 {
            font-size: 20px;
            margin-bottom: 5px;
            font-family: var(--font-heading);
        }
        .ct-lawyer-card p {
            color: #666;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .ct-lawyer-links {
            display: flex;
            flex-direction: column;
            gap: 5px;
            font-size: 14px;
        }
        .ct-lawyer-links a {
            color: #000;
            text-decoration: none;
        }
        /* Insights */
        .ct-insights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-bottom: 80px;
        }
        .ct-insight-card {
            display: flex;
            gap: 20px;
            background: #f9f9f9;
            align-items: stretch;
        }
        .ct-insight-card img {
            width: 40%;
            object-fit: cover;
        }
        .ct-insight-content {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 60%;
        }
        .ct-insight-content h3 {
            font-size: 20px;
            margin-bottom: 15px;
            font-family: var(--font-heading);
            line-height: 1.3;
        }
        .ct-insight-content p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .ct-btn-black {
            background: #000;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            display: inline-block;
            font-weight: 600;
            width: max-content;
            font-size: 14px;
            text-decoration: none;
        }
        /* Capabilities */
        .ct-capabilities {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 80px;
        }
        .ct-cap-btn {
            border: 1px solid #ddd;
            padding: 20px;
            text-align: left;
            font-weight: 600;
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

    <div class="container" style="padding-top: 60px; padding-bottom: 60px;">
        <!-- Overview Images -->
        <div class="ct-overview-images">
            <div class="img-left">
                <img src="{{ asset('images/commercial-big.jpg') }}" alt="Statue of Justice">
            </div>
            <div class="img-right">
                <img src="{{ asset('images/commercial-small.jpg') }}" alt="Scales of Justice">
                <h2>Commercial Transactions Overview</h2>
            </div>
        </div>

        <div class="ct-text-content">
            <p>Our commercial transactions practice advises businesses of all sizes, financial institutions, and individual investors. We bring an integrated and commercially focused approach to our work. We advise on formulating, drafting, reviewing, and negotiating commercial agreements. Mitigating risks and exploring strategic opportunities within contracts. From routine business arrangements to complex joint ventures, we offer practical and strategic advice aimed at helping clients achieve their business goals while minimizing legal risk.</p>
            <p>We take a practical, industry-focused approach to our practice, offering insight tailored to the unique contexts and distinct dynamics that may affect performance, risk, and strategy. We provide comprehensive guidance spanning business formation, structural considerations, operations, growth, and exit strategies, ensuring our advice remains relevant throughout the lifecycle of your business and through completion of your commercial transactions.</p>
        </div>

        <!-- Experience -->
        <h2 class="ct-section-title">Experience</h2>
        <div class="ct-tabs">
            <button class="active">Representing Lenders</button>
            <button>Representing Borrowers</button>
        </div>
        <ul class="ct-list">
            <li>Advised a syndicate of local banks in an acquisition financing transaction supporting the purchase of a mid-market manufacturing firm.</li>
            <li>Represented a leading private equity fund in the structuring, drafting, and negotiation of joint venture and shareholders agreements.</li>
            <li>Successfully negotiated and drafted complex commercial leases for international retail brands.</li>
            <li>Advised on cross-border corporate restructuring with tax efficiency and minimal operational disruption.</li>
            <li>Represented a mid-size technology company in a strategic acquisition of an IP portfolio and subsequent integration.</li>
        </ul>

        <!-- Lawyers -->
        <h2 class="ct-section-title">Lawyers in Commercial Transactions</h2>
        <div class="ct-lawyers">
            <!-- Lawyer 1 -->
            <div class="ct-lawyer-card">
                <img src="{{ asset('images/lawyer1.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400'" alt="Faisal Syed Niaz">
                <h3>Faisal Syed Niaz</h3>
                <p>Partner</p>
                <div class="ct-lawyer-links">
                    <a href="mailto:fsyed@niazlaw.com">fsyed@niazlaw.com</a>
                    <a href="tel:+11234567890">+1 123 456 7890</a>
                </div>
            </div>
            <!-- Lawyer 2 -->
            <div class="ct-lawyer-card">
                <img src="{{ asset('images/lawyer2.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400'" alt="Faisal Syed Niaz">
                <h3>Faisal Syed Niaz</h3>
                <p>Partner</p>
                <div class="ct-lawyer-links">
                    <a href="mailto:fsyed@niazlaw.com">fsyed@niazlaw.com</a>
                    <a href="tel:+11234567890">+1 123 456 7890</a>
                </div>
            </div>
            <!-- Lawyer 3 -->
            <div class="ct-lawyer-card">
                <img src="{{ asset('images/lawyer3.jpg') }}" onerror="this.src='https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=400'" alt="Faisal Syed Niaz">
                <h3>Faisal Syed Niaz</h3>
                <p>Partner</p>
                <div class="ct-lawyer-links">
                    <a href="mailto:fsyed@niazlaw.com">fsyed@niazlaw.com</a>
                    <a href="tel:+11234567890">+1 123 456 7890</a>
                </div>
            </div>
        </div>

        <!-- Insights And News -->
        <h2 class="ct-section-title" style="text-align: left;">Insights And News</h2>
        <div class="ct-insights">
            <!-- Insight 1 -->
            <div class="ct-insight-card">
                <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&q=80&w=400" alt="Justice Statue">
                <div class="ct-insight-content">
                    <h3>Domestic Violence in California – How a Lawyer Can Help</h3>
                    <p>Understand how domestic violence impacts family cases, what protections may be available, and how an attorney can guide you through the legal process.</p>
                    <a href="#" class="ct-btn-black">Read more</a>
                </div>
            </div>
            <!-- Insight 2 -->
            <div class="ct-insight-card">
                <img src="https://images.unsplash.com/photo-1589391886645-d51941baf7fb?auto=format&fit=crop&q=80&w=400" alt="Gavel">
                <div class="ct-insight-content">
                    <h3>Domestic Violence in California – How a Lawyer Can Help</h3>
                    <p>Understand how domestic violence impacts family cases, what protections may be available, and how an attorney can guide you through the legal process.</p>
                    <a href="#" class="ct-btn-black">Read more</a>
                </div>
            </div>
        </div>

        <!-- Related Capabilities -->
        <h2 class="ct-section-title" style="text-align: left;">Related Capabilities</h2>
        <div class="ct-capabilities">
            <a href="#" class="ct-cap-btn">Commercial Transactions</a>
            <a href="#" class="ct-cap-btn">Corporate Law & Finance</a>
            <a href="#" class="ct-cap-btn">Restructuring & Counseling</a>
            <a href="#" class="ct-cap-btn">Operational & Commercial Risk</a>
            <a href="#" class="ct-cap-btn">Aviation</a>
            <a href="#" class="ct-cap-btn">Restructuring & Counseling</a>
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
        // Simple JS for tab switching visually
        const tabs = document.querySelectorAll('.ct-tabs button');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');
            });
        });
    </script>
</body>
</html>
