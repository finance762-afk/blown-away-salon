<?php
/**
 * Terms of Service — Blown Away Salon/Bon Air Barbershop
 * REQUIRED compliance page per CLAUDE.md v6.1
 *
 * Covers: Service terms, liability limits, dispute resolution, governing law.
 * MUST be indexable (no noindex) — legal disclosures must be findable.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$currentPage = 'legal';
$pageTitle = 'Terms of Service | ' . $siteName;
$pageDescription = 'Terms of Service for ' . $siteName . ' — policies governing use of our services and website.';
$canonicalUrl = $siteUrl . '/terms/';
$ogImage = $siteUrl . '/assets/images/logo.png';
$noindex = false;  // Legal pages MUST be indexable
$cssVersion = '2';

// Schema: WebPage + BreadcrumbList (NO FAQPage, NO Service)
$schema = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebPage',
            '@id' => $canonicalUrl . '#webpage',
            'url' => $canonicalUrl,
            'name' => $pageTitle,
            'description' => $pageDescription,
            'isPartOf' => ['@id' => $siteUrl . '/#website'],
            'about' => ['@id' => $siteUrl . '/#organization'],
            'inLanguage' => 'en-US',
        ],
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
                    'name' => 'Terms of Service',
                ],
            ],
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* Terms of Service — uses shared .hero--legal and .legal-prose from framework.css */
.terms-effective {
  text-align: center;
  font-size: 0.92rem;
  color: var(--color-text-light);
  margin-bottom: var(--space-md);
}
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php'; ?>

<main id="main-content">

  <!-- Hero -->
  <section class="hero--legal">
    <div class="hero__copy">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <ol>
          <li><a href="/">Home</a></li>
          <li class="breadcrumb-sep">›</li>
          <li aria-current="page">Terms of Service</li>
        </ol>
      </nav>
      <h1>Terms of Service</h1>
      <p class="terms-effective">Effective Date: <?php echo date('F j, Y'); ?></p>
    </div>
  </section>

  <!-- Legal Content -->
  <article class="legal-prose">

    <h2>1. Introduction</h2>
    <p>
      Welcome to <?php echo htmlspecialchars($siteName); ?>. These Terms of Service ("Terms") govern your use of our website (<?php echo htmlspecialchars($siteUrl); ?>) and the professional hair and barbering services we provide at our <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> location.
    </p>
    <p>
      By accessing our website or scheduling services with us, you agree to be bound by these Terms. If you do not agree, please do not use our website or services.
    </p>

    <h2>2. Services Provided</h2>
    <p>
      <?php echo htmlspecialchars($siteName); ?> provides professional hair salon and barbershop services including, but not limited to:
    </p>
    <ul>
      <?php foreach ($services as $service): ?>
      <li><?php echo htmlspecialchars($service['name']); ?></li>
      <?php endforeach; ?>
    </ul>
    <p>
      All services are subject to availability and stylist/barber discretion. We reserve the right to refuse service to anyone for any lawful reason.
    </p>

    <h2>3. Appointment Policy</h2>
    <p>
      <strong>Booking:</strong> Appointments may be scheduled by phone at <a href="tel:<?php echo htmlspecialchars($phoneRaw); ?>"><?php echo htmlspecialchars($phone); ?></a>. Walk-ins are welcome subject to availability.
    </p>
    <p>
      <strong>Cancellations:</strong> We request at least 24 hours' notice for appointment cancellations or rescheduling. Repeated no-shows or last-minute cancellations may result in a requirement to prepay for future appointments.
    </p>
    <p>
      <strong>Late Arrivals:</strong> Arriving more than 15 minutes late may result in a shortened service or rescheduling to avoid delaying other clients.
    </p>

    <h2>4. Pricing and Payment</h2>
    <p>
      Service pricing is communicated at the time of booking or consultation. Prices are subject to change without notice. We accept cash, credit cards, and debit cards. Payment is due at the time of service.
    </p>
    <p>
      Tips are appreciated but not required. Tipping is at your sole discretion.
    </p>

    <h2>5. Client Responsibilities</h2>
    <p>
      You are responsible for:
    </p>
    <ul>
      <li>Disclosing any allergies, scalp conditions, or previous chemical treatments to your stylist or barber before service begins.</li>
      <li>Providing accurate contact information for appointment confirmations and reminders.</li>
      <li>Communicating clearly about your desired service outcome during the consultation.</li>
      <li>Following any aftercare instructions provided by your stylist or barber.</li>
    </ul>

    <h2>6. Satisfaction and Corrections</h2>
    <p>
      Your satisfaction is important to us. If you are not happy with your service, please notify your stylist or barber immediately before leaving the salon. We will make reasonable efforts to correct the issue at no additional charge if you notify us within 7 days of the original service.
    </p>
    <p>
      We are not responsible for color or cut results that do not meet your expectations if you did not communicate your desired outcome during the consultation or if you failed to disclose relevant hair history.
    </p>

    <h2>7. Liability Limitations</h2>
    <p>
      To the fullest extent permitted by <?php echo htmlspecialchars($address['state']); ?> law:
    </p>
    <ul>
      <li><?php echo htmlspecialchars($siteName); ?> is not liable for allergic reactions or adverse outcomes resulting from undisclosed client allergies, medical conditions, or previous treatments.</li>
      <li>Our liability for any service-related claim is limited to the amount you paid for that specific service.</li>
      <li>We are not liable for indirect, incidental, or consequential damages arising from your use of our services.</li>
      <li>We maintain professional liability insurance as required by <?php echo htmlspecialchars($address['state']); ?> law.</li>
    </ul>

    <h2>8. Website Use</h2>
    <p>
      You may use our website for lawful purposes only. You agree not to:
    </p>
    <ul>
      <li>Use the website in any way that violates any applicable federal, state, or local law.</li>
      <li>Transmit any unsolicited advertising, spam, or other disruptive content.</li>
      <li>Attempt to interfere with the proper functioning of the website or circumvent any security features.</li>
      <li>Use automated systems (bots, scrapers) to access the website without our written permission.</li>
    </ul>

    <h2>9. Intellectual Property</h2>
    <p>
      All content on this website, including text, graphics, logos, images, and software, is the property of <?php echo htmlspecialchars($siteName); ?> or its licensors and is protected by U.S. and international copyright and trademark laws. You may not reproduce, distribute, or create derivative works from any content on this website without our express written permission.
    </p>
    <p>
      Before-and-after photos displayed on our website or social media are used with client permission. We will not publish photos of your hair without your written consent.
    </p>

    <h2>10. Privacy</h2>
    <p>
      Your use of our website and services is also governed by our <a href="/privacy-policy/">Privacy Policy</a>, which describes how we collect, use, and protect your personal information. Please review it carefully.
    </p>

    <h2>11. Dispute Resolution and Governing Law</h2>
    <p>
      These Terms are governed by the laws of the State of <?php echo htmlspecialchars($address['state']); ?>, without regard to its conflict of law provisions. Any disputes arising from these Terms or your use of our services shall be resolved exclusively in the state or federal courts located in <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?>.
    </p>
    <p>
      You agree to attempt to resolve any disputes informally by contacting us at <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a> before initiating any legal action.
    </p>

    <h2>12. Changes to These Terms</h2>
    <p>
      We reserve the right to update or modify these Terms at any time without prior notice. Changes will be effective immediately upon posting to this page. Your continued use of our website or services after changes are posted constitutes your acceptance of the revised Terms. We encourage you to review this page periodically.
    </p>

    <h2>13. Severability</h2>
    <p>
      If any provision of these Terms is found to be unenforceable or invalid under applicable law, that provision will be limited or eliminated to the minimum extent necessary so that the remaining Terms remain in full force and effect.
    </p>

    <h2>14. Contact Information</h2>
    <p>
      If you have any questions about these Terms of Service, please contact us:
    </p>
    <ul>
      <li><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($phoneRaw); ?>"><?php echo htmlspecialchars($phone); ?></a></li>
      <li><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></li>
      <li><strong>Address:</strong> <?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></li>
    </ul>

    <div class="legal-disclaimer">
      <p>
        <strong>Attorney Review Recommended:</strong> This Terms of Service document is provided as a general template. We recommend reviewing this document with a licensed <?php echo htmlspecialchars($address['state']); ?> attorney before publication to ensure compliance with all applicable laws and industry-specific regulations.
      </p>
    </div>

    <p style="text-align: center; margin-top: var(--space-2xl); font-size: 0.85rem; color: var(--color-text-light);">
      Last Updated: <?php echo date('F j, Y'); ?>
    </p>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
