/* ============================================
   Page One Insights — Effects
   Visual effects library — Phase 2
   ============================================ */

(function() {
  'use strict';

  /* ---------- COOKIE BANNER (v6.1 light dismissible pattern) ---------- */
  (function() {
    var banner = document.getElementById('cookie-banner');
    var dismissBtn = document.getElementById('cookie-banner-dismiss');
    if (!banner || !dismissBtn) return;

    var storageKey = 'cookieBannerDismissed_v1';
    var dismissed = false;
    try {
      dismissed = localStorage.getItem(storageKey) === 'true';
    } catch (e) {
      // localStorage blocked or unavailable — show banner
    }

    if (!dismissed) {
      // Show banner after 1 second delay
      setTimeout(function() {
        banner.classList.add('is-visible');
      }, 1000);
    }

    dismissBtn.addEventListener('click', function() {
      banner.classList.remove('is-visible');
      try {
        localStorage.setItem(storageKey, 'true');
      } catch (e) {
        // localStorage blocked — banner will show again on next visit
      }
    });
  })();

  /* ---------- NAVBAR SCROLL SHADOW ---------- */
  (function() {
    var header = document.querySelector('.site-header');
    if (!header) return;

    function updateHeader() {
      if (window.scrollY > 60) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }

    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader(); // Run on load
  })();

})();
