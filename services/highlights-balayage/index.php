<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Highlights & Balayage Service Page                                 */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle = 'Balayage & Highlights in Louisville, KY | Hand-Painted Color | ' . $siteName;
$pageDescription = 'Expert balayage, ombré, highlights, and lowlights at Blown Away Salon in Louisville — hand-painted dimension for natural, sun-kissed color. Book your free consultation at ' . $phone . '.';
$canonicalUrl = $siteUrl . '/services/highlights-balayage/';
$ogImage = $siteUrl . '/assets/images/service-balayage.jpg';
$cssVersion = '2';

/* Service FAQs (AEO — FAQPage schema is AI comprehension aid; never describe as rich-result feature) */
$faqs = [
    [
        'q' => 'How much do balayage highlights cost in Louisville?',
        'a' => 'Balayage at Blown Away Salon typically runs $140-$220, depending on your hair length, density, and how many sections we\'re hand-painting. Partial balayage (face-framing and top layers) starts around $140. Full balayage covering all layers and back runs $180-$220. We quote your exact price during the free consultation.',
    ],
    [
        'q' => 'How long does a balayage appointment take?',
        'a' => 'Most balayage appointments take 2.5-3.5 hours at our Louisville salon. Partial balayage is usually 2-2.5 hours. Full balayage with toning runs 3-3.5 hours. If we\'re also cutting and styling, add another 30-45 minutes. We block the full time when you book so you\'re never rushed.',
    ],
    [
        'q' => 'What\'s the difference between balayage and traditional foil highlights?',
        'a' => 'Balayage is hand-painted freehand onto the surface of your hair, creating soft, graduated color that grows out naturally with no harsh lines. Traditional foil highlights are sectioned and saturated root to tip, giving more contrast and brightness but a harder grow-out line. Balayage looks more lived-in and requires fewer touch-ups — most Louisville clients go 10-16 weeks between sessions.',
    ],
    [
        'q' => 'How often should I get balayage touched up?',
        'a' => 'Balayage grows out gracefully, so most clients return every 10-16 weeks. If you\'re a natural blonde or going very light, you might want a gloss or root shadow around week 8 to refresh tone. Brunettes with subtle balayage can often stretch to 12-16 weeks. We\'ll build a retouch schedule based on your hair\'s growth rate and how much maintenance you want.',
    ],
];

$faqSchema = generateFAQSchema($faqs);

/* Service schema */
$serviceData = [
    'name' => 'Highlights & Balayage',
    'slug' => 'highlights-balayage',
    'description' => 'Hand-painted balayage, ombré, highlights, and lowlights for natural, sun-kissed dimension at Blown Away Salon in Louisville, Kentucky.',
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
            'name' => 'Highlights & Balayage',
            'item' => $siteUrl . '/services/highlights-balayage/'
        ]
    ]
];

$schemaMarkup = $serviceSchema . "\n" . $faqSchema . "\n" . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     HIGHLIGHTS & BALAYAGE SERVICE PAGE
     ================================================================ */

  .service-hero {
    display: block;
    min-height: 60vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: left;
    background:
      linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.75) 100%),
      url('/assets/images/service-balayage.jpg');
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
<section class="service-hero" aria-label="Balayage and highlights service">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Highlights & Balayage</span>
    </nav>
    <h1>Balayage & Highlights in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon delivers hand-painted balayage, ombré, highlights, and lowlights for Louisville clients seeking natural, sun-kissed dimension without harsh grow-out lines. Our colorists paint freehand to match your hair\'s natural movement, creating blended, lived-in color that lasts 10-16 weeks between touch-ups. Whether you want subtle face-framing brightness or full-head lightening, we consult, customize, and execute a look built for your lifestyle.
    </p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Book a Free Consultation</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
        <?php echo icon('phone', 18); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<!-- ============================ SERVICE DETAIL ============================ -->
<section class="section" aria-label="Balayage and highlights details">
  <div class="container">
    <div class="service-content">

      <div class="service-detail">
        <h2>What does <span class="text-accent">balayage</span> include at Blown Away Salon in Louisville?</h2>
        <p class="answer-block">
          Balayage at Blown Away Salon includes a color consultation to assess your natural base and desired brightness level, custom lightener mixed to your hair\'s porosity, hand-painted application focused on the mid-lengths and ends with soft root transitions, processing time monitored section by section, toning to neutralize brass and lock in your target shade, and a finishing style with take-home care recommendations. Partial or full balayage options are available.
        </p>
        <p>
          Our Louisville colorists use professional-grade lighteners from Redken and Wella — formulas that lift predictably without over-processing. We paint each stroke to follow your hair\'s natural fall, placing lighter pieces where the sun would naturally hit. The result is multidimensional color that grows out gracefully instead of creating a harsh line.
        </p>
        <p>
          If your hair is virgin (never colored), balayage is usually a single-session service. Previously colored or very dark hair may require a pre-lightening session or staged approach to avoid damage. We assess your starting point during the consultation and give you a realistic timeline and price upfront.
        </p>

        <h2>How long does <span class="text-accent">balayage color</span> last before needing a touch-up?</h2>
        <p class="answer-block">
          Balayage from Blown Away Salon typically lasts 10-16 weeks before most Louisville clients feel ready for a refresh. Because the color is hand-painted with soft roots, grow-out blends naturally — there\'s no visible demarcation line. Blondes may want a toner or gloss around week 8 to combat brassiness, while brunettes with subtle balayage can often stretch to 12-16 weeks. Your colorist will build a maintenance plan based on your hair\'s growth rate and how much upkeep you prefer.
        </p>
        <p>
          To maximize longevity in Louisville's climate, we recommend purple or blue shampoo once a week (purple for warm tones, blue for ashy), sulfate-free cleansers, and a deep conditioner every 7-10 days. Avoid chlorine and salt water in the first two weeks post-service — both can strip toner. We send you home with a custom product list so your color stays vibrant between visits.
        </p>

        <h2>What is the difference between <span class="text-accent">balayage and foil highlights</span>?</h2>
        <p class="answer-block">
          Balayage is freehand-painted lightener applied to the surface of your hair, creating soft, graduated dimension that mimics natural sun lightening. Foil highlights are sectioned, saturated root to tip, and enclosed in foil for maximum lift and contrast. Balayage grows out seamlessly with no hard line; foil highlights create more brightness but require touch-ups every 6-8 weeks as roots grow. Louisville clients who want low-maintenance color typically prefer balayage, while those seeking all-over brightness choose foil highlights.
        </p>

        <div class="process-steps">
          <h3>The Blown Away Balayage Process</h3>
          <div class="process-step">
            <span class="process-step__num">1</span>
            <div>
              <h4>Consultation & Sectioning</h4>
              <p>We assess your base color, hair health, and target shade, then section your hair to map placement.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">2</span>
            <div>
              <h4>Hand-Painted Lightening</h4>
              <p>Lightener is painted freehand onto select strands, focusing on mid-lengths and ends for a natural gradient.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">3</span>
            <div>
              <h4>Processing & Monitoring</h4>
              <p>We monitor lift progress section by section, adjusting time to hit your target level without over-processing.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">4</span>
            <div>
              <h4>Tone & Finish</h4>
              <p>A custom toner neutralizes brass, locks in your desired shade, and adds shine. We style and review home care.</p>
            </div>
          </div>
        </div>

        <p><strong>Last Updated:</strong> <?php echo date('F Y'); ?></p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-card">
          <h3>What\'s Included</h3>
          <ul>
            <li><?php echo icon('check-circle', 18); ?> <span>Free balayage consultation</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Custom lightener formula</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Hand-painted freehand application</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Toning for natural, sun-kissed finish</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Styling & maintenance plan</span></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3>Book Your Balayage Appointment</h3>
          <p style="font-size: var(--font-size-sm); color: var(--color-gray); margin-bottom: var(--space-4);">
            Ready for natural, lived-in color? Call or book online — walk-ins welcome based on availability.
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
      <h2>Common questions about balayage in Louisville</h2>
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
<section class="cta-banner" aria-label="Book your balayage appointment">
  <div class="container" style="text-align: center;">
    <h2 style="color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4);">
      Ready for natural, low-maintenance dimension?
    </h2>
    <p style="color: rgba(var(--color-white-rgb), 0.9); max-width: 42rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg);">
      Blown Away Salon's Louisville colorists hand-paint balayage that grows out gracefully. Book your free consultation today.
    </p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
