<?php
/**
 * /thank-you/index.php — Form Submission Thank You Page
 *
 * Subdirectory pattern per CLAUDE.md.
 * Shown after successful contact form submission via Formsubmit.co redirect.
 *
 * NO $currentPage (not in nav).
 * $noindex = true (per CLAUDE.md — don\'t index thank-you pages).
 * Canonical: $siteUrl . '/thank-you/'
 * BreadcrumbList schema only.
 */

// Load config
include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

// Page variables for head.php
$pageTitle       = 'Thank You | ' . $siteName;
$pageDescription = "Thanks for contacting Blown Away Salon. We\'ll be in touch soon.";
$canonicalUrl    = $siteUrl . '/thank-you/';
$noindex         = true;

// BreadcrumbList schema
$schemaMarkup = [
    '@context' => 'https://schema.org',
    '@graph'   => [
        [
            '@type'           => 'BreadcrumbList',
            '@id'             => $canonicalUrl . '#breadcrumb',
            'itemListElement' => [
                [
                    '@type'  => 'ListItem',
                    'position' => 1,
                    'name'   => 'Home',
                    'item'   => $siteUrl . '/',
                ],
                [
                    '@type'    => 'ListItem',
                    'position' => 2,
                    'name'     => 'Thank You',
                ],
            ],
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php'; ?>

<body>
  <!-- Skip to content link -->
  <a href="#main-content" class="skip-link">Skip to main content</a>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

  <main id="main-content">
    <section class="thank-you-page">
      <div class="container">
        <div class="thank-you-content">
          <!-- Success Icon -->
          <div class="success-icon" aria-hidden="true">
            <svg width="80" height="80" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
              <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
          </div>

          <h1>We Received Your Message</h1>

          <p class="confirmation-message">
            Thanks for reaching out! We\'ll review your request and get back to you within 24 hours.
            Most inquiries receive a response the same day.
          </p>

          <!-- What Happens Next -->
          <div class="next-steps">
            <h2>What Happens Next</h2>
            <ul>
              <li>
                <svg aria-hidden="true" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                </svg>
                We\'ll call or email you within 24 hours to discuss your service needs
              </li>
              <li>
                <svg aria-hidden="true" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                  <line x1="16" y1="2" x2="16" y2="6"/>
                  <line x1="8" y1="2" x2="8" y2="6"/>
                  <line x1="3" y1="10" x2="21" y2="10"/>
                </svg>
                We\'ll schedule your appointment at a time that works for you
              </li>
              <li>
                <svg aria-hidden="true" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                  <circle cx="12" cy="7" r="4"/>
                </svg>
                You\'ll meet with our experienced stylists and barbers
              </li>
            </ul>
          </div>

          <!-- Urgent Contact -->
          <div class="urgent-contact">
            <p><strong>Need immediate assistance?</strong></p>
            <a href="tel:<?php echo $phoneRaw; ?>" class="phone-link">
              <svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              Call us now at <?php echo $phone; ?>
            </a>
          </div>

          <!-- While You Wait -->
          <div class="while-you-wait">
            <h2>While You Wait</h2>
            <p>Browse our full range of salon and barbershop services:</p>
            <div class="service-links">
              <a href="/hair-coloring/">Hair Coloring</a>
              <a href="/highlights-balayage/">Highlights & Balayage</a>
              <a href="/haircuts-styling/">Haircuts & Styling</a>
              <a href="/mens-cuts-fades/">Men's Cuts & Fades</a>
              <a href="/beard-trims/">Beard Trims</a>
              <a href="/waxing/">Waxing</a>
            </div>
          </div>

          <!-- Review Request -->
          <div class="review-request">
            <h2>Love Our Work?</h2>
            <p>If you've visited us before, we'd appreciate your feedback:</p>
            <a href="<?php echo $reviewRequestUrl; ?>" class="btn-secondary" target="_blank" rel="noopener noreferrer">
              <svg aria-hidden="true" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
              </svg>
              Leave Us a Google Review
            </a>
          </div>

          <!-- Back to Homepage -->
          <div class="return-cta">
            <a href="/" class="btn-primary">Back to Homepage</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

  <style>
    .thank-you-page {
      padding: var(--space-4xl) 0;
      background: linear-gradient(135deg, var(--color-bg) 0%, var(--color-bg-alt) 100%);
    }

    .thank-you-content {
      max-width: 700px;
      margin: 0 auto;
      text-align: center;
    }

    .success-icon {
      width: 80px;
      height: 80px;
      margin: 0 auto var(--space-xl);
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(var(--color-secondary-rgb), 0.1);
      border-radius: 50%;
      color: var(--color-secondary);
    }

    .thank-you-content h1 {
      font-family: var(--font-heading);
      font-size: clamp(2rem, 5vw, 2.75rem);
      font-weight: 700;
      color: var(--color-text);
      margin-bottom: var(--space-lg);
    }

    .confirmation-message {
      font-size: 1.125rem;
      line-height: 1.7;
      color: var(--color-text-light);
      margin-bottom: var(--space-2xl);
    }

    .next-steps,
    .while-you-wait,
    .review-request {
      background: var(--color-bg);
      border: 1px solid var(--color-border);
      border-radius: var(--radius);
      padding: var(--space-xl);
      margin-bottom: var(--space-xl);
      box-shadow: var(--shadow-sm);
      text-align: left;
    }

    .next-steps h2,
    .while-you-wait h2,
    .review-request h2 {
      font-family: var(--font-heading);
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--color-text);
      margin-bottom: var(--space-md);
      text-align: center;
    }

    .next-steps ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .next-steps li {
      display: flex;
      align-items: flex-start;
      gap: var(--space-md);
      margin-bottom: var(--space-lg);
      padding-left: var(--space-xs);
    }

    .next-steps li:last-child {
      margin-bottom: 0;
    }

    .next-steps li svg {
      flex-shrink: 0;
      margin-top: 2px;
      color: var(--color-secondary);
    }

    .urgent-contact {
      background: rgba(var(--color-secondary-rgb), 0.08);
      border: 2px solid var(--color-secondary);
      border-radius: var(--radius);
      padding: var(--space-lg);
      margin-bottom: var(--space-xl);
    }

    .urgent-contact p {
      margin-bottom: var(--space-sm);
      color: var(--color-text);
    }

    .phone-link {
      display: inline-flex;
      align-items: center;
      gap: var(--space-xs);
      font-size: 1.25rem;
      font-weight: 600;
      color: var(--color-secondary);
      text-decoration: none;
      transition: var(--transition);
    }

    .phone-link:hover,
    .phone-link:focus {
      color: var(--color-primary);
      transform: translateX(4px);
    }

    .while-you-wait p {
      text-align: center;
      margin-bottom: var(--space-md);
      color: var(--color-text-light);
    }

    .service-links {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: var(--space-sm);
      margin-top: var(--space-md);
    }

    .service-links a {
      display: block;
      padding: var(--space-sm) var(--space-md);
      background: rgba(var(--color-secondary-rgb), 0.08);
      border: 1px solid var(--color-border);
      border-radius: var(--radius-sm);
      color: var(--color-secondary);
      font-weight: 500;
      text-decoration: none;
      text-align: center;
      transition: var(--transition);
    }

    .service-links a:hover,
    .service-links a:focus {
      background: rgba(var(--color-secondary-rgb), 0.15);
      border-color: var(--color-secondary);
      transform: translateY(-2px);
      box-shadow: var(--shadow-sm);
    }

    .review-request {
      text-align: center;
    }

    .review-request p {
      margin-bottom: var(--space-md);
      color: var(--color-text-light);
    }

    .review-request .btn-secondary {
      display: inline-flex;
      align-items: center;
      gap: var(--space-xs);
    }

    .return-cta {
      margin-top: var(--space-2xl);
    }

    @media (max-width: 640px) {
      .service-links {
        grid-template-columns: 1fr;
      }
    }
  </style>
</body>
</html>
