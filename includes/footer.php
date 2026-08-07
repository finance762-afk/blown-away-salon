<?php
/**
 * footer.php — Site footer for Blown Away Salon / Bon Air Barbershop
 *
 * Entity block, service/page links, contact info, legal row, dofollow credit, mobile sticky CTA bar, cookie banner.
 * Phase 2 — v6.2 (inline SVG icons, BASIC tier legal row)
 */
?>
</main><!-- #main-content -->

<footer class="site-footer">
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- Column 1: Brand & Description -->
        <div class="footer-col footer-brand">
          <div class="footer-logo">
            <img src="/assets/images/logo-mark.jpg" alt="" class="logo-img" width="44" height="44" loading="lazy">
            <span class="logo-mark">Blown Away</span>
            <span class="logo-text">Salon & Barbershop</span>
          </div>
          <p class="footer-tagline"><?php echo htmlspecialchars($tagline); ?></p>
          <p class="footer-description">
            Louisville's premier dual-concept salon and barbershop, where expert stylists and barbers deliver precision cuts, vibrant color, and personalized grooming.
          </p>
          <div class="footer-badges">
            <span class="badge"><?php echo $yearsInBusiness; ?>+ Years</span>
            <span class="badge">Licensed & Insured</span>
            <span class="badge">Free Consultations</span>
          </div>
        </div>

        <!-- Column 2: Services -->
        <div class="footer-col footer-services">
          <h3 class="footer-heading">Services</h3>
          <ul class="footer-links">
            <?php
            // Show first 4 services in footer
            $footerServices = array_slice($services, 0, 4);
            foreach ($footerServices as $service):
            ?>
            <li><a href="/services/<?php echo $service['slug']; ?>/"><?php echo htmlspecialchars($service['name']); ?></a></li>
            <?php endforeach; ?>
            <?php if (count($services) > 4): ?>
            <li><a href="/services/" class="footer-link-all">View All Services</a></li>
            <?php endif; ?>
          </ul>
        </div>

        <!-- Column 3: Quick Links -->
        <div class="footer-col footer-pages">
          <h3 class="footer-heading">Company</h3>
          <ul class="footer-links">
            <li><a href="/about/">About Us</a></li>
            <li><a href="/contact/">Contact</a></li>
            <li><a href="/services/">All Services</a></li>
            <li><a href="<?php echo htmlspecialchars($reviewRequestUrl); ?>" target="_blank" rel="noopener">Leave a Review</a></li>
          </ul>
        </div>

        <!-- Column 4: Contact Info -->
        <div class="footer-col footer-contact">
          <h3 class="footer-heading">Contact</h3>
          <ul class="footer-contact-list">
            <li>
              <a href="tel:<?php echo $phoneRaw; ?>" class="footer-contact-item">
                <?php echo icon('phone', 20); ?>
                <span><?php echo htmlspecialchars($phone); ?></span>
              </a>
            </li>
            <li>
              <a href="mailto:<?php echo $email; ?>" class="footer-contact-item">
                <?php echo icon('mail', 20); ?>
                <span><?php echo htmlspecialchars($email); ?></span>
              </a>
            </li>
            <li>
              <a href="<?php echo htmlspecialchars($directionsUrl); ?>" target="_blank" rel="noopener" class="footer-contact-item">
                <?php echo icon('map-pin', 20); ?>
                <span>
                  <?php echo htmlspecialchars($address['street']); ?><br>
                  <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> <?php echo htmlspecialchars($address['zip']); ?>
                </span>
              </a>
            </li>
            <li>
              <div class="footer-contact-item">
                <?php echo icon('clock', 20); ?>
                <span>
                  Mon-Sat: 9:00 AM - 6:00 PM<br>
                  Sun: Closed
                </span>
              </div>
            </li>
          </ul>
          <a href="/contact/" class="btn-primary footer-cta">Book Your Appointment</a>
        </div>

      </div><!-- .footer-grid -->

      <!-- AEO Entity Block (consistent NAP for schema corroboration) -->
      <div class="footer-entity" itemscope itemtype="https://schema.org/HairSalon">
        <meta itemprop="name" content="<?php echo htmlspecialchars($siteName); ?>">
        <meta itemprop="url" content="<?php echo $siteUrl; ?>">
        <meta itemprop="telephone" content="<?php echo $phoneRaw; ?>">
        <p class="footer-entity-text">
          <strong><?php echo htmlspecialchars($siteName); ?></strong> is a licensed hair salon and barbershop serving <?php echo htmlspecialchars($address['city']); ?>, <?php echo htmlspecialchars($address['state']); ?> and the surrounding area. With over <?php echo $yearsInBusiness; ?> years of experience, we specialize in <?php echo implode(', ', array_slice(array_column($services, 'name'), 0, 3)); ?>, and more. Call <?php echo htmlspecialchars($phone); ?> to schedule your consultation.
        </p>
      </div>

    </div><!-- .container -->
  </div><!-- .footer-top -->

  <!-- Footer Bottom Bar -->
  <div class="footer-bottom">
    <div class="container">

      <!-- Legal Utility Row (All tiers require all 4 compliance pages per CLAUDE.md v6.1) -->
      <nav class="footer-legal-links" aria-label="Legal">
        <a href="/privacy-policy/">Privacy Policy</a>
        <span class="footer-legal-divider">|</span>
        <a href="/terms/">Terms of Service</a>
        <span class="footer-legal-divider">|</span>
        <a href="/cookie-policy/">Cookie Policy</a>
        <span class="footer-legal-divider">|</span>
        <a href="/accessibility/">Accessibility</a>
        <span class="footer-legal-divider">|</span>
        <a href="/sitemap.xml">Sitemap</a>
      </nav>

      <!-- Copyright & Dofollow Credit (REQUIRED) -->
      <div class="footer-copyright">
        <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All rights reserved.</p>
        <p>
          <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">Web Design & Hosting by Page One Insights, LLC</a>
        </p>
      </div>

      <!-- Back-to-top Button -->
      <button type="button" class="back-to-top" id="back-to-top" aria-label="Back to top">
        <?php echo icon('arrow-up', 24); ?>
      </button>

    </div><!-- .container -->
  </div><!-- .footer-bottom -->
</footer>

<!-- Mobile Sticky CTA Bar (below 768px) -->
<div class="mobile-cta-bar">
  <a href="tel:<?php echo $phoneRaw; ?>" class="mobile-cta-btn mobile-cta-phone">
    <?php echo icon('phone', 20); ?>
    <span>Call Now</span>
  </a>
  <a href="/contact/" class="mobile-cta-btn mobile-cta-estimate">
    <?php echo icon('calendar', 20); ?>
    <span>Book Now</span>
  </a>
</div>

<!-- Cookie Banner (v6.1 light dismissible pattern) -->
<div class="cookie-banner" id="cookie-banner" role="region" aria-label="Cookie notice">
  <p class="cookie-banner__text">
    We use cookies to improve your experience and analyze site usage. By continuing, you agree to our use of cookies. <a href="/cookie-policy/">Learn more</a>.
  </p>
  <button type="button" class="cookie-banner__dismiss" id="cookie-banner-dismiss" aria-label="Dismiss cookie notice">Got it</button>
</div>

<!-- JavaScript (defer for non-blocking load) -->
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

<!-- Back-to-top inline script -->
<script>
(function() {
  var btn = document.getElementById('back-to-top');
  if (!btn) return;

  function toggleBackToTop() {
    if (window.scrollY > 600) {
      btn.classList.add('is-visible');
    } else {
      btn.classList.remove('is-visible');
    }
  }

  window.addEventListener('scroll', toggleBackToTop, { passive: true });

  btn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();
</script>

</body>
</html>
