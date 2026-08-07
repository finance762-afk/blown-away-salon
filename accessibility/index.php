<?php
/**
 * Accessibility Statement — Blown Away Salon/Bon Air Barbershop
 * REQUIRED compliance page per CLAUDE.md v6.1
 *
 * Covers: WCAG 2.1 AA conformance, assistive technology support, contact for issues.
 * MUST be indexable (no noindex) — legal disclosures must be findable.
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$currentPage = 'legal';
$pageTitle = 'Accessibility Statement | ' . $siteName;
$pageDescription = 'Accessibility Statement for ' . $siteName . ' — our commitment to making our website accessible to all visitors.';
$canonicalUrl = $siteUrl . '/accessibility/';
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
                    'name' => 'Accessibility',
                ],
            ],
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
/* Accessibility Statement — uses shared .hero--legal and .legal-prose */
.accessibility-checklist {
  background: var(--color-bg-alt);
  padding: var(--space-lg);
  border-radius: var(--radius);
  margin: var(--space-lg) 0;
}
.accessibility-checklist h3 {
  margin-top: 0;
}
.accessibility-checklist ul {
  margin-left: 0;
  padding-left: var(--space-md);
}
.accessibility-checklist li {
  margin-bottom: var(--space-xs);
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
          <li aria-current="page">Accessibility</li>
        </ol>
      </nav>
      <h1>Accessibility Statement</h1>
      <p style="text-align: center; font-size: 0.92rem; color: var(--color-text-light); margin-top: var(--space-sm);">
        Effective Date: <?php echo date('F j, Y'); ?>
      </p>
    </div>
  </section>

  <!-- Legal Content -->
  <article class="legal-prose">

    <h2>1. Our Commitment to Accessibility</h2>
    <p>
      <?php echo htmlspecialchars($siteName); ?> is committed to ensuring that our website is accessible to all individuals, including those with disabilities. We believe everyone should be able to learn about our services, view our work, and contact us without barriers.
    </p>
    <p>
      We strive to conform to the <a href="https://www.w3.org/WAI/WCAG21/quickref/" target="_blank" rel="noopener">Web Content Accessibility Guidelines (WCAG) 2.1 Level AA</a>, an internationally recognized standard for web accessibility developed by the World Wide Web Consortium (W3C).
    </p>

    <h2>2. Accessibility Features</h2>
    <p>
      We have implemented the following features to improve accessibility on our website:
    </p>

    <div class="accessibility-checklist">
      <h3>Navigation & Structure</h3>
      <ul>
        <li><strong>Skip to Main Content Link:</strong> A skip link at the top of every page allows screen reader and keyboard users to bypass navigation and jump directly to the main content.</li>
        <li><strong>Semantic HTML:</strong> Headings, landmarks, and lists are structured using proper HTML5 elements to aid assistive technology navigation.</li>
        <li><strong>Logical Reading Order:</strong> Content flows in a logical order that matches the visual layout.</li>
        <li><strong>Consistent Navigation:</strong> Navigation menus are consistent across all pages.</li>
      </ul>
    </div>

    <div class="accessibility-checklist">
      <h3>Keyboard Accessibility</h3>
      <ul>
        <li><strong>Full Keyboard Navigation:</strong> All interactive elements (links, buttons, form fields) can be accessed and activated using only a keyboard (Tab, Enter, Space keys).</li>
        <li><strong>Visible Focus Indicators:</strong> A clear, high-contrast outline appears around the focused element so keyboard users know where they are on the page.</li>
        <li><strong>No Keyboard Traps:</strong> Users can navigate in and out of all page sections using standard keyboard commands.</li>
      </ul>
    </div>

    <div class="accessibility-checklist">
      <h3>Visual & Color</h3>
      <ul>
        <li><strong>Color Contrast:</strong> Text and interactive elements meet WCAG 2.1 AA contrast ratios (at least 4.5:1 for normal text, 3:1 for large text and UI components).</li>
        <li><strong>Text Resizing:</strong> Text can be resized up to 200% without loss of content or functionality.</li>
        <li><strong>No Information by Color Alone:</strong> We do not rely solely on color to convey information.</li>
      </ul>
    </div>

    <div class="accessibility-checklist">
      <h3>Images & Media</h3>
      <ul>
        <li><strong>Alternative Text:</strong> All meaningful images include descriptive alt text. Decorative images are marked as such for screen readers to skip.</li>
        <li><strong>Lazy Loading with Accessible Fallbacks:</strong> Images load efficiently without blocking assistive technology.</li>
      </ul>
    </div>

    <div class="accessibility-checklist">
      <h3>Forms & Interaction</h3>
      <ul>
        <li><strong>Form Labels:</strong> All form fields have associated labels that are announced by screen readers.</li>
        <li><strong>Error Identification:</strong> Form validation errors are clearly identified and announced to screen reader users.</li>
        <li><strong>Required Field Indicators:</strong> Required fields are clearly marked with both visual indicators and aria attributes.</li>
      </ul>
    </div>

    <div class="accessibility-checklist">
      <h3>Motion & Animation</h3>
      <ul>
        <li><strong>Reduced Motion Support:</strong> Our website respects the <code>prefers-reduced-motion</code> setting. Users who have enabled reduced motion in their operating system will see static content instead of animations.</li>
      </ul>
    </div>

    <h2>3. Assistive Technologies Tested</h2>
    <p>
      We have tested our website with the following assistive technologies and browsers:
    </p>
    <ul>
      <li>Screen readers: NVDA (Windows), JAWS (Windows), VoiceOver (macOS/iOS)</li>
      <li>Browsers: Google Chrome, Mozilla Firefox, Safari, Microsoft Edge</li>
      <li>Keyboard-only navigation</li>
      <li>Browser zoom (up to 200%)</li>
    </ul>

    <h2>4. Known Limitations</h2>
    <p>
      Despite our best efforts, some parts of our website may not yet be fully accessible. Known limitations include:
    </p>
    <ul>
      <li><strong>Third-Party Embeds:</strong> Some embedded third-party content (such as Google Maps) may not be fully accessible. We have provided alternative contact methods and directions on our Contact page.</li>
      <li><strong>Legacy Content:</strong> Older images or content may not have complete alt text. We are working to update these as we review our site.</li>
    </ul>
    <p>
      We are actively working to improve accessibility across all areas of our website.
    </p>

    <h2>5. Feedback and Contact</h2>
    <p>
      We welcome your feedback on the accessibility of our website. If you encounter any accessibility barriers or have suggestions for improvement, please contact us:
    </p>
    <ul>
      <li><strong>Phone:</strong> <a href="tel:<?php echo htmlspecialchars($phoneRaw); ?>"><?php echo htmlspecialchars($phone); ?></a></li>
      <li><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a></li>
      <li><strong>Mail:</strong> <?php echo htmlspecialchars($address['street']); ?>, <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?></li>
    </ul>
    <p>
      We will respond to accessibility feedback within 5 business days and work to resolve the issue as quickly as possible.
    </p>

    <h2>6. Accessibility Resources</h2>
    <p>
      If you need assistance accessing our website or would like to learn more about web accessibility, the following resources may be helpful:
    </p>
    <ul>
      <li><a href="https://www.w3.org/WAI/" target="_blank" rel="noopener">W3C Web Accessibility Initiative (WAI)</a></li>
      <li><a href="https://www.ada.gov/" target="_blank" rel="noopener">Americans with Disabilities Act (ADA)</a></li>
      <li><a href="https://webaim.org/" target="_blank" rel="noopener">WebAIM: Web Accessibility In Mind</a></li>
      <li><a href="https://www.section508.gov/" target="_blank" rel="noopener">Section 508 (U.S. Federal Accessibility Standards)</a></li>
    </ul>

    <h2>7. Ongoing Efforts</h2>
    <p>
      Accessibility is an ongoing effort. We regularly review our website and update our practices to ensure continued compliance with WCAG 2.1 AA standards. Our team receives training on accessible design and development, and we conduct periodic accessibility audits.
    </p>

    <h2>8. Third-Party Content</h2>
    <p>
      Our website may link to third-party websites or display third-party content (such as Google Maps or social media widgets). We do not control the accessibility of third-party content, but we select vendors who share our commitment to accessibility whenever possible.
    </p>

    <h2>9. Changes to This Statement</h2>
    <p>
      We may update this Accessibility Statement from time to time to reflect changes in our website or accessibility practices. Any changes will be posted on this page with an updated "Effective Date" at the top.
    </p>

    <div class="legal-disclaimer">
      <p>
        <strong>Attorney Review Recommended:</strong> This Accessibility Statement is provided as a general template. We recommend reviewing this document with a licensed <?php echo htmlspecialchars($address['state']); ?> attorney before publication to ensure compliance with the Americans with Disabilities Act (ADA) and other applicable laws.
      </p>
    </div>

    <p style="text-align: center; margin-top: var(--space-2xl); font-size: 0.85rem; color: var(--color-text-light);">
      Last Updated: <?php echo date('F j, Y'); ?>
    </p>

  </article>

</main>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
