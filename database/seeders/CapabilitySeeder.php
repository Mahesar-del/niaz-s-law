<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Capability;
use Illuminate\Support\Str;

class CapabilitySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [ 
                'title' => 'Corporate Transactions & Governance',
                'description' => "Advising businesses on transactional strategy, contract governance, commercial relationships, and operational frameworks designed to support organizational growth, strengthen risk management, enhance internal coordination, and improve long-term business performance.",
                'image' => 'images/cap_corporate.jpg', 
                'hero' => 'images/commercial-transection-hero.png',
                'img1' => 'images/law.jpg',
                'img2' => 'images/commercial-small.jpg',
                'exp' => "Mergers & Acquisitions — Structuring and negotiating strategic corporate transactions.\nCorporate Restructuring — Reorganizing business structures for improved efficiency and governance.\nBoard Advisory — Providing counsel to boards of directors on fiduciary duties and regulatory compliance.\nCorporate Finance — Advising on equity and debt financing, capital raises, and lending facilities.\nCorporate Governance — Developing and implementing corporate governance frameworks and best practices.\nJoint Ventures — Structuring complex joint ventures and strategic alliances across various industries.\nRegulatory Compliance — Guiding companies through complex state and federal regulatory environments.\nExecutive Compensation — Designing and negotiating executive employment agreements and equity plans.",
                'rep' => "Advised a major multinational corporation on a multi-million dollar cross-border acquisition.\nSuccessfully restructured a regional enterprise to streamline operations and reduce tax liabilities.\nRepresented several tech startups in their Series A and B funding rounds.\nCounseled a public company's board of directors during a high-profile shareholder activist campaign.\nNegotiated a complex joint venture agreement between a US manufacturer and a European distributor.\nGuided a financial services firm through a comprehensive regulatory compliance audit.\nDrafted customized corporate governance guidelines and charters for a newly public company.\nStructured executive compensation packages for the C-suite of a rapidly growing healthcare company."
            ],
            [ 
                'title' => 'Commercial Operations & Strategic Sourcing',
                'description' => "Advising organizations on complex operational initiatives, strategic commercial relationships, large-scale project coordination, supplier ecosystems, and contract frameworks designed to improve efficiency, strengthen governance, reduce operational friction, and support scalable business operations across dynamic commercial environments.",
                'image' => 'images/cap_commercial.jpg', 
                'hero' => 'images/home-hero.png',
                'img1' => 'images/professsional-services.jpg',
                'img2' => 'images/project-imge.png',
                'exp' => "Strategic Sourcing — Developing comprehensive frameworks for global procurement and supply chain management.\nVendor Agreements — Negotiating complex agreements with critical suppliers and technology vendors.\nOperational Risk — Identifying and mitigating risks in day-to-day commercial operations.\nTechnology Licensing — Drafting and negotiating software licensing and SaaS agreements.\nDistribution & Logistics — Advising on warehousing, transportation, and supply chain logistics contracts.\nOutsourcing Agreements — Structuring comprehensive business process outsourcing (BPO) arrangements.\nData Privacy Compliance — Ensuring commercial agreements comply with data protection regulations.\nManufacturing Agreements — Negotiating contract manufacturing and OEM agreements.",
                'rep' => "Drafted and negotiated master service agreements for a leading global logistics provider.\nAssisted a manufacturing firm in overhauling its strategic sourcing protocols to ensure regulatory compliance.\nAdvised on the implementation of a new enterprise-wide vendor management system.\nNegotiated a multi-year software-as-a-service (SaaS) platform agreement for a Fortune 500 company.\nStructured cross-border distribution agreements for a consumer goods company entering new markets.\nRepresented a healthcare network in outsourcing its IT infrastructure and support services.\nConducted a comprehensive review of commercial contracts for a retail chain to ensure data privacy compliance.\nAdvised a technology hardware company on a strategic contract manufacturing partnership in Asia."
            ],
            [ 
                'title' => 'Infrastructure & Construction Projects',
                'description' => "Advising businesses on infrastructure and construction matters involving project development, contract strategy, operational coordination, execution risk management, and stakeholder alignment across complex commercial environments.",
                'image' => 'images/cap_infrastructure.jpg', 
                'hero' => 'images/about-hero-bg.jpg',
                'img1' => 'images/inside-court.jpg',
                'img2' => 'images/order.jpg',
                'exp' => "Project Finance — Structuring the financing of large-scale public and private infrastructure projects.\nConstruction Contracts — Drafting EPC and design-build contracts for commercial developments.\nRegulatory Approvals — Navigating complex zoning, environmental, and municipal regulations.\nPublic-Private Partnerships (P3) — Advising on the development and execution of P3 infrastructure projects.\nDispute Resolution — Managing and resolving complex construction and infrastructure disputes.\nEnvironmental Compliance — Ensuring projects adhere to state and federal environmental standards.\nReal Estate Development — Providing counsel on land acquisition and site development for infrastructure.\nRisk Allocation — Structuring contracts to optimally allocate risk among project stakeholders.",
                'rep' => "Served as lead counsel for a $500M public-private partnership (P3) transportation project.\nRepresented a major developer in negotiating contracts for a mixed-use urban development.\nSuccessfully resolved a multi-party dispute regarding construction delays and cost overruns.\nAdvised a renewable energy company on the financing and development of a new solar power facility.\nGuided a municipality through the regulatory approvals process for a major water treatment plant upgrade.\nNegotiated EPC (Engineering, Procurement, and Construction) contracts for a large industrial facility.\nRepresented a consortium of investors in the acquisition and redevelopment of a toll road project.\nSuccessfully defended a construction firm against environmental compliance claims during site development."
            ],
            [ 
                'title' => 'Aviation, Logistics & Transportation',
                'description' => "Experience advising within international aviation operational environments involving commercial agreements, regulatory considerations, vendor management, and operational coordination.",
                'image' => 'images/cap_commercial.jpg', 
                'hero' => 'images/commercial-transection-hero.png',
                'img1' => 'images/lawywer-helps.jpg',
                'img2' => 'images/have-question.jpg',
                'exp' => "Aviation Regulatory — Advising on FAA compliance and international aviation regulations.\nFleet Financing — Structuring the acquisition and leasing of commercial aircraft.\nTransportation Logistics — Negotiating agreements for global shipping and freight forwarding operations.\nRegulatory Investigations — Representing clients before transportation regulatory agencies.\nAircraft Transactions — Managing the purchase, sale, and financing of corporate and commercial aircraft.\nMaritime Law — Advising on shipping contracts, cargo claims, and maritime regulatory compliance.\nRail Transportation — Providing counsel on rail freight agreements and regulatory issues.\nLogistics Tech — Advising on contracts for transportation management systems and logistics software.",
                'rep' => "Advised a regional airline on the lease financing of 20 new commercial aircraft.\nRepresented a logistics company in negotiating long-term freight agreements with major retailers.\nAssisted a transportation firm in navigating regulatory hurdles for international expansion.\nRepresented a corporate client in the acquisition and financing of a private business jet.\nDefended a shipping company in a complex maritime cargo loss dispute.\nNegotiated complex rail transportation agreements for a major industrial manufacturer.\nAdvised an aviation maintenance facility on regulatory compliance and certification processes.\nAssisted a freight forwarding company in implementing a new global logistics technology platform."
            ],
            [ 
                'title' => 'Real Estate & Property Transactions',
                'description' => "Providing counsel on residential and commercial real estate matters, including acquisitions, dispositions, leasing, development transactions, contract structuring, and transactional risk management.",
                'image' => 'images/cap_infrastructure.jpg', 
                'hero' => 'images/attorney-hero.jpg',
                'img1' => 'images/domestic-violance.jpg',
                'img2' => 'images/lawywer-helps.jpg',
                'exp' => "Commercial Leasing — Negotiating and drafting complex leases for office, retail, and industrial properties.\nAcquisitions & Dispositions — Managing the purchase and sale of high-value commercial real estate assets.\nReal Estate Development — Advising on land use, zoning, and project structuring from inception to completion.\nReal Estate Finance — Structuring commercial mortgages, mezzanine financing, and construction loans.\nJoint Ventures — Forming real estate joint ventures and strategic investment partnerships.\nTitle & Survey — Resolving complex title defects and survey issues for commercial properties.\nLandlord-Tenant Disputes — Handling complex disputes and lease enforcement actions.\nProperty Management — Advising on property management agreements and operational issues.",
                'rep' => "Represented a private equity firm in the acquisition of a $200M commercial real estate portfolio.\nAdvised a major retailer on negotiating leases for over 50 new locations nationwide.\nAssisted a developer in securing necessary zoning changes for a major residential complex.\nStructured the financing for a mixed-use development project including retail, office, and residential space.\nNegotiated a complex joint venture agreement for the development of a luxury hotel property.\nSuccessfully resolved significant title defects that were delaying a major commercial property sale.\nRepresented a commercial landlord in a high-stakes lease dispute with a major corporate tenant.\nDrafted comprehensive property management agreements for a portfolio of industrial warehouses."
            ],
        ];

        foreach ($data as $item) {
            $capability = Capability::updateOrCreate(
                ['title' => $item['title']],
                [
                    'slug' => Str::slug($item['title']),
                    'description' => $item['description'],
                    'page_title' => $item['title'],
                    'page_description' => 'We provide strategic advice and robust representation in all matters related to ' . $item['title'] . '. Our approach ensures compliance, mitigates risk, and drives business growth.',
                    'image' => $item['image'],
                    'hero_image' => $item['hero'],
                    'overview_heading' => 'Strategic Solutions for ' . $item['title'],
                    'overview_image_left' => $item['img1'],
                    'overview_image_right' => $item['img2'],
                    'overview_paragraph_one' => "Navigating the complexities of " . $item['title'] . " requires a deep understanding of both legal frameworks and commercial realities. Our firm provides tailored, strategic counsel designed to align with your organization's long-term objectives and immediate operational needs. We focus on delivering actionable insights that empower decision-makers to move forward with confidence.",
                    'overview_paragraph_two' => "With extensive experience advising businesses across diverse industries, our team is equipped to handle the most complex and critical challenges. We emphasize a proactive approach, identifying potential risks early and structuring agreements to minimize future liabilities, ensuring that your business remains resilient and competitive in a dynamic market.",
                    'experience' => $item['exp'],
                    'representative_matters' => $item['rep'],
                ]
            );
            
            // Attach attorney and blogs if they exist
            $attorneyId = 2; // Assuming ID 2 exists based on previous work
            if (\App\Models\Attorney::find($attorneyId)) {
                $capability->attorneys()->syncWithoutDetaching([$attorneyId]);
            }
            
            $blogIds = \App\Models\BlogPost::pluck('id')->toArray();
            if (!empty($blogIds)) {
                shuffle($blogIds);
                $selectedBlogs = array_slice($blogIds, 0, 2);
                $capability->blogPosts()->syncWithoutDetaching($selectedBlogs);
            }
        }
    }
}
