<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* About Page                                                         */
/* ------------------------------------------------------------------ */

$currentPage = 'about';

$pageTitle = 'About Us | Louisville Hair Salon & Barbershop | ' . $siteName;
$pageDescription = 'Meet the stylists and barbers behind Blown Away Salon and Bon Air Barbershop in Louisville, KY. Over ' . $yearsInBusiness . ' years of expert cuts, color, and grooming on Poplar Level Road.';
$canonicalUrl = $siteUrl . '/about/';
$ogImage = $siteUrl . '/assets/images/salon-interior.jpg';
$cssVersion = '2';

/* BreadcrumbList schema */
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type' => 'ListItem',
            'position' => 1,
            'name' => 'Home',
            'item' => $siteUrl . '/'
        ],
        [
            '@type' => 'ListItem',
            'position' => 2,
            'name' => 'About',
            'item' => $siteUrl . '/about/'
        ]
    ]
];

$schemaMarkup = '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     ABOUT PAGE
     ================================================================ */

  .about-hero {
    display: block;
    min-height: 50vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: center;
    background:
      linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.94) 0%, rgba(var(--color-primary-rgb), 0.86) 100%),
      linear-gradient(to right, rgba(176,141,87,0.18) 0%, rgba(201,162,75,0.14) 100%);
    position: relative;
  }
  .about-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
  }
  .about-hero .container { position: relative; z-index: 2; }
  .about-hero h1 {
    color: var(--color-white);
    font-size: var(--fs-h1);
    line-height: 1.1;
    margin-bottom: var(--space-4);
  }
  .about-hero .text-accent { color: var(--color-accent); }
  .about-hero .hero-answer {
    color: rgba(var(--color-white-rgb), 0.92);
    font-size: var(--font-size-lg);
    line-height: 1.7;
    max-width: 50rem;
    margin: 0 auto;
  }

  .story-section {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: var(--space-12);
    align-items: center;
  }
  .story-content h2 {
    font-size: var(--fs-h2);
    color: var(--color-primary);
    margin-bottom: var(--space-4);
  }
  .story-content .text-accent { color: var(--color-secondary); }
  .story-content .answer-block {
    font-size: var(--font-size-lg);
    color: var(--color-text);
    line-height: 1.75;
    margin-bottom: var(--space-6);
  }
  .story-content p {
    font-size: var(--font-size-base);
    color: var(--color-gray);
    line-height: 1.75;
    margin-bottom: var(--space-4);
  }
  .story-image {
    position: relative;
  }
  .story-image img {
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-lg);
    width: 100%;
  }

  .values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: var(--space-8);
  }
  .value-card {
    text-align: center;
    padding: var(--space-6);
    background: var(--color-light);
    border-radius: var(--radius-lg);
  }
  .value-icon {
    width: 56px;
    height: 56px;
    border-radius: 50%;
    background: rgba(var(--color-secondary-rgb), 0.15);
    color: var(--color-secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto var(--space-4);
  }
  .value-card h3 {
    font-size: var(--font-size-lg);
    color: var(--color-primary);
    margin-bottom: var(--space-2);
  }
  .value-card p {
    font-size: var(--font-size-sm);
    color: var(--color-gray);
    line-height: 1.7;
    margin: 0;
  }

  .timeline {
    max-width: 800px;
    margin: 0 auto;
  }
  .timeline-item {
    display: flex;
    gap: var(--space-6);
    margin-bottom: var(--space-8);
    position: relative;
  }
  .timeline-item::before {
    content: '';
    position: absolute;
    left: 40px;
    top: 48px;
    bottom: -32px;
    width: 2px;
    background: rgba(var(--color-secondary-rgb), 0.3);
  }
  .timeline-item:last-child::before {
    display: none;
  }
  .timeline-year {
    flex-shrink: 0;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: var(--color-secondary);
    color: var(--color-white);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: var(--font-heading);
    font-weight: 800;
    font-size: var(--font-size-xl);
  }
  .timeline-content h3 {
    font-size: var(--font-size-lg);
    color: var(--color-primary);
    margin-bottom: var(--space-2);
  }
  .timeline-content p {
    font-size: var(--font-size-sm);
    color: var(--color-gray);
    line-height: 1.7;
    margin: 0;
  }

  @media (max-width: 900px) {
    .story-section {
      grid-template-columns: 1fr;
      gap: var(--space-8);
    }
    .values-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<?php
echo $schemaMarkup;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ============================ HERO ============================ -->
<section class="about-hero" aria-label="About Blown Away Salon">
  <div class="container">
    <h1>Louisville's Salon &amp; Barbershop for <span class="text-accent">Hair That Turns Heads</span></h1>
    <p class="hero-answer">
      Blown Away Salon and Bon Air Barbershop bring together Louisville's most experienced hair colorists, stylists, and barbers under one Poplar Level Road roof — where traditional barbering craft meets modern salon technique, and every chair is built around you.
    </p>
  </div>
</section>

<!-- ============================ STORY ============================ -->
<section class="section" aria-label="Our story">
  <div class="container">
    <div class="story-section">
      <div class="story-content">
        <h2>What makes Blown Away Salon and Bon Air Barbershop <span class="text-accent">different</span> in Louisville?</h2>
        <p class="answer-block">
          Blown Away Salon and Bon Air Barbershop stand out in Louisville by housing both a full-service salon and a precision barbershop in one location, employing stylists and barbers trained in the latest color techniques and classic cutting methods, and delivering personalized consultations before every service — so families can get expert cuts, color, fades, and grooming without driving across town.
        </p>
        <p>
          Founded on the belief that great hair starts with expertise and attention to detail, we've built a Louisville team that treats every client\'s chair time like it matters. Our colorists train on the latest balayage, color correction, and toning techniques. Our barbers master skin fades, taper fades, scissor cuts, and hot-towel beard grooming. Our stylists cut for your hair texture, face shape, and styling routine — not a photo you found on Pinterest.
        </p>
        <p>
          From our Poplar Level Road studio in Louisville's Bon Air neighborhood, we serve clients from Buechel, the Highlands, Fern Creek, and beyond. Whether you\'re a regular who books the same fade every two weeks or a first-timer walking in for a consultation, you get the same level of care: a real conversation about what you want, an honest assessment of what's possible, and a plan to get you there.
        </p>
      </div>
      <div class="story-image">
        <img
          src="/assets/images/salon-interior.jpg"
          srcset="/assets/images/salon-interior-480.webp 480w, /assets/images/salon-interior-960.webp 960w"
          sizes="(max-width: 900px) 100vw, 520px"
          alt="Inside Blown Away Salon and Bon Air Barbershop on Poplar Level Road in Louisville, KY"
          width="600" height="338" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- ============================ VALUES ============================ -->
<section class="section" style="background: var(--color-light);" aria-label="Our values">
  <div class="container">
    <div class="section-title" style="text-align: center; max-width: 48rem; margin: 0 auto var(--space-12);">
      <span class="eyebrow-label">What Drives Us</span>
      <h2>How we approach <span class="text-accent">every client</span> at Blown Away Salon</h2>
    </div>

    <div class="values-grid">
      <div class="value-card">
        <div class="value-icon"><?php echo icon('award', 28); ?></div>
        <h3>Craft Over Speed</h3>
        <p>We don\'t rush a cut to squeeze in another appointment. Every service gets the time it needs to be done right.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><?php echo icon('users', 28); ?></div>
        <h3>Real Consultations</h3>
        <p>No service starts without a conversation. We ask about your hair history, routine, and the look you actually want.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><?php echo icon('shield-check', 28); ?></div>
        <h3>Hair Health First</h3>
        <p>If a color lift or treatment will damage your hair, we'll tell you — and offer a safer alternative or staged plan.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><?php echo icon('badge-check', 28); ?></div>
        <h3>Ongoing Education</h3>
        <p>Our Louisville team trains on new color techniques, cutting methods, and product lines year-round.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><?php echo icon('heart', 28); ?></div>
        <h3>Community Roots</h3>
        <p>We live, work, and raise families in Louisville. Your referral to a neighbor means more than any ad campaign.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><?php echo icon('thumbs-up', 28); ?></div>
        <h3>Honest Pricing</h3>
        <p>We quote pricing up front during consultation. No surprise add-ons when you\'re at the register.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================ TIMELINE ============================ -->
<section class="section" aria-label="Our journey">
  <div class="container">
    <div class="section-title" style="text-align: center; max-width: 48rem; margin: 0 auto var(--space-12);">
      <span class="eyebrow-label">Our Journey</span>
      <h2>How did Blown Away Salon <span class="text-accent">start</span> in Louisville?</h2>
      <p class="answer-block" style="color: var(--color-gray); margin-top: var(--space-4);">
        Blown Away Salon and Bon Air Barbershop launched in <?php echo $yearEstablished; ?> on Poplar Level Road with a simple idea: bring salon-quality color and barbershop precision under one roof, so Louisville families didn't have to choose between the two.
      </p>
    </div>

    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-year"><?php echo $yearEstablished; ?></div>
        <div class="timeline-content">
          <h3>Doors Open in Louisville</h3>
          <p>Blown Away Salon and Bon Air Barbershop open on Poplar Level Road, combining a full-service salon with a traditional barbershop to serve Louisville's Bon Air neighborhood.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year"><?php echo $yearEstablished + 2; ?></div>
        <div class="timeline-content">
          <h3>Expanding Services</h3>
          <p>Added advanced color correction training for the salon team and expanded barbershop hours to accommodate Louisville's growing demand for precision fades and beard grooming.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-year"><?php echo date('Y'); ?></div>
        <div class="timeline-content">
          <h3>Serving Louisville Today</h3>
          <p>Over <?php echo $yearsInBusiness; ?> years later, we\'re still on Poplar Level Road — same commitment to craft, real consultations, and hair that looks like you spent the day in the chair, not five minutes at a chain salon.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="cta-banner" aria-label="Visit us">
  <div class="container" style="text-align: center;">
    <h2 style="color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4);">
      Ready to see the Blown Away difference?
    </h2>
    <p style="color: rgba(var(--color-white-rgb), 0.9); max-width: 42rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg);">
      Book a consultation at our Poplar Level Road studio, or walk in — our Louisville team is ready to build your next look.
    </p>
    <div style="display: flex; flex-wrap: wrap; gap: var(--space-4); justify-content: center;">
      <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
        <?php echo icon('phone', 18); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
