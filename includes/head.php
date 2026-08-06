<?php
/**
 * head.php — <head> section for Blown Away Salon / Bon Air Barbershop
 *
 * Centralizes all meta tags, structured data, fonts, and CSS.
 * Phase 2 — v6.2 (self-hosted fonts, no Google Fonts CDN)
 */

// Default meta values (override via page-specific variables before including head.php)
$pageTitle        = $pageTitle        ?? $siteName . ' | ' . $primaryKeyword . ' in ' . $address['city'] . ', ' . $address['state'];
$pageDescription  = $pageDescription  ?? $metaDescription ?? 'Expert hair coloring, balayage, men\'s cuts, and styling at Blown Away Salon and Bon Air Barbershop in Louisville, KY. Book your appointment today at ' . $phone . '.';
$metaDescription  = $pageDescription; // Backward compatibility
$canonicalUrl     = $canonicalUrl     ?? $siteUrl . '/';
$ogImage          = $ogImage          ?? $siteUrl . '/assets/images/logo.png';
$noindex          = $noindex          ?? false;
$cssVersion       = $cssVersion       ?? '1';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <?php if ($noindex): ?>
  <meta name="robots" content="noindex, nofollow">
  <?php endif; ?>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
  <meta property="og:locale" content="en_US">

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png" href="/assets/images/favicon.png">

  <!-- Fonts (v6.2 — self-hosted, NO Google Fonts CDN) -->
  <!-- Preload above-the-fold heading font only -->
  <link rel="preload" href="/assets/fonts/bricolage-grotesque.woff2" as="font" type="font/woff2" crossorigin>

  <?php if (!empty($heroPreloadImage)): ?>
  <!-- Preload LCP hero image (set $heroPreloadImage / $heroPreloadSrcset before including head.php) -->
  <link rel="preload" as="image" href="<?php echo htmlspecialchars($heroPreloadImage); ?>"<?php if (!empty($heroPreloadSrcset)): ?> imagesrcset="<?php echo htmlspecialchars($heroPreloadSrcset); ?>" imagesizes="100vw"<?php endif; ?>>
  <?php endif; ?>
  <?php if (!empty($heroImagePreload)): ?>
  <!-- Preload above-the-fold hero image (LCP) -->
  <link rel="preload" href="<?php echo htmlspecialchars($heroImagePreload); ?>" as="image" fetchpriority="high">
  <?php endif; ?>

  <!-- CSS -->
  <link rel="stylesheet" href="/assets/css/framework.css">
  <link rel="stylesheet" href="/assets/css/styles.css?v=<?php echo $cssVersion; ?>">

  <!-- Phase 2 Header/Nav/Footer Styles -->
  <style>
    /* ================================================================
       HEADER & NAVIGATION (v6.2 — glassmorphism with scroll state)
       ================================================================ */

    .site-header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background: var(--color-primary);
      transition: all 0.3s ease;
    }

    .site-header.scrolled {
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      background: rgba(28, 28, 34, 0.92);
      box-shadow: 0 2px 20px rgba(0,0,0,0.15);
    }

    .navbar {
      padding: 1rem 0;
      transition: padding 0.3s ease;
    }

    .site-header.scrolled .navbar {
      padding: 0.5rem 0;
    }

    .navbar-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 2rem;
    }

    /* Logo */
    .navbar-logo a {
      display: flex;
      align-items: baseline;
      gap: 0.5rem;
      text-decoration: none;
      transition: transform 0.3s ease;
    }

    .logo-mark {
      font-family: var(--font-heading);
      font-size: clamp(1.5rem, 2vw, 2rem);
      font-weight: 800;
      color: var(--color-secondary);
      letter-spacing: -0.02em;
    }

    .logo-text {
      display: flex;
      flex-direction: column;
      gap: 0;
    }

    .logo-salon {
      font-family: var(--font-heading);
      font-size: clamp(0.875rem, 1vw, 1rem);
      font-weight: 600;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      line-height: 1;
    }

    .logo-tagline {
      font-family: var(--font-body);
      font-size: 0.625rem;
      font-weight: 400;
      color: rgba(255, 255, 255, 0.6);
      font-style: italic;
      line-height: 1;
    }

    .site-header.scrolled .navbar-logo a {
      transform: scale(0.92);
    }

    /* Desktop Nav Links */
    .navbar-links {
      display: none;
      list-style: none;
      gap: 2rem;
      margin: 0;
      padding: 0;
    }

    .navbar-links a {
      display: flex;
      align-items: center;
      gap: 0.25rem;
      font-family: var(--font-heading);
      font-size: 0.875rem;
      font-weight: 600;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      text-decoration: none;
      position: relative;
      transition: color 0.2s ease;
    }

    .navbar-links a[aria-current="page"]::after,
    .navbar-links a:hover::after {
      width: 100%;
    }

    .navbar-links a::after {
      content: '';
      position: absolute;
      bottom: -4px;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--color-accent);
      transition: width 0.3s ease;
    }

    .navbar-links a[aria-current="page"] {
      color: var(--color-accent);
    }

    .navbar-links a:hover {
      color: var(--color-accent);
    }

    /* Services Dropdown */
    .has-dropdown {
      position: relative;
    }

    .dropdown {
      display: none; /* Inline style="display:none" on HTML is the failsafe */
      position: absolute;
      top: 100%;
      left: 0;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
      padding: 0.5rem 0;
      min-width: 220px;
      margin-top: 0.5rem;
      list-style: none;
      z-index: 100;
    }

    .has-dropdown:hover .dropdown,
    .has-dropdown:focus-within .dropdown {
      display: block !important; /* !important overrides inline style */
    }

    .dropdown a {
      display: block;
      padding: 0.625rem 1rem;
      font-size: 0.875rem;
      font-weight: 500;
      color: var(--color-dark);
      text-transform: none;
      letter-spacing: 0;
      transition: background 0.2s ease, color 0.2s ease;
    }

    .dropdown a::after {
      display: none; /* no underline in dropdown */
    }

    .dropdown a:hover {
      background: var(--color-light);
      color: var(--color-primary);
    }

    /* Desktop CTA */
    .navbar-cta {
      display: none;
      align-items: center;
      gap: 1rem;
    }

    .navbar-phone {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: #fff;
      font-size: 0.875rem;
      font-weight: 600;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .navbar-phone:hover {
      color: var(--color-accent);
    }

    .navbar-cta .btn-primary {
      padding: 0.625rem 1.25rem;
      font-size: 0.875rem;
      background: var(--color-accent);
      border-color: var(--color-accent);
    }

    .navbar-cta .btn-primary:hover {
      background: var(--color-secondary);
      border-color: var(--color-secondary);
      transform: translateY(-2px);
    }

    /* Hamburger */
    .hamburger {
      display: flex;
      flex-direction: column;
      gap: 5px;
      background: none;
      border: none;
      padding: 0.5rem;
      cursor: pointer;
      z-index: 1001;
    }

    .hamburger-line {
      display: block;
      width: 24px;
      height: 2px;
      background: #fff;
      transition: all 0.3s ease;
    }

    .hamburger.active .hamburger-line:nth-child(1) {
      transform: rotate(45deg) translate(6px, 6px);
    }

    .hamburger.active .hamburger-line:nth-child(2) {
      opacity: 0;
    }

    .hamburger.active .hamburger-line:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }

    /* Mobile Menu */
    .mobile-menu {
      position: fixed;
      inset: 0;
      background: rgba(28, 28, 34, 0.98);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      z-index: 999;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .mobile-menu.is-open {
      opacity: 1;
      visibility: visible;
    }

    .mobile-menu-inner {
      text-align: center;
      padding: 2rem;
    }

    .mobile-menu-links {
      list-style: none;
      margin: 0 0 2rem;
      padding: 0;
    }

    .mobile-menu-links li {
      margin-bottom: 0.5rem;
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.4s ease, transform 0.4s ease;
    }

    .mobile-menu.is-open .mobile-menu-links li {
      opacity: 1;
      transform: translateY(0);
    }

    .mobile-menu.is-open .mobile-menu-links li:nth-child(1) { transition-delay: 0.05s; }
    .mobile-menu.is-open .mobile-menu-links li:nth-child(2) { transition-delay: 0.1s; }
    .mobile-menu.is-open .mobile-menu-links li:nth-child(3) { transition-delay: 0.15s; }
    .mobile-menu.is-open .mobile-menu-links li:nth-child(4) { transition-delay: 0.2s; }
    .mobile-menu.is-open .mobile-menu-links li:nth-child(5) { transition-delay: 0.25s; }
    .mobile-menu.is-open .mobile-menu-links li:nth-child(6) { transition-delay: 0.3s; }
    .mobile-menu.is-open .mobile-menu-links li:nth-child(7) { transition-delay: 0.35s; }
    .mobile-menu.is-open .mobile-menu-links li:nth-child(8) { transition-delay: 0.4s; }

    .mobile-menu-links a {
      display: block;
      font-family: var(--font-heading);
      font-size: 1.25rem;
      font-weight: 600;
      color: #fff;
      text-decoration: none;
      padding: 0.75rem;
      transition: color 0.2s ease;
    }

    .mobile-menu-links a[aria-current="page"],
    .mobile-menu-links a:hover {
      color: var(--color-accent);
    }

    .mobile-submenu-item a {
      font-size: 1rem;
      font-weight: 500;
      color: rgba(255, 255, 255, 0.8);
      padding-left: 1.5rem;
    }

    .mobile-menu-cta {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      max-width: 300px;
      margin: 0 auto;
    }

    .btn-mobile {
      width: 100%;
      justify-content: center;
    }

    /* Desktop breakpoint */
    @media (min-width: 768px) {
      .navbar-links {
        display: flex;
      }

      .navbar-cta {
        display: flex;
      }

      .hamburger {
        display: none;
      }
    }

    /* ================================================================
       FOOTER (v6.2 — entity block, legal row, mobile sticky CTA)
       ================================================================ */

    .site-footer {
      background: var(--color-primary);
      color: #fff;
      padding-bottom: 70px; /* space for mobile sticky CTA */
    }

    .footer-top {
      padding: 4rem 0 2rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2rem;
    }

    .footer-logo {
      margin-bottom: 1rem;
    }

    .footer-logo .logo-mark {
      font-size: 1.75rem;
      display: block;
      margin-bottom: 0.25rem;
    }

    .footer-tagline {
      font-size: 0.875rem;
      color: rgba(255, 255, 255, 0.7);
      font-style: italic;
    }

    .footer-description {
      color: rgba(255, 255, 255, 0.8);
      font-size: 0.875rem;
      line-height: 1.6;
      margin-bottom: 1.5rem;
    }

    .footer-badges {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .badge-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.75rem;
      font-weight: 600;
      color: var(--color-accent);
      background: rgba(201, 162, 75, 0.1);
      padding: 0.5rem 0.75rem;
      border-radius: 20px;
    }

    .footer-heading {
      font-family: var(--font-heading);
      font-size: 1rem;
      font-weight: 700;
      color: var(--color-accent);
      text-transform: uppercase;
      letter-spacing: 0.05em;
      margin-bottom: 1rem;
    }

    .footer-links {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 0.5rem;
    }

    .footer-links a {
      color: rgba(255, 255, 255, 0.8);
      font-size: 0.875rem;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .footer-links a:hover {
      color: var(--color-accent);
    }

    .footer-link-cta a {
      color: var(--color-accent);
      font-weight: 600;
    }

    .footer-contact {
      list-style: none;
      margin: 0 0 1.5rem;
      padding: 0;
    }

    .footer-contact li {
      margin-bottom: 1rem;
    }

    .footer-contact-item,
    .footer-address,
    .footer-hours {
      display: flex;
      align-items: flex-start;
      gap: 0.75rem;
      color: rgba(255, 255, 255, 0.8);
      font-size: 0.875rem;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .footer-contact-item:hover {
      color: var(--color-accent);
    }

    .btn-footer {
      width: 100%;
      background: var(--color-accent);
      border-color: var(--color-accent);
    }

    .btn-footer:hover {
      background: var(--color-secondary);
      border-color: var(--color-secondary);
    }

    /* Entity Block */
    .footer-entity {
      background: rgba(255, 255, 255, 0.05);
      padding: 2rem 0;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-entity p {
      color: rgba(255, 255, 255, 0.7);
      font-size: 0.875rem;
      line-height: 1.6;
      margin: 0;
    }

    .footer-entity a {
      color: var(--color-accent);
      text-decoration: underline;
    }

    .footer-entity a:hover {
      color: var(--color-secondary);
    }

    /* Footer Legal Row (v6.1 compliance) */
    .footer-legal-row {
      background: rgba(0, 0, 0, 0.2);
      padding: 1.5rem 0;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-legal-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 0.5rem 1rem;
      list-style: none;
      margin: 0;
      padding: 0;
      font-size: 0.75rem;
    }

    .footer-legal-links a {
      color: rgba(255, 255, 255, 0.6);
      text-decoration: none;
      transition: color 0.2s ease;
    }

    .footer-legal-links a:hover {
      color: #fff;
      text-decoration: underline;
    }

    .footer-legal-divider {
      color: rgba(255, 255, 255, 0.3);
    }

    @media (max-width: 767px) {
      .footer-legal-divider {
        display: none;
      }
      .footer-legal-links {
        gap: 0.5rem 1.5rem;
      }
    }

    /* Footer Bottom Bar */
    .footer-bottom-bar {
      background: rgba(0, 0, 0, 0.3);
      padding: 1.5rem 0;
      text-align: center;
    }

    .footer-bottom-bar .container {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }

    .footer-copyright,
    .footer-credit {
      color: rgba(255, 255, 255, 0.5);
      font-size: 0.75rem;
      margin: 0;
    }

    .footer-credit a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: underline;
    }

    .footer-credit a:hover {
      color: #fff;
    }

    /* Back to Top */
    .back-to-top {
      position: fixed;
      bottom: 90px;
      right: 1.5rem;
      width: 48px;
      height: 48px;
      background: var(--color-accent);
      color: #fff;
      border: none;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      opacity: 0;
      visibility: hidden;
      transform: translateY(20px);
      transition: all 0.3s ease;
      z-index: 900;
    }

    .back-to-top.visible {
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }

    .back-to-top:hover {
      background: var(--color-secondary);
      transform: translateY(-4px);
    }

    /* Mobile Sticky CTA Bar */
    .mobile-cta-bar {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      display: flex;
      background: var(--color-primary);
      box-shadow: 0 -2px 20px rgba(0,0,0,0.3);
      z-index: 900;
      padding: 0.75rem 1rem;
      gap: 0.75rem;
    }

    .mobile-cta-btn {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.875rem 1rem;
      font-family: var(--font-heading);
      font-size: 0.875rem;
      font-weight: 700;
      text-transform: uppercase;
      text-decoration: none;
      border-radius: 8px;
      transition: all 0.2s ease;
    }

    .mobile-cta-call {
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .mobile-cta-call:hover {
      background: rgba(255, 255, 255, 0.15);
    }

    .mobile-cta-book {
      background: var(--color-accent);
      color: var(--color-primary);
      border: 1px solid var(--color-accent);
    }

    .mobile-cta-book:hover {
      background: var(--color-secondary);
      border-color: var(--color-secondary);
    }

    @media (min-width: 768px) {
      .mobile-cta-bar {
        display: none;
      }

      .site-footer {
        padding-bottom: 0;
      }

      .back-to-top {
        bottom: 1.5rem;
      }

      .footer-grid {
        grid-template-columns: 1.5fr 1fr 1fr 1.25fr;
        gap: 3rem;
      }

      .footer-bottom-bar .container {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
      }
    }

    /* Focus-visible outline (accessibility) */
    :focus-visible {
      outline: 2px solid var(--color-accent);
      outline-offset: 2px;
    }
  </style>

  <!-- JSON-LD LocalBusiness Schema (homepage only) -->
  <?php if (!isset($currentPage) || $currentPage === 'home'): ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HairSalon",
    "@id": "<?php echo $siteUrl; ?>/#organization",
    "name": "<?php echo htmlspecialchars($siteName); ?>",
    "url": "<?php echo $siteUrl; ?>",
    "telephone": "<?php echo htmlspecialchars($phone); ?>",
    "email": "<?php echo htmlspecialchars($email); ?>",
    "description": "<?php echo htmlspecialchars($description); ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo htmlspecialchars($address['street']); ?>",
      "addressLocality": "<?php echo htmlspecialchars($address['city']); ?>",
      "addressRegion": "<?php echo htmlspecialchars($address['state']); ?>",
      "postalCode": "<?php echo htmlspecialchars($address['zip']); ?>",
      "addressCountry": "US"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": <?php echo $geo['lat']; ?>,
      "longitude": <?php echo $geo['lng']; ?>
    },
    "hasMap": "<?php echo htmlspecialchars($gbpProfileUrl); ?>",
    "openingHoursSpecification": [
      {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        "opens": "09:00",
        "closes": "18:00"
      }
    ],
    "image": "<?php echo htmlspecialchars($ogImage); ?>",
    "priceRange": "$$",
    "areaServed": {
      "@type": "City",
      "name": "<?php echo htmlspecialchars($address['city']); ?>",
      "containedInPlace": {
        "@type": "State",
        "name": "<?php echo htmlspecialchars($address['state']); ?>"
      }
    }
  }
  </script>
  <?php endif; ?>

  <!-- Google Analytics (placeholder — replace with actual ID post-launch) -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $googleAnalyticsId; ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo $googleAnalyticsId; ?>');
  </script> -->
</head>
