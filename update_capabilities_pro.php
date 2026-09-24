<?php
$data = [
    1 => [ 
        'hero' => 'images/commercial-big.jpg',
        'img1' => 'images/commercial-small.jpg',
        'img2' => 'images/law.jpg',
        'card' => 'images/commercial-imge.png',
        'exp' => "Mergers & Acquisitions — Structuring and negotiating strategic corporate transactions.\nCorporate Restructuring — Reorganizing business structures for improved efficiency and governance.\nBoard Advisory — Providing counsel to boards of directors on fiduciary duties and regulatory compliance.",
        'rep' => "Advised a major multinational corporation on a multi-million dollar cross-border acquisition.\nSuccessfully restructured a regional enterprise to streamline operations and reduce tax liabilities.\nRepresented several tech startups in their Series A and B funding rounds."
    ],
    2 => [ 
        'hero' => 'images/home-hero.png',
        'img1' => 'images/project-imge.png',
        'img2' => 'images/contracting-imge.png',
        'card' => 'images/professsional-services.jpg',
        'exp' => "Strategic Sourcing — Developing comprehensive frameworks for global procurement and supply chain management.\nVendor Agreements — Negotiating complex agreements with critical suppliers and technology vendors.\nOperational Risk — Identifying and mitigating risks in day-to-day commercial operations.",
        'rep' => "Drafted and negotiated master service agreements for a leading logistics provider.\nAssisted a manufacturing firm in overhauling its strategic sourcing protocols to ensure regulatory compliance.\nAdvised on the implementation of a new enterprise-wide vendor management system."
    ],
    3 => [ 
        'hero' => 'images/about-hero-bg.jpg',
        'img1' => 'images/inside-court.jpg',
        'img2' => 'images/order.jpg',
        'card' => 'images/we-deliver-results.jpg',
        'exp' => "Project Finance — Structuring the financing of large-scale public and private infrastructure projects.\nConstruction Contracts — Drafting EPC and design-build contracts for commercial developments.\nRegulatory Approvals — Navigating complex zoning, environmental, and municipal regulations.",
        'rep' => "Served as lead counsel for a $500M public-private partnership (P3) transportation project.\nRepresented a major developer in negotiating contracts for a mixed-use urban development.\nSuccessfully resolved a multi-party dispute regarding construction delays and cost overruns."
    ],
    4 => [ 
        'hero' => 'images/commercial-transection-hero.png',
        'img1' => 'images/lawywer-helps.jpg',
        'img2' => 'images/have-question.jpg',
        'card' => 'images/informed-board.jpg',
        'exp' => "Aviation Regulatory — Advising on FAA compliance and international aviation regulations.\nFleet Financing — Structuring the acquisition and leasing of commercial aircraft.\nTransportation Logistics — Negotiating agreements for global shipping and freight forwarding operations.",
        'rep' => "Advised a regional airline on the lease financing of 20 new commercial aircraft.\nRepresented a logistics company in negotiating long-term freight agreements with major retailers.\nAssisted a transportation firm in navigating regulatory hurdles for international expansion."
    ],
    5 => [ 
        'hero' => 'images/attorney-hero.jpg',
        'img1' => 'images/domestic-violance.jpg',
        'img2' => 'images/lawywer-helps.jpg',
        'card' => 'images/commercial-big.jpg',
        'exp' => "Commercial Leasing — Negotiating and drafting complex leases for office, retail, and industrial properties.\nAcquisitions & Dispositions — Managing the purchase and sale of high-value commercial real estate assets.\nReal Estate Development — Advising on land use, zoning, and project structuring from inception to completion.",
        'rep' => "Represented a private equity firm in the acquisition of a $200M commercial real estate portfolio.\nAdvised a major retailer on negotiating leases for over 50 new locations nationwide.\nAssisted a developer in securing necessary zoning changes for a major residential complex."
    ],
];

foreach ($data as $id => $d) {
    $cap = \App\Models\Capability::find($id);
    if ($cap) {
        $cap->slug = \Illuminate\Support\Str::slug($cap->title);
        $cap->page_title = $cap->title . ' - Comprehensive Legal Guidance';
        $cap->page_description = 'We provide strategic advice and robust representation in all matters related to ' . $cap->title . '. Our approach ensures compliance, mitigates risk, and drives business growth.';
        $cap->hero_image = $d['hero'];
        $cap->image = $d['card'];
        $cap->overview_heading = 'Strategic Solutions for ' . $cap->title;
        $cap->overview_image_left = $d['img1'];
        $cap->overview_image_right = $d['img2'];
        $cap->overview_paragraph_one = "Navigating the complexities of " . $cap->title . " requires a deep understanding of both legal frameworks and commercial realities. Our firm provides tailored, strategic counsel designed to align with your organization's long-term objectives and immediate operational needs. We focus on delivering actionable insights that empower decision-makers to move forward with confidence.";
        $cap->overview_paragraph_two = "With extensive experience advising businesses across diverse industries, our team is equipped to handle the most complex and critical challenges. We emphasize a proactive approach, identifying potential risks early and structuring agreements to minimize future liabilities, ensuring that your business remains resilient and competitive in a dynamic market.";
        $cap->experience = $d['exp'];
        $cap->representative_matters = $d['rep'];
        $cap->save();
    }
}
echo 'Updated all capabilities with professional data and distinct images.';
