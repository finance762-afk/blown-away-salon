<?php
/**
 * Cookie Policy — Blown Away Salon/Bon Air Barbershop
 * REQUIRED compliance page per CLAUDE.md v6.1
 *
 * Covers: What cookies we use, why, how to control them.
 * MUST be indexable (no noindex) — legal disclosures must be findable.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$currentPage = 'legal';
$pageTitle = 'Cookie Policy | ' . $siteName;
$pageDescription = 'Cookie Policy for ' . $siteName . ' — how we use cookies and similar technologies on our website.';
$canonicalUrl = $siteUrl . '/cookie-policy/';
$ogImage = $siteUrl . '/assets/images/logo.png';
$noindex = false;  // Legal pages MUST be indexable
$cssVersion = '2';

// Schema: WebPage + BreadcrumbList
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
                    'name' => 'Cookie Policy',
                ],
            ],
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* Cookie Policy — uses shared .hero--legal and .legal-prose */
.cookie-table {
  width: 100%;
  border-collapse: collapse;
  margin: var(--space-md) 0;
  font-size: 0.9rem;
}
.cookie-table th,
.cookie-table td {
  padding: var(--space-sm);
  text-align: left;
  border-bottom: 1px solid var(--color-border);
}
.cookie-table th {
  background: var(--color-bg-alt);
  color: var(--color-primary);
  font-weight: 700;
  font-family: var(--font-heading);
}
.cookie-table tr:last-child td {
  border-bottom: none;
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
          <li aria-current="page">Cookie Policy</li>
        </ol>
      </nav>
      <h1>Cookie Policy</h1>
      <p style="text-align: center; font-size: 0.92rem; color: var(--color-text-light); margin-top: var(--space-sm);">
        Effective Date: <?php echo date('F j, Y'); ?>
      </p>
    </div>
  </section>

  <!-- Legal Content -->
  <article class="legal-prose">

    <h2>1. Introduction</h2>
    <p>
      This Cookie Policy explains how <?php echo htmlspecialchars($siteName); ?> ("we," "us," or "our") uses cookies and similar tracking technologies on our website (<?php echo htmlspecialchars($siteUrl); ?>).
    </p>
    <p>
      By using our website, you consent to the use of cookies as described in this policy. If you do not agree to our use of cookies, you should adjust your browser settings accordingly or refrain from using our website.
    </p>

    <h2>2. What Are Cookies?</h2>
    <p>
      Cookies are small text files that are stored on your device (computer, tablet, or mobile phone) when you visit a website. Cookies allow the website to recognize your device and remember information about your visit, such as your preferences and actions.
    </p>
    <p>
      Cookies can be "session cookies" (which expire when you close your browser) or "persistent cookies" (which remain on your device until they expire or you delete them).
    </p>

    <h2>3. How We Use Cookies</h2>
    <p>
      We use cookies for the following purposes:
    </p>
    <ul>
      <li><strong>Essential Functionality:</strong> To remember your preferences (such as cookie consent) and ensure the website functions properly.</li>
      <li><strong>Analytics:</strong> To understand how visitors use our website so we can improve the user experience.</li>
      <li><strong>Performance:</strong> To monitor website performance and identify technical issues.</li>
    </ul>
    <p>
      We do not use cookies for advertising, third-party tracking for marketing purposes, or to sell your data.
    </p>

    <h2>4. Types of Cookies We Use</h2>
    <table class="cookie-table">
      <thead>
        <tr>
          <th>Cookie Type</th>
          <th>Purpose</th>
          <th>Duration</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Strictly Necessary</strong></td>
          <td>Remembers your cookie banner dismissal preference. Required for the website to function.</td>
          <td>Persistent (1 year)</td>
        </tr>
        <tr>
          <td><strong>Analytics (Google Analytics)</strong></td>
          <td>Tracks anonymous usage statistics (page views, session duration, bounce rate) to help us improve the website. No personally identifiable information is collected.</td>
          <td>Persistent (up to 2 years)</td>
        </tr>
        <tr>
          <td><strong>Google Maps</strong></td>
          <td>Enables the embedded Google Maps location widget on our Contact page. Set by Google when the map loads.</td>
          <td>Varies (set by Google)</td>
        </tr>
      </tbody>
    </table>

    <h2>5. Third-Party Cookies</h2>
    <p>
      Some cookies on our website are set by third-party services we use:
    </p>
    <ul>
      <li>
        <strong>Google Analytics:</strong> We use Google Analytics to understand how visitors interact with our website. Google Analytics sets cookies to collect information such as page views, time on site, and referral sources. This data is aggregated and anonymized. For more information, see <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.
      </li>
      <li>
        <strong>Google Maps:</strong> Our Contact page includes an embedded Google Map showing our <?php echo htmlspecialchars($address['city']); ?> location. Google may set cookies when you interact with the map. For more information, see <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google's Privacy Policy</a>.
      </li>
    </ul>
    <p>
      We do not control third-party cookies. Please refer to the third party's privacy policy for more information about how they use cookies.
    </p>

    <h2>6. How to Control Cookies</h2>
    <p>
      You have the right to accept or reject cookies. Most web browsers automatically accept cookies, but you can modify your browser settings to decline cookies if you prefer.
    </p>
    <p>
      <strong>Browser Settings:</strong> You can control cookies through your browser settings. Here are links to cookie management instructions for common browsers:
    </p>
    <ul>
      <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
      <li><a href="https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop" target="_blank" rel="noopener">Mozilla Firefox</a></li>
      <li><a href="https://support.apple.com/guide/safari/manage-cookies-sfri11471/mac" target="_blank" rel="noopener">Safari (macOS)</a></li>
      <li><a href="https://support.apple.com/en-us/HT201265" target="_blank" rel="noopener">Safari (iOS)</a></li>
      <li><a href="https://support.microsoft.com/en-us/microsoft-edge/delete-cookies-in-microsoft-edge-63947406-40ac-c3b8-57b9-2a946a29ae09" target="_blank" rel="noopener">Microsoft Edge</a></li>
    </ul>
    <p>
      <strong>Google Analytics Opt-Out:</strong> You can opt out of Google Analytics tracking by installing the <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-Out Browser Add-On</a>.
    </p>
    <p>
      Please note that blocking or deleting cookies may impact your experience on our website. Some features may not function properly if cookies are disabled.
    </p>

    <h2>7. Do Not Track Signals</h2>
    <p>
      Some browsers include a "Do Not Track" (DNT) feature that signals to websites that you do not want to be tracked. Our website does not currently respond to DNT signals because there is no industry-wide standard for how to interpret them.
    </p>

    <h2>8. Changes to This Cookie Policy</h2>
    <p>
      We may update this Cookie Policy from time to time to reflect changes in our practices or for legal, operational, or regulatory reasons. Any changes will be posted on this page with an updated "Effective Date" at the top.
    </p>
    <p>
      We encourage you to review this Cookie Policy periodically to stay informed about how we use cookies.
    </p>

    <h2>9. Contact Us</h2>
    <p>
      If you have any questions about this Cookie Policy or our use of cookies, please contact us:
    </p>
    <ul>
      <li><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($phoneRaw); ?>"><?php echo htmlspecialchars($phone); ?></a></li>
      <li><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></li>
      <li><strong>Address:</strong> <?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></li>
    </ul>

    <div class="legal-disclaimer">
      <p>
        <strong>Attorney Review Recommended:</strong> This Cookie Policy is provided as a general template. We recommend reviewing this document with a licensed <?php echo htmlspecialchars($address['state']); ?> attorney before publication to ensure compliance with all applicable laws.
      </p>
    </div>

    <p style="text-align: center; margin-top: var(--space-2xl); font-size: 0.85rem; color: var(--color-text-light);">
      Last Updated: <?php echo date('F j, Y'); ?>
    </p>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
