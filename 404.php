<?php
/**
 * 404.php — Page Not Found
 *
 * Root-level 404 (NOT a subdirectory pattern).
 * ErrorDocument 404 directive in .htaccess points here.
 *
 * NO $currentPage (not in nav).
 * NO canonical (404s shouldn't have one).
 * $noindex = true (per CLAUDE.md).
 */

// Load config
include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

// Set 404 response code
http_response_code(404);

// Page variables for head.php
$pageTitle       = 'Page Not Found | ' . $siteName;
$pageDescription = "The page you\'re looking for doesn\'t exist. Browse our Louisville salon and barbershop services or contact us for help.";
$noindex         = true;
// NO $canonicalUrl for 404 pages

// NO schema on 404 pages

http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<body>
  <!-- Skip to content link -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <main id="main-content">
    <section class="error-page">
      <div class="container">
        <div class="error-content">
          <div class="error-code" aria-hidden="true">404</div>

          <h1>This Page Doesn't Exist</h1>

          <p class="error-message">
            The page you\'re looking for may have been moved, deleted, or never existed.
            But don\'t worry—we can help you find what you need.
          </p>

          <div class="helpful-links">
            <h2>Popular Pages</h2>
            <ul>
              <li><a href="/">Homepage</a></li>
              <li><a href="/services/">Our Services</a></li>
              <li><a href="/hair-coloring/">Hair Coloring</a></li>
              <li><a href="/highlights-balayage/">Highlights & Balayage</a></li>
              <li><a href="/contact/">Contact Us</a></li>
            </ul>
          </div>

          <div class="error-ctas">
            <a href="/" class="btn-primary">Back to Homepage</a>
            <a href="tel:<?php echo $phoneRaw; ?>" class="btn-secondary">
              <svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              Call <?php echo $phone; ?>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

  <style>
    .error-page {
      min-height: 60vh;
      display: flex;
      align-items: center;
      padding: var(--space-4xl) 0;
      background: linear-gradient(135deg, var(--color-bg) 0%, var(--color-bg-alt) 100%);
    }

    .error-content {
      max-width: 600px;
      margin: 0 auto;
      text-align: center;
    }

    .error-code {
      font-size: clamp(5rem, 15vw, 10rem);
      font-family: var(--font-heading);
      font-weight: 900;
      line-height: 1;
      color: var(--color-secondary);
      opacity: 0.15;
      margin-bottom: var(--space-md);
      user-select: none;
    }

    .error-content h1 {
      font-family: var(--font-heading);
      font-size: clamp(2rem, 5vw, 3rem);
      font-weight: 700;
      color: var(--color-text);
      margin-bottom: var(--space-lg);
    }

    .error-message {
      font-size: 1.125rem;
      line-height: 1.7;
      color: var(--color-text-light);
      margin-bottom: var(--space-2xl);
    }

    .helpful-links {
      background: var(--color-bg);
      border: 1px solid var(--color-border);
      border-radius: var(--radius);
      padding: var(--space-xl);
      margin-bottom: var(--space-2xl);
      box-shadow: var(--shadow-sm);
    }

    .helpful-links h2 {
      font-family: var(--font-heading);
      font-size: 1.25rem;
      font-weight: 600;
      color: var(--color-text);
      margin-bottom: var(--space-md);
    }

    .helpful-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .helpful-links li {
      margin-bottom: var(--space-sm);
    }

    .helpful-links li:last-child {
      margin-bottom: 0;
    }

    .helpful-links a {
      display: inline-block;
      color: var(--color-secondary);
      font-weight: 500;
      text-decoration: none;
      transition: var(--transition);
      position: relative;
    }

    .helpful-links a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -2px;
      width: 0;
      height: 2px;
      background: var(--color-secondary);
      transition: var(--transition);
    }

    .helpful-links a:hover::after,
    .helpful-links a:focus::after {
      width: 100%;
    }

    .error-ctas {
      display: flex;
      gap: var(--space-md);
      justify-content: center;
      flex-wrap: wrap;
    }

    .error-ctas .btn-primary,
    .error-ctas .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: var(--space-xs);
    }

    @media (max-width: 640px) {
      .error-ctas {
        flex-direction: column;
      }

      .error-ctas .btn-primary,
      .error-ctas .btn-secondary {
        width: 100%;
        justify-content: center;
      }
    }
  </style>
</body>
</html>
