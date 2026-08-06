<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Beard Trims & Grooming Service Page                                */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle = 'Beard Trims & Grooming in Louisville, KY | Hot Towel Service | ' . $siteName;
$metaDescription = 'Expert beard trimming, shaping, and hot-towel grooming at Bon Air Barbershop in Louisville — precision line-ups and beard maintenance. Book at ' . $phone . '.';
$canonicalUrl = $siteUrl . '/services/beard-trims/';
$ogImage = $siteUrl . '/assets/images/service-beard.jpg';
$cssVersion = '2';

/* Service FAQs (AEO — FAQPage schema is AI comprehension aid; never describe as rich-result feature) */
$faqs = [
    [
        'q' => 'How much does a beard trim cost in Louisville?',
        'a' => 'Beard trims at Bon Air Barbershop run $10–$20 as a standalone service, or $10–$15 when added to a haircut. A detailed beard shaping with hot-towel treatment and line-up is $15–$20. Quick edge clean-ups are $10. We quote your exact price when you check in based on beard length and complexity.',
    ],
    [
        'q' => 'How long does a beard trim take?',
        'a' => 'A standalone beard trim at Bon Air Barbershop takes 15–25 minutes. If you're adding it to a haircut, plan for an extra 10–15 minutes. A full beard shaping with hot-towel prep, trim, line-up, and finishing balm runs 20–30 minutes. We block enough time so your grooming is never rushed.',
    ],
    [
        'q' => 'What's included in a beard trim service?',
        'a' => 'A beard trim at Bon Air Barbershop includes a consultation on your desired length and shape, hot-towel prep to soften the beard, scissor and trimmer work to even length and create clean lines, cheek and neck line-ups, and finishing oil or balm to condition and style. If you're growing your beard or unsure about shape, we walk through options and recommend a starting point.',
    ],
    [
        'q' => 'How often should I get my beard trimmed?',
        'a' => 'Most Louisville clients get a beard trim every 2–4 weeks to maintain shape and prevent scraggly growth. Short, close-cropped beards need trimming every 1–2 weeks. Medium-length beards can go 2–3 weeks. Long beards benefit from monthly shaping to remove split ends and keep lines clean. Your barber at Bon Air Barbershop will build a schedule based on your growth rate and desired look.',
    ],
];

$faqSchema = generateFAQSchema($faqs);

/* Service schema */
$serviceData = [
    'name' => 'Beard Trims & Grooming',
    'slug' => 'beard-trims',
    'description' => 'Precision beard trimming, shaping, line-ups, and hot-towel grooming services at Bon Air Barbershop in Louisville, Kentucky.',
];
$serviceSchema = generateServiceSchema($serviceData);

/* BreadcrumbList */
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
            'name' => 'Services',
            'item' => $siteUrl . '/services/'
        ],
        [
            '@type' => 'ListItem',
            'position' => 3,
            'name' => 'Beard Trims & Grooming',
            'item' => $siteUrl . '/services/beard-trims/'
        ]
    ]
];

$schemaMarkup = $serviceSchema . "\n" . $faqSchema . "\n" . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     BEARD TRIMS & GROOMING SERVICE PAGE
     ================================================================ */

  .service-hero {
    display: block;
    min-height: 60vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: left;
    background:
      linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.75) 100%),
      url('/assets/images/service-beard.jpg');
    background-size: cover;
    background-position: center;
    position: relative;
  }
  .service-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
    pointer-events: none;
  }
  .service-hero .container { position: relative; z-index: 2; }
  .service-hero .breadcrumb { margin-bottom: var(--space-4); }
  .breadcrumb {
    display: flex;
    gap: var(--space-2);
    font-size: var(--font-size-sm);
    color: rgba(var(--color-white-rgb), 0.8);
  }
  .breadcrumb a { color: rgba(var(--color-white-rgb), 0.8); text-decoration: none; transition: color 0.2s; }
  .breadcrumb a:hover { color: var(--color-accent); }
  .breadcrumb-sep { color: rgba(var(--color-white-rgb), 0.5); }

  .service-hero h1 {
    color: var(--color-white);
    font-size: var(--fs-h1);
    line-height: 1.1;
    margin-bottom: var(--space-4);
    max-width: 48rem;
  }
  .service-hero .hero-answer {
    color: rgba(var(--color-white-rgb), 0.92);
    font-size: var(--font-size-lg);
    line-height: 1.7;
    max-width: 46rem;
    margin-bottom: var(--space-8);
  }
  .service-hero .hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-4);
  }

  .service-content {
    display: grid;
    grid-template-columns: 3fr 2fr;
    gap: var(--space-12);
    align-items: flex-start;
  }
  .service-detail h2 {
    font-size: var(--fs-h2);
    color: var(--color-primary);
    margin-bottom: var(--space-4);
  }
  .service-detail .text-accent { color: var(--color-secondary); }
  .service-detail .answer-block {
    font-size: var(--font-size-lg);
    color: var(--color-text);
    line-height: 1.75;
    margin-bottom: var(--space-6);
  }
  .service-detail p {
    font-size: var(--font-size-base);
    color: var(--color-gray);
    line-height: 1.75;
    margin-bottom: var(--space-4);
  }

  .service-sidebar {
    position: sticky;
    top: calc(var(--nav-height) + var(--space-4));
  }
  .sidebar-card {
    background: var(--color-light);
    border-radius: var(--radius-lg);
    padding: var(--space-6);
    box-shadow: var(--shadow-sm);
    margin-bottom: var(--space-6);
  }
  .sidebar-card h3 {
    font-size: var(--font-size-lg);
    color: var(--color-primary);
    margin-bottom: var(--space-4);
  }
  .sidebar-card ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .sidebar-card li {
    display: flex;
    align-items: flex-start;
    gap: var(--space-2);
    margin-bottom: var(--space-3);
    font-size: var(--font-size-sm);
    color: var(--color-gray);
  }
  .sidebar-card li svg {
    color: var(--color-secondary);
    flex-shrink: 0;
    margin-top: 2px;
  }

  .process-steps {
    display: grid;
    gap: var(--space-5);
    margin: var(--space-8) 0;
  }
  .process-step {
    display: flex;
    gap: var(--space-4);
    align-items: flex-start;
  }
  .process-step__num {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: var(--color-secondary);
    color: var(--color-white);
    font-family: var(--font-heading);
    font-weight: 800;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .process-step h4 {
    font-size: var(--font-size-base);
    color: var(--color-primary);
    margin-bottom: var(--space-1);
  }
  .process-step p {
    font-size: var(--font-size-sm);
    color: var(--color-gray);
    margin: 0;
  }

  .faq-grid {
    display: grid;
    gap: var(--space-6);
  }
  .faq-item {
    background: var(--color-light);
    padding: var(--space-6);
    border-radius: var(--radius-lg);
  }
  .faq-question {
    display: flex;
    gap: var(--space-3);
    align-items: flex-start;
  }
  .faq-question svg {
    color: var(--color-secondary);
    flex-shrink: 0;
    margin-top: 2px;
  }
  .faq-question h3 {
    font-size: var(--font-size-base);
    color: var(--color-primary);
    margin: 0;
  }
  .faq-answer {
    color: var(--color-gray);
    font-size: var(--font-size-sm);
    line-height: 1.7;
    margin: var(--space-3) 0 0;
  }

  @media (max-width: 900px) {
    .service-content {
      grid-template-columns: 1fr;
    }
    .service-sidebar {
      position: static;
    }
  }
</style>

<?php
echo $schemaMarkup;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ============================ HERO ============================ -->
<section class="service-hero" aria-label="Beard trims and grooming service">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Beard Trims & Grooming</span>
    </nav>
    <h1>Beard Trims & Grooming in Louisville, KY</h1>
    <p class="hero-answer">
      Bon Air Barbershop delivers precision beard trimming and hot-towel grooming for Louisville clients — clean lines, even length, and conditioning treatments that keep your beard looking intentional, not scraggly. Our barbers assess your face shape, growth pattern, and desired style, then trim, shape, and line up your beard with clippers, scissors, and straight-edge work. Whether you're maintaining a corporate look or dialing in a full beard, we deliver results that last 2–4 weeks between visits.
    </p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Book Your Trim</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
        <?php echo icon('phone', 18); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<!-- ============================ SERVICE DETAIL ============================ -->
<section class="section" aria-label="Beard trims and grooming details">
  <div class="container">
    <div class="service-content">

      <div class="service-detail">
        <h2>What does a <span class="text-accent">beard trim</span> include at Bon Air Barbershop in Louisville?</h2>
        <p class="answer-block">
          A beard trim at Bon Air Barbershop includes a consultation on your desired length and shape, hot-towel prep to soften hair and open pores, trimmer and scissor work to even length and remove bulk, cheek and neck line detailing for clean edges, and finishing oil or balm to condition and style. We assess your beard's density, growth direction, and face shape to create a look that enhances your features instead of hiding them.
        </p>
        <p>
          Our Louisville barbers use Andis trimmers with adjustable guards for precise length control, plus scissors for detail work on mustaches and sideburn transitions. A hot towel softens coarse beard hair, making trimming smoother and reducing irritation. If you're growing your beard or unsure about shape, we start conservative and adjust from there — it's easier to take more off than to grow it back.
        </p>
        <p>
          Beard trims are standalone services or add-ons to a haircut. Most clients book a trim every 2–4 weeks to maintain clean lines. If your beard is patchy or uneven, we can help you grow it to full coverage before committing to a final shape.
        </p>

        <h2>How often should I get my <span class="text-accent">beard trimmed</span> to keep it looking sharp?</h2>
        <p class="answer-block">
          Short, close-cropped beards need trimming every 1–2 weeks to stay sharp. Medium-length beards can go 2–3 weeks before looking shaggy. Long beards benefit from monthly trims to remove split ends and keep neck and cheek lines clean. Your beard's growth rate, coarseness, and the style you're maintaining determine your schedule. Most Louisville clients at Bon Air Barbershop come in every 2–3 weeks for a trim and line-up.
        </p>
        <p>
          To extend the life of your trim between visits, wash your beard 2–3 times a week with a dedicated beard shampoo, condition daily, and apply beard oil or balm to soften coarse hair. Louisville's humidity can make beards frizz — a light oil keeps it smooth and shaped. Avoid over-trimming at home; cheek and neck lines are easy to mess up without a mirror and experience.
        </p>

        <h2>What is the difference between a <span class="text-accent">beard trim and a beard shaping</span>?</h2>
        <p class="answer-block">
          A beard trim evens the length and cleans up edges — maintenance work to keep your existing style looking neat. A beard shaping is a more involved service that defines a new shape, adjusts cheek and neck lines, sculpts the jawline, and balances proportions to match your face. At Bon Air Barbershop, beard shaping takes 20–30 minutes and is recommended when you're changing your beard style or growing it out for the first time. Once shaped, you maintain it with regular trims every 2–4 weeks.
        </p>

        <div class="process-steps">
          <h3>The Bon Air Barbershop Beard Grooming Process</h3>
          <div class="process-step">
            <span class="process-step__num">1</span>
            <div>
              <h4>Consultation & Assessment</h4>
              <p>We discuss your desired length, shape, and face-framing goals, then assess your beard's texture and growth pattern.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">2</span>
            <div>
              <h4>Hot-Towel Prep</h4>
              <p>A warm towel softens your beard, opens pores, and makes trimming smoother with less irritation.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">3</span>
            <div>
              <h4>Trimming & Shaping</h4>
              <p>We use trimmers and scissors to even length, remove bulk, and create clean cheek and neck lines.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">4</span>
            <div>
              <h4>Line-Up & Finish</h4>
              <p>Your edges are detailed, mustache trimmed if needed, and beard oil or balm applied for conditioning and hold.</p>
            </div>
          </div>
        </div>

        <p><strong>Last Updated:</strong> <?php echo date('F Y'); ?></p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-card">
          <h3>What's Included</h3>
          <ul>
            <li><?php echo icon('check-circle', 18); ?> <span>Beard shape consultation</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Hot-towel softening treatment</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Precision trimmer & scissor work</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Cheek & neck line detailing</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Finishing beard oil or balm</span></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3>Book Your Beard Trim</h3>
          <p style="font-size: var(--font-size-sm); color: var(--color-gray); margin-bottom: var(--space-4);">
            Ready for a clean, shaped beard? Call or book online — walk-ins welcome based on availability.
          </p>
          <a href="/contact/" class="btn btn-primary" style="width: 100%; justify-content: center;">Schedule Now</a>
        </div>
      </aside>

    </div>
  </div>
</section>

<!-- ============================ FAQ ============================ -->
<section class="section" style="background: var(--color-light);" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title" style="text-align: center; max-width: 48rem; margin: 0 auto var(--space-12);">
      <span class="eyebrow-label">Good to Know</span>
      <h2>Common questions about beard grooming in Louisville</h2>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item">
        <div class="faq-question">
          <?php echo icon('info', 20); ?>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
        </div>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="cta-banner" aria-label="Book your beard trim">
  <div class="container" style="text-align: center;">
    <h2 style="color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4);">
      Ready to keep your beard looking sharp?
    </h2>
    <p style="color: rgba(var(--color-white-rgb), 0.9); max-width: 42rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg);">
      Bon Air Barbershop's Louisville barbers deliver precision beard trims and hot-towel grooming. Book your appointment today.
    </p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
