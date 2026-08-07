<?php
/**
 * header.php — Site header & navigation for Blown Away Salon / Bon Air Barbershop
 *
 * Glassmorphism nav with logo, desktop menu + services dropdown, mobile hamburger menu.
 * Phase 2 — v6.2 (inline SVG icons from references/lucide-icons/)
 */
?>
<!-- Skip-to-content accessibility link -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" data-header>
  <nav class="navbar" aria-label="Main navigation">
    <div class="navbar-inner container">

      <!-- Logo -->
      <a href="/" class="navbar-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> homepage">
        <img src="/assets/images/logo-mark.jpg" alt="" class="logo-img" width="52" height="52">
        <span class="logo-mark">Blown Away</span>
        <span class="logo-text">
          <span class="logo-text__primary">Salon & Barbershop</span>
          <span class="logo-text__tagline"><?php echo htmlspecialchars($tagline); ?></span>
        </span>
      </a>

      <!-- Desktop Navigation Links -->
      <ul class="navbar-links" role="menubar">
        <li role="none">
          <a href="/" role="menuitem" <?php if (isActivePage('home')) echo 'aria-current="page"'; ?>>Home</a>
        </li>
        <li class="has-dropdown" role="none">
          <button
            type="button"
            class="navbar-link-button"
            role="menuitem"
            aria-haspopup="true"
            aria-expanded="false"
            <?php if (isActivePage('services')) echo 'aria-current="page"'; ?>
          >
            Services
            <?php echo icon('chevron-down', 16); ?>
          </button>
          <!-- Inline style="display:none" failsafe per CLAUDE.md -->
          <ul class="dropdown" role="menu" style="display:none">
            <?php foreach ($services as $service): ?>
            <li role="none">
              <a href="/services/<?php echo $service['slug']; ?>/" role="menuitem">
                <?php echo htmlspecialchars($service['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
            <li role="none" class="dropdown-all">
              <a href="/services/" role="menuitem">View All Services</a>
            </li>
          </ul>
        </li>
        <li role="none">
          <a href="/about/" role="menuitem" <?php if (isActivePage('about')) echo 'aria-current="page"'; ?>>About</a>
        </li>
        <li role="none">
          <a href="/contact/" role="menuitem" <?php if (isActivePage('contact')) echo 'aria-current="page"'; ?>>Contact</a>
        </li>
      </ul>

      <!-- Desktop CTA Group -->
      <div class="navbar-cta">
        <a href="tel:<?php echo $phoneRaw; ?>" class="navbar-phone" aria-label="Call <?php echo htmlspecialchars($phone); ?>">
          <?php echo icon('phone', 18); ?>
          <?php echo htmlspecialchars($phone); ?>
        </a>
        <a href="/contact/" class="btn-primary">Book Now</a>
      </div>

      <!-- Mobile Hamburger Toggle -->
      <button
        type="button"
        class="hamburger"
        aria-label="Open mobile menu"
        aria-expanded="false"
        aria-controls="mobile-menu"
      >
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
        <span class="hamburger-line"></span>
      </button>

    </div><!-- .navbar-inner -->
  </nav>

  <!-- Mobile Full-Screen Menu Overlay -->
  <div class="mobile-menu" id="mobile-menu" role="navigation" aria-label="Mobile navigation">
    <ul class="mobile-menu-links">
      <li><a href="/" <?php if (isActivePage('home')) echo 'aria-current="page"'; ?>>Home</a></li>
      <li>
        <span class="mobile-menu-label">Services</span>
        <ul class="mobile-submenu">
          <?php foreach ($services as $service): ?>
          <li><a href="/services/<?php echo $service['slug']; ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
          <?php endforeach; ?>
          <li><a href="/services/" class="mobile-submenu-all">View All Services</a></li>
        </ul>
      </li>
      <li><a href="/about/" <?php if (isActivePage('about')) echo 'aria-current="page"'; ?>>About</a></li>
      <li><a href="/contact/" <?php if (isActivePage('contact')) echo 'aria-current="page"'; ?>>Contact</a></li>
      <li class="mobile-menu-cta">
        <a href="tel:<?php echo $phoneRaw; ?>" class="btn-secondary">
          <?php echo icon('phone', 20); ?>
          Call Now
        </a>
        <a href="/contact/" class="btn-primary">Book Now</a>
      </li>
    </ul>
  </div>
</header>

<!-- Main Content Landmark -->
<main id="main-content">
