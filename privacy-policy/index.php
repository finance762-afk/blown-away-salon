<?php
/**
 * Privacy Policy — Blown Away Salon/Bon Air Barbershop
 * BASIC tier compliance page (REQUIRED per CLAUDE.md v6.1)
 *
 * Covers: TCPA consent, CCPA/CPRA rights, multi-state privacy laws,
 * data collection/use/retention, cookies, third-party services.
 *
 * MUST be indexable (no noindex) — legal disclosures must be findable.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$currentPage = 'legal';  // Not in main nav; linked from footer legal row
$pageTitle = 'Privacy Policy | ' . $siteName;
$pageDescription = 'Privacy Policy for ' . $siteName . ' — how we collect, use, and protect your personal information.';
$canonicalUrl = $siteUrl . '/privacy-policy/';
$ogImage = $siteUrl . '/assets/images/logo.png';
$noindex = false;  // Legal pages MUST be indexable
$cssVersion = '2';

// Schema: WebPage + BreadcrumbList (NO FAQPage, NO Service)
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        // WebPage
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $metaDescription,
            'isPartOf' => [
                '@id' => $siteUrl . '/#website'
            ],
            'about' => [
                '@id' => $siteUrl . '/#organization'
            ],
            'inLanguage' => 'en-US',
        ],
        // BreadcrumbList
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => $siteUrl . '/',
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Privacy Policy',
                ],
            ],
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>


<style>
/* ------------------------------------------------------------------ */
/* Privacy Policy — Legal Page Styles                                 */
/* ------------------------------------------------------------------ */

.hero--legal {
    background: var(--color-primary);
    color: white;
    padding: 8rem 0 4rem;
    min-height: 40vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}

.breadcrumb {
    display: flex;
    gap: 0.75rem;
    align-items: center;
    justify-content: center;
    font-size: 0.9375rem;
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.breadcrumb a {
    color: var(--color-secondary);
    transition: var(--transition);
}

.breadcrumb a:hover {
    opacity: 0.8;
}

.breadcrumb-sep {
    color: rgba(255, 255, 255, 0.5);
}

.hero--legal h1 {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    margin-bottom: 1rem;
    font-weight: 700;
}

.effective-date {
    font-size: 1rem;
    opacity: 0.85;
    font-weight: 400;
}

.legal-prose {
    max-width: 65ch;
    margin: 0 auto;
    padding: var(--space-3xl) var(--space-lg);
    line-height: 1.75;
    color: var(--color-text);
}

.legal-prose h2 {
    font-size: 1.875rem;
    margin-top: 3rem;
    margin-bottom: 1.25rem;
    font-weight: 600;
    color: var(--color-primary);
}

.legal-prose h2:first-of-type {
    margin-top: 0;
}

.legal-prose h3 {
    font-size: 1.375rem;
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-weight: 600;
    color: var(--color-primary-dark);
}

.legal-prose p {
    margin-bottom: 1.25rem;
}

.legal-prose ul,
.legal-prose ol {
    margin-bottom: 1.25rem;
    padding-left: 2rem;
}

.legal-prose li {
    margin-bottom: 0.75rem;
}

.legal-prose a {
    color: var(--color-secondary);
    text-decoration: underline;
    transition: var(--transition);
}

.legal-prose a:hover {
    color: var(--color-primary);
}

.legal-prose strong {
    font-weight: 600;
    color: var(--color-primary-dark);
}

.last-updated {
    font-size: 0.9375rem;
    color: var(--color-text-light);
    font-style: italic;
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid var(--color-border);
}

.disclaimer-footer {
    background: var(--color-bg-alt);
    padding: 1.5rem;
    border-radius: var(--radius);
    margin-top: 3rem;
    font-size: 0.9375rem;
    color: var(--color-text-light);
    line-height: 1.6;
}

@media (max-width: 768px) {
    .hero--legal {
        padding: 6rem 0 3rem;
    }

    .legal-prose {
        padding: var(--space-2xl) var(--space-md);
    }

    .legal-prose h2 {
        font-size: 1.5rem;
    }

    .legal-prose h3 {
        font-size: 1.25rem;
    }
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">
    <section class="hero--legal">
        <div class="container">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="/">Home</a>
                <span class="breadcrumb-sep" aria-hidden="true">/</span>
                <span>Privacy Policy</span>
            </nav>
            <h1>Privacy Policy</h1>
            <p class="effective-date">Effective Date: <?php echo date('F j, Y'); ?></p>
        </div>
    </section>

    <article class="legal-prose">

        <h2>1. Introduction</h2>
        <p>
            <?php echo $siteName; ?> ("we," "us," "our") respects your privacy and is committed to protecting your personal information. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website <a href="<?php echo $siteUrl; ?>"><?php echo $domain; ?></a>, submit a contact form, or interact with our services.
        </p>
        <p>
            By using our website or submitting your information through our contact forms, you agree to the collection and use of information in accordance with this Privacy Policy. If you do not agree with our policies and practices, please do not use our website.
        </p>

        <h2>2. Information We Collect</h2>
        <p>We collect several types of information from and about users of our website, including:</p>

        <h3>2.1 Information You Provide Directly</h3>
        <p>When you submit a contact form, appointment request, or inquiry through our website, we collect:</p>
        <ul>
            <li><strong>Contact Information:</strong> Your name, email address, phone number, and any other information you choose to provide in the message field.</li>
            <li><strong>Service Preferences:</strong> Information about the services you are interested in.</li>
            <li><strong>Consent Records:</strong> Your opt-in choices for email communications, SMS/text messages, and acceptance of our Privacy Policy and Terms of Service, along with the page URL and timestamp of consent.</li>
        </ul>

        <h3>2.2 Information Collected Automatically</h3>
        <p>When you visit our website, we may automatically collect certain information about your device and browsing activity, including:</p>
        <ul>
            <li><strong>Usage Data:</strong> IP address, browser type, operating system, pages visited, time and date of visit, time spent on pages, and referring website.</li>
            <li><strong>Cookies and Tracking Technologies:</strong> We use cookies, web beacons, and similar technologies to collect information about your browsing behavior. See Section 8 (Cookies and Tracking Technologies) for details.</li>
        </ul>

        <h2>3. How We Use Your Information</h2>
        <p>We use the information we collect for the following purposes:</p>
        <ul>
            <li><strong>Service Delivery:</strong> To respond to your inquiries, schedule appointments, provide quotes, and deliver the hair care and grooming services you request.</li>
            <li><strong>Communication:</strong> To contact you via email or phone regarding your service request, appointment confirmations, or follow-up communications. If you opt in, we may also send promotional emails or text messages about our services, specials, and updates.</li>
            <li><strong>Marketing (With Consent):</strong> If you opt in to receive marketing communications, we may send you information about new services, promotions, and events via email or SMS.</li>
            <li><strong>Website Improvement:</strong> To analyze website usage, monitor performance, and improve our website's functionality and user experience.</li>
            <li><strong>Legal Compliance:</strong> To comply with applicable laws, regulations, and legal processes, and to protect our rights and the rights of our users.</li>
        </ul>

        <h2>4. TCPA Consent — Phone Calls and SMS Text Messages</h2>
        <p>
            The <strong>Telephone Consumer Protection Act (TCPA)</strong> regulates how businesses may contact you by phone or text message. By submitting a contact form on our website, you understand and agree to the following:
        </p>

        <h3>4.1 Optional Consent — Not a Condition of Purchase</h3>
        <p>
            When you submit a contact form, you will see <strong>separate, unbundled checkboxes</strong> for:
        </p>
        <ul>
            <li><strong>Email opt-in (optional):</strong> Consent to receive marketing emails from <?php echo $siteName; ?>.</li>
            <li><strong>SMS opt-in (optional):</strong> Consent to receive text messages from <?php echo $siteName; ?> about appointments, promotions, and service updates.</li>
            <li><strong>Terms acceptance (required):</strong> Agreement to our Privacy Policy and Terms of Service in order to submit the form.</li>
        </ul>
        <p>
            <strong>Consent is not a condition of purchase.</strong> You may decline to receive marketing emails or text messages and still receive service from us by contacting us directly at <a href="tel:<?php echo $phoneRaw; ?>"><?php echo $phone; ?></a>.
        </p>

        <h3>4.2 SMS/Text Message Terms</h3>
        <p>If you opt in to receive text messages:</p>
        <ul>
            <li>Message frequency may vary depending on your service requests and promotional campaigns.</li>
            <li>Message and data rates may apply based on your mobile carrier's plan.</li>
            <li>We may use an automated dialing system to send text messages.</li>
            <li>You may opt out at any time by replying <strong>STOP</strong> to any text message. You will receive a confirmation message when you opt out.</li>
            <li>For help, reply <strong>HELP</strong> or contact us at <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>.</li>
        </ul>

        <h3>4.3 Opting Out</h3>
        <p>You may withdraw your consent for email or SMS communications at any time:</p>
        <ul>
            <li><strong>Email:</strong> Click the "unsubscribe" link in any marketing email we send.</li>
            <li><strong>SMS:</strong> Reply <strong>STOP</strong> to any text message.</li>
            <li><strong>Phone:</strong> Call us at <a href="tel:<?php echo $phoneRaw; ?>"><?php echo $phone; ?></a> and request removal from our contact list.</li>
        </ul>

        <h2>5. CCPA/CPRA — California Privacy Rights</h2>
        <p>
            If you are a California resident, the <strong>California Consumer Privacy Act (CCPA)</strong> and the <strong>California Privacy Rights Act (CPRA)</strong> grant you specific rights regarding your personal information.
        </p>

        <h3>5.1 Your California Rights</h3>
        <p>You have the right to:</p>
        <ul>
            <li><strong>Know:</strong> Request disclosure of the categories and specific pieces of personal information we have collected about you in the past 12 months, the sources of that information, the purposes for collection, and the categories of third parties with whom we share your information.</li>
            <li><strong>Delete:</strong> Request deletion of your personal information, subject to certain exceptions (e.g., legal obligations, fraud prevention).</li>
            <li><strong>Opt Out of Sale or Sharing:</strong> Request that we do not sell or share your personal information for cross-context behavioral advertising. (Note: <?php echo $siteName; ?> does not sell personal information.)</li>
            <li><strong>Correct:</strong> Request correction of inaccurate personal information.</li>
            <li><strong>Limit Use of Sensitive Personal Information:</strong> Request limits on the use and disclosure of sensitive personal information (e.g., precise geolocation, health data). We do not collect sensitive personal information beyond what is necessary for service delivery.</li>
            <li><strong>Non-Discrimination:</strong> Exercise your privacy rights without receiving discriminatory treatment (e.g., denial of service, different pricing).</li>
        </ul>

        <h3>5.2 How to Exercise Your Rights</h3>
        <p>To exercise any of the above rights, contact us at:</p>
        <ul>
            <li><strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
            <li><strong>Phone:</strong> <a href="tel:<?php echo $phoneRaw; ?>"><?php echo $phone; ?></a></li>
            <li><strong>Mail:</strong> <?php echo $address['street']; ?>, <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?></li>
        </ul>
        <p>
            We will verify your identity before processing your request. You may designate an authorized agent to make a request on your behalf by providing written authorization.
        </p>

        <h3 id="ccpa-rights">5.3 Do Not Sell or Share My Personal Information</h3>
        <p>
            <?php echo $siteName; ?> does not sell personal information to third parties. We do not share personal information for cross-context behavioral advertising. If our practices change, we will update this Privacy Policy and provide you with an opt-out mechanism.
        </p>

        <h2>6. Multi-State Privacy Rights</h2>
        <p>
            If you reside in <strong>Colorado, Connecticut, Utah, Virginia,</strong> or other states with comprehensive privacy laws, you have rights similar to those described under CCPA/CPRA, including:
        </p>
        <ul>
            <li>The right to confirm whether we process your personal data and access that data.</li>
            <li>The right to correct inaccuracies in your personal data.</li>
            <li>The right to delete your personal data.</li>
            <li>The right to opt out of the sale of personal data, targeted advertising, or profiling.</li>
            <li>The right to non-discrimination for exercising your privacy rights.</li>
        </ul>
        <p>
            To exercise these rights, contact us using the information in Section 5.2 above. We will respond to your request within the timeframe required by applicable state law.
        </p>

        <h2>7. How We Share Your Information</h2>
        <p>We do not sell, trade, or rent your personal information to third parties. We may share your information with:</p>

        <h3>7.1 Service Providers</h3>
        <p>We use trusted third-party service providers to operate our website and deliver our services, including:</p>
        <ul>
            <li><strong>Formsubmit.co:</strong> Our contact form submissions are processed and forwarded to our business email via Formsubmit.co. Formsubmit.co does not store your information beyond delivery.</li>
            <li><strong>Google Analytics:</strong> We use Google Analytics to analyze website traffic and user behavior. Google Analytics uses cookies to collect anonymized data. <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
            <li><strong>Google Maps:</strong> Our contact page includes an embedded Google Map showing our location. Google may collect data when you interact with the map. <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.</li>
        </ul>

        <h3>7.2 Legal Requirements</h3>
        <p>We may disclose your information if required to do so by law or in response to valid requests by public authorities (e.g., court orders, subpoenas).</p>

        <h3>7.3 Business Transfers</h3>
        <p>If <?php echo $siteName; ?> is involved in a merger, acquisition, or asset sale, your personal information may be transferred. We will provide notice before your information is transferred and becomes subject to a different privacy policy.</p>

        <h2>8. Cookies and Tracking Technologies</h2>
        <p>
            We use cookies and similar tracking technologies to enhance your experience on our website, analyze usage, and deliver personalized content.
        </p>

        <h3>8.1 What Are Cookies?</h3>
        <p>
            Cookies are small text files stored on your device by your web browser. They allow websites to remember your preferences and recognize you on subsequent visits.
        </p>

        <h3>8.2 Types of Cookies We Use</h3>
        <ul>
            <li><strong>Necessary Cookies:</strong> Essential for the website to function (e.g., security, session management).</li>
            <li><strong>Analytics Cookies:</strong> Used by Google Analytics to collect anonymized data about how visitors use our site.</li>
            <li><strong>Performance Cookies:</strong> Help us understand which pages are most popular and improve website performance.</li>
        </ul>

        <h3>8.3 Managing Cookies</h3>
        <p>
            You can control and manage cookies through your browser settings. Most browsers allow you to refuse cookies or delete existing cookies. Please note that disabling cookies may affect your ability to use certain features of our website.
        </p>
        <p>
            For more information about cookies and how to manage them, visit <a href="https://www.allaboutcookies.org" target="_blank" rel="noopener">www.allaboutcookies.org</a>.
        </p>

        <h2>9. Data Retention</h2>
        <p>
            We retain your personal information only as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required or permitted by law.
        </p>
        <ul>
            <li><strong>Contact Form Submissions:</strong> Retained for up to 3 years to respond to inquiries, maintain service records, and comply with legal obligations.</li>
            <li><strong>Consent Records:</strong> Retained for at least 4 years to comply with TCPA record-keeping requirements and defend against potential claims.</li>
            <li><strong>Analytics Data:</strong> Anonymized usage data is retained by Google Analytics for up to 26 months.</li>
        </ul>
        <p>
            When we no longer need your personal information, we will securely delete or anonymize it.
        </p>

        <h2>10. Data Security</h2>
        <p>
            We implement reasonable administrative, technical, and physical security measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction.
        </p>
        <p>
            However, no method of transmission over the internet or electronic storage is 100% secure. While we strive to protect your personal information, we cannot guarantee its absolute security. You are responsible for maintaining the confidentiality of any login credentials or sensitive information you provide.
        </p>

        <h2>11. Children's Privacy</h2>
        <p>
            Our website is not intended for children under the age of 13, and we do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe that your child has provided us with personal information, please contact us at <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>, and we will delete that information from our records.
        </p>

        <h2>12. Third-Party Links</h2>
        <p>
            Our website may contain links to third-party websites, services, or social media platforms (e.g., Google Maps, Facebook, Instagram). We are not responsible for the privacy practices or content of these third-party sites. We encourage you to review the privacy policies of any third-party sites you visit.
        </p>

        <h2>13. International Data Transfers</h2>
        <p>
            Your information may be transferred to and maintained on servers located outside your state, province, country, or other governmental jurisdiction where data protection laws may differ. By using our website, you consent to the transfer of your information to the United States and its processing in accordance with this Privacy Policy.
        </p>

        <h2>14. Changes to This Privacy Policy</h2>
        <p>
            We may update this Privacy Policy from time to time to reflect changes in our practices, legal requirements, or business operations. We will post the updated Privacy Policy on this page with a revised "Effective Date" at the top.
        </p>
        <p>
            We encourage you to review this Privacy Policy periodically. Your continued use of our website after changes are posted constitutes your acceptance of the updated Privacy Policy.
        </p>

        <h2>15. Contact Us</h2>
        <p>
            If you have any questions, concerns, or requests regarding this Privacy Policy or our data practices, please contact us:
        </p>
        <p>
            <strong><?php echo $siteName; ?></strong><br>
            <?php echo $address['street']; ?><br>
            <?php echo $address['city']; ?>, <?php echo $address['state']; ?> <?php echo $address['zip']; ?><br>
            <strong>Phone:</strong> <a href="tel:<?php echo $phoneRaw; ?>"><?php echo $phone; ?></a><br>
            <strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </p>

        <p class="last-updated">
            Last Updated: <?php echo date('F j, Y'); ?>
        </p>

        <div class="disclaimer-footer">
            <strong>Legal Disclaimer:</strong> This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed Kentucky attorney before publication to ensure compliance with all applicable state and federal laws.
        </div>
    </article>
</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
