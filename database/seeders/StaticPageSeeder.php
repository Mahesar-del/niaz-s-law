<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Seeder;

class StaticPageSeeder extends Seeder
{
    public function run(): void
    {
        StaticPage::updateOrCreate(['slug' => 'terms-of-service'], [
            'title' => 'Terms of Service',
            'status' => 'published',
            'content' => <<<'HTML'
<h2>Website Terms of Service</h2>
<p>These Terms of Service govern your use of the Niaz Law P.C. website. Niaz Law P.C. provides practical, business-focused legal counsel in commercial transactions, procurement and contracting, infrastructure and projects, aviation, operational risk, and related strategic matters.</p>
<h2>Information—not legal advice</h2>
<p>The articles, insights, case studies, static pages, and other materials on this website are for general informational purposes only. They are not legal advice and may not reflect the most recent legal developments. You should obtain advice tailored to your particular facts, governing law, objectives, and timeline before acting on any information found on this website.</p>
<h2>No attorney-client relationship</h2>
<p>Visiting this website, reading its materials, or contacting Niaz Law P.C. through the website does not create an attorney-client relationship. That relationship is formed only after Niaz Law P.C. has agreed in writing to represent you.</p>
<h2>Contact forms and confidential information</h2>
<p>Please do not send confidential, proprietary, privileged, or time-sensitive information through a website form until Niaz Law P.C. has confirmed that it can receive the information and has agreed to represent you. An unsolicited submission may not be treated as confidential.</p>
<h2>Permitted use</h2>
<p>You may view and use this website for lawful, personal, or internal business purposes. You may not copy, reproduce, modify, distribute, scrape, interfere with, or attempt to gain unauthorized access to the website or its content without prior written permission.</p>
<h2>Third-party content</h2>
<p>This website may include links, maps, embedded services, or information from third parties. These are provided for convenience only. Niaz Law P.C. does not control, endorse, or accept responsibility for third-party websites, content, security, or privacy practices.</p>
<h2>Changes to these terms</h2>
<p>Niaz Law P.C. may update these Terms of Service from time to time. Continued use of the website after an update constitutes acceptance of the revised terms.</p>
<h2>Contact us</h2>
<p>For questions about these Terms of Service or our website, please contact Niaz Law P.C. through the Contact Us page.</p>
HTML,
        ]);

        StaticPage::updateOrCreate(['slug' => 'privacy-policy'], [
            'title' => 'Privacy Policy',
            'status' => 'published',
            'content' => <<<'HTML'
<h2>Privacy Policy</h2>
<p>Niaz Law P.C. values the privacy of visitors to this website. This Privacy Policy explains the information we may collect through the website, why we use it, and the choices available to you.</p>
<h2>Information you provide</h2>
<p>When you use our Contact Us page, we may collect the information you submit, such as your name, email address, phone number, selected practice area, and message. This information helps us understand and respond to your inquiry regarding commercial transactions, procurement and contracting, infrastructure and projects, aviation, operational risk, or another business matter.</p>
<h2>Information collected automatically</h2>
<p>Like most websites, we may receive limited technical information from your browser or device, such as IP address, browser type, device information, referring pages, pages viewed, and the date and time of your visit. This information is used to operate, secure, and improve the website.</p>
<h2>How we use information</h2>
<p>We may use information to respond to inquiries, communicate about requested services, maintain our records, protect the website from misuse, comply with legal and professional obligations, and improve the website experience. We do not sell personal information collected through this website.</p>
<h2>Confidentiality and legal representation</h2>
<p>Submitting information through this website does not create an attorney-client relationship and does not make the information confidential. Please do not submit sensitive business information, trade secrets, or documents until Niaz Law P.C. confirms that it can receive them and has agreed to represent you.</p>
<h2>Service providers and embedded tools</h2>
<p>We may use third-party providers for website hosting, security, analytics, maps, or other website functionality. Those providers may process information only as needed to provide their services and are subject to their own terms and privacy practices.</p>
<h2>Data retention and security</h2>
<p>We retain information for as long as reasonably necessary for the purposes described in this policy, to respond to your inquiry, and to meet legal, ethical, and recordkeeping obligations. We use reasonable safeguards to protect information, but no internet transmission or storage system is completely secure.</p>
<h2>Your choices and contact</h2>
<p>You may contact Niaz Law P.C. through the Contact Us page to ask questions about personal information you have submitted or to request an update or deletion where applicable. We may need to retain certain information to comply with legal or professional obligations.</p>
<h2>Updates to this policy</h2>
<p>We may revise this Privacy Policy as our website or practices change. The latest version will be posted on this page.</p>
HTML,
        ]);
    }
}
