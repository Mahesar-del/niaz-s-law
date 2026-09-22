<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Capabilities - Niaz Law P.C.</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Capabilities Hero */
        .capabilities-hero {
            position: relative;
            height: 490px;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset("images/capability-imge.png") }}') center/cover;
            display: flex;
            align-items: center;
            color: #fff;
            padding-top: 80px; /* Offset for absolute header */
        }
        .capabilities-hero-content {
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 72px;
            width: 100%;
            align-items: center;
            justify-content: start;
        }
        .capabilities-hero h1 {
            font-size: var(--h1-size);
            margin-bottom: 0;
        }
        .hero-desc-wrapper {
            position: relative;
            padding-left: 60px;
            max-width: 600px;
        }
        .hero-desc-wrapper::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            height: 150px;
            border-left: 1.5px solid #ffffff;
        }

        .capabilities-hero p {
            font-size: var(--body-reg);
            line-height: 1.6;
            color: #eaeaea;
        }

        /* Search Section */
        .search-section {
            display: flex;
            justify-content: center;
            margin-top: -20px;
            position: relative;
            z-index: 5;
            padding: 0 var(--space-100);
        }
        .search-card {
            width: 100%;
            max-width: 964px;
            height: 125px;
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #e0e0e0;
            box-shadow: 0px 4px 24px rgba(0,0,0,0.06);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0 60px;
        }
        .search-box {
            display: flex;
            width: 100%;
            max-width: 844px;
            height: 60px;
            border: 1px solid #000000;
            border-radius: 6px;
            overflow: hidden;
            background: #ffffff;
            align-items: center;
        }
        .search-icon {
            width: 18px;
            height: 18px;
            color: #888;
            margin-left: 20px;
            flex-shrink: 0;
        }
        .search-box input {
            flex-grow: 1;
            padding: 0 16px;
            border: none;
            outline: none;
            font-size: var(--body-reg);
            font-family: var(--font-heading);
            height: 100%;
            color: #333;
        }
        .search-box input::placeholder {
            color: #999;
        }
        .search-box button {
            background: #000;
            color: #fff;
            border: none;
            padding: 0 40px;
            font-weight: 400;
            font-family: var(--font-heading);
            font-size: var(--body-reg);
            cursor: pointer;
            height: 100%;
            transition: background 0.3s;
        }
        .search-box button:hover {
            background: #333;
        }

        /* Capabilities Grid */
        .capabilities-grid-container {
            padding: var(--space-64) 0;
            padding-bottom: 120px;
            background: #fff;
        }
        .capabilities-grid {
            display: grid;
            grid-template-columns: repeat(4, 292px);
            justify-content: space-between;
            gap: 24px;
        }

        /* Capability Card */
        .capability-card {
            background: #fff;
            padding: 15px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            position: relative;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            color: inherit;
            height: 388px;
        }
        .capability-card h3 {
            font-size: var(--body-reg);
            font-family: var(--font-heading);
            font-weight: 700;
            margin-bottom: var(--space-16);
            line-height: 1.3;
            min-height: 42px;
        }
        .capability-img {
            width: 100%;
            height: 163px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: var(--space-16);
        }
        .capability-desc {
            font-family: var(--font-body);
            font-size: 15px;
            font-weight: 400;
            line-height: 24px;
            color: #555;
            margin-bottom: var(--space-16);
            flex-grow: 1;
            margin-left: 4px;
            padding-right: 40px;
        }
        .capability-link {
            position: absolute;
            right: 15px;
            bottom: 15px;
            width: 46.67px;
            height: 46.67px;
            flex-shrink: 0;
            border-radius: 50%;
            border: 1px solid #000000;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #000;
            text-decoration: none;
            transition: all 0.3s;
        }
        .capability-link:hover {
            background: #000;
            color: #fff;
            border-color: #000;
        }

        @media (max-width: 1024px) {
            .capabilities-hero {
                /* Let .container handle horizontal padding */
            }
            .search-section {
                padding: 0 var(--space-32);
            }
            .capabilities-grid-container {
                padding: var(--space-64) 0;
            }
            .capabilities-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .capabilities-hero-content {
                grid-template-columns: 1fr;
                gap: var(--space-16);
            }
            .capabilities-hero h1 {
                font-size: 40px;
            }
        }
        @media (max-width: 768px) {
            .capabilities-hero {
                height: 500px;
                padding: 0;
                align-items: flex-end;
                padding-bottom: 60px;
                background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset("images/capability-mobile-view.png") }}') center/cover;
            }
            .capabilities-hero-content {
                display: flex;
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
                text-align: left;
            }
            .capabilities-hero h1 {
                font-family: 'Libre Baskerville', serif;
                font-weight: 700;
                font-size: 28px;
                line-height: 38px;
                letter-spacing: 0.28px;
                color: #FFFFFF;
                width: 178px;
                height: 38px;
                margin: 0;
            }
            .capabilities-hero p {
                font-family: 'Inter', sans-serif;
                font-weight: 400;
                font-size: 18px;
                line-height: 30px;
                letter-spacing: 0;
                text-align: justify;
                width: 324px;
                height: 150px;
                margin: 0;
            }
            .hero-desc-wrapper {
                padding-left: 0;
            }
            .hero-desc-wrapper::before {
                display: none;
            }
            .search-section {
                padding: 0 25px;
                margin-top: -30px;
            }
            .search-card {
                height: 80px;
                padding: 0 20px;
                border-radius: 12px;
            }
            .search-box {
                height: 48px;
            }
            .search-box button {
                padding: 0 20px;
            }
            .capabilities-grid-container {
                padding: var(--space-64) 0;
            }
            .capabilities-grid {
                grid-template-columns: 1fr;
            }
            .capability-card {
                height: auto;
                min-height: 320px;
                padding-bottom: 24px;
            }
            br.desktop-br {
                display: none;
            }
            .capability-desc {
                padding-right: 60px;
                margin-bottom: 0;
            }
        }
    </style>
</head>
<body class="antialiased" style="background-color: #ffffff;">

    @include('components.header')

    <section class="capabilities-hero">
        <div class="container capabilities-hero-content">
            <div>
                <h1>Capabilities</h1>
            </div>
            <div class="hero-desc-wrapper">
                <p>We advise businesses on complex commercial, infrastructure, and operational matters with practical legal guidance aligned to their strategic objectives.</p>
            </div>
        </div>
    </section>

    <div class="search-section">
        <div class="search-card">
            <div class="search-box">
                <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" placeholder="Find a Capability">
                <button type="button">Search</button>
            </div>
        </div>
    </div>

    <section class="capabilities-grid-container">
        <div class="container capabilities-grid">
            
            @php
                $capabilities = [
                    [
                        'title' => 'Commercial<br class="desktop-br">Transactions',
                        'img' => asset('images/commercial-imge.png'),
                        'desc' => 'Contracts, negotiations and<br class="desktop-br">commercial arrangements<br class="desktop-br">structured around business<br class="desktop-br">objectives.'
                    ],
                    [
                        'title' => 'Procurement<br class="desktop-br">& Contracting',
                        'img' => asset('images/contracting-imge.png'),
                        'desc' => 'Legal support for<br class="desktop-br">procurement processes,<br class="desktop-br">vendor relationships and<br class="desktop-br">commercial risk.'
                    ],
                    [
                        'title' => 'Infrastructure<br class="desktop-br">& Projects',
                        'img' => asset('images/project-imge.png'),
                        'desc' => 'Counsel for project<br class="desktop-br">structures, contractual<br class="desktop-br">obligations, and<br class="desktop-br">stakeholder relationships.'
                    ],
                    [
                        'title' => 'Operational<br class="desktop-br">Risk',
                        'img' => asset('images/Operational-imge.png'),
                        'desc' => 'Practical guidance to<br class="desktop-br">identify and manage<br class="desktop-br">operational legal risk.'
                    ]
                ];
            @endphp

            @for ($i = 0; $i < 4; $i++)
                @foreach($capabilities as $cap)
                <a href="#" class="capability-card">
                    <h3>{!! $cap['title'] !!}</h3>
                    <img src="{{ $cap['img'] }}" alt="{{ $cap['title'] }}" class="capability-img">
                    <p class="capability-desc">{!! $cap['desc'] !!}</p>
                    <div class="capability-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="transform: rotate(45deg);">
                            <line x1="12" y1="19" x2="12" y2="5"></line>
                            <polyline points="5 12 12 5 19 12"></polyline>
                        </svg>
                    </div>
                </a>
                @endforeach
            @endfor

        </div>
    </section>

</body>
</html>
