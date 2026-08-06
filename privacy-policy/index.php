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
$metaDescription = 'Privacy Policy for ' . $siteName . ' — how we collect, use, and protect your personal information.';
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
    <p>This Privacy Policy explains how <?php echo htmlspecialchars($siteName); ?> ("we", "us", "our") collects, uses, and protects your personal information when you visit <?php echo htmlspecialchars($domain); ?> or interact with our services.</p>

    <h2>2. Information We Collect</h2>
    <ul>
      <li><strong>Information you provide:</strong> name, email, phone, service details (via contact forms, phone, or in-person consultations)</li>
      <li><strong>Automatically collected:</strong> IP address, browser type, device info, pages visited, referring URL, timestamps (via Google Analytics 4)</li>
      <li><strong>Cookies and similar technologies:</strong> we use cookies to improve your experience and analyze site usage</li>
    </ul>

    <h2>3. How We Use Your Information</h2>
    <ul>
      <li>Respond to inquiries and provide requested services</li>
      <li>Schedule appointments and consultations</li>
      <li>Communicate about active services</li>
      <li>Send service-related communications (including phone calls and SMS messages where you have consented)</li>
      <li>Improve our website and services</li>
      <li>Comply with legal obligations (licensing, insurance, tax)</li>
    </ul>

    <h2>4. How We Share Your Information</h2>
    <ul>
      <li>We do <strong>NOT</strong> sell personal information.</li>
      <li><strong>Service providers:</strong> Google Analytics (analytics), Formsubmit.co (contact form processor), our hosting provider, and Page One Insights, LLC (our web design partner — receives copies of contact form submissions via _cc field for lead-tracking purposes).</li>
      <li><strong>Service providers and product suppliers:</strong> as necessary to provide your requested services.</li>
      <li><strong>Legal compliance:</strong> if required by <?php echo htmlspecialchars($address['state']); ?> or federal law.</li>
      <li><strong>Business transfers:</strong> in the event of a merger, acquisition, or sale of business assets.</li>
    </ul>

    <h2>5. Your Privacy Rights</h2>

    <h3 id="state-rights"><?php echo htmlspecialchars($address['state']); ?> Residents</h3>
    <p>You may request access to or deletion of personal information we hold about you. Contact us using the methods below.</p>

    <h3 id="ccpa-rights">California Residents (CCPA / CPRA)</h3>
    <p>If you are a California resident, you have the following rights under the California Consumer Privacy Act (CCPA) and California Privacy Rights Act (CPRA):</p>
    <ul>
      <li><strong>Right to know</strong> what personal information we collect, use, disclose, and sell.</li>
      <li><strong>Right to delete</strong> personal information we have collected from you, subject to certain exceptions.</li>
      <li><strong>Right to correct</strong> inaccurate personal information.</li>
      <li><strong>Right to opt-out of sale or sharing</strong> of personal information. (We do not sell personal information, but you may still submit an opt-out request for our records.)</li>
      <li><strong>Right to limit use</strong> of sensitive personal information.</li>
      <li><strong>Right to non-discrimination</strong> — we will not deny you services or charge different prices based on exercising your rights.</li>
    </ul>
    <p><strong>How to exercise your rights:</strong> Email <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a> or call <a href="tel:<?php echo htmlspecialchars($phoneRaw); ?>"><?php echo htmlspecialchars($phone); ?></a>. We will respond within 45 days of receipt.</p>

    <h3>Other State Residents</h3>
    <p>Residents of Colorado, Virginia, Connecticut, Utah, and Texas have similar rights under their respective state privacy laws. Contact us using the same methods above to exercise your rights.</p>

    <h2>6. SMS and Phone Communications (TCPA)</h2>
    <p>When you submit our contact form and check the consent box, you agree to receive phone calls and SMS text messages from us about your service request. Standard message and data rates may apply. Consent is not a condition of purchase. You can opt out of SMS communications at any time by replying STOP to any text message. You can opt out of phone communications at any time by telling our representative or emailing us at <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>.</p>

    <h2>7. Data Retention</h2>
    <p>We retain contact form submissions and service records for as long as necessary to provide services and comply with legal obligations, typically 5-7 years for business records.</p>

    <h2>8. Data Security</h2>
    <p>We use reasonable administrative, technical, and physical safeguards including SSL encryption on all form submissions and secure hosting infrastructure. No system is 100% secure. We cannot guarantee absolute security, but we work to minimize risks.</p>

    <h2>9. Children's Privacy</h2>
    <p>This site is not directed to children under 13. We do not knowingly collect information from children. If you believe a child has provided us information, contact us and we will delete it.</p>

    <h2>10. Third-Party Links</h2>
    <p>Our website may link to third-party sites (Facebook, Google Business Profile, etc.). We are not responsible for the privacy practices of these sites. Review their privacy policies separately.</p>

    <h2>11. Changes to This Policy</h2>
    <p>We may update this Privacy Policy from time to time. The "Last Updated" date at the top will reflect the most recent change. Material changes will be prominently posted on the site.</p>

    <h2>12. Contact Us</h2>
    <p>For privacy questions or to exercise your rights:</p>
    <p>
      <strong><?php echo htmlspecialchars($siteName); ?></strong><br>
      Email: <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a><br>
      Phone: <a href="tel:<?php echo htmlspecialchars($phoneRaw); ?>"><?php echo htmlspecialchars($phone); ?></a><br>
      Address: <?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
    </p>

    <div class="legal-disclaimer">
      This Privacy Policy is provided as a general template. We recommend reviewing this document with a licensed <?php echo htmlspecialchars($address['state']); ?> attorney before publication to ensure compliance with current state and federal privacy laws.
    </div>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
