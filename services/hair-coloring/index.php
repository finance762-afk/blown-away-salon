<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Hair Coloring Service Page                                         */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle = 'Hair Coloring in Louisville, KY | Custom Color & Correction | ' . $siteName;
$pageDescription = 'Expert hair coloring at Blown Away Salon in Louisville — custom all-over color, root touch-ups, blonde specialists, and full color corrections. Book your free consultation at ' . $phone . '.';
$canonicalUrl = $siteUrl . '/services/hair-coloring/';
$ogImage = $siteUrl . '/assets/images/service-hair-coloring.jpg';
$cssVersion = '2';

/* Service FAQs (AEO — FAQPage schema is AI comprehension aid; never describe as rich-result feature) */
$faqs = [
    [
        'q' => 'How much does hair coloring cost in Louisville?',
        'a' => 'All-over color starts around $80-$140 at Blown Away Salon, depending on length and density. Root touch-ups typically run $60-$90. Color correction pricing is quoted after a free consultation — we assess your current color, desired result, and the steps needed to get there safely.',
    ],
    [
        'q' => 'How long does a full color appointment take?',
        'a' => 'A root touch-up takes about 60-90 minutes. Full all-over color runs 1.5-2 hours. Color correction appointments can range from 2-4+ hours, depending on how far we\'re lifting or shifting your base. We give you a time estimate during your consultation so you can plan accordingly.',
    ],
    [
        'q' => 'Do you offer color correction for damaged or brassy hair?',
        'a' => 'Yes. Our Louisville color specialists handle everything from brass toning and root shadow to full corrective services. We start with a consultation to evaluate your hair\'s current state, then map a treatment plan that prioritizes hair health while achieving your goal color.',
    ],
    [
        'q' => 'How often should I get my roots touched up?',
        'a' => 'Most clients book root touch-ups every 4-6 weeks to maintain a seamless look. If you\'re doing a root shadow or a lower-maintenance color technique, you can often stretch to 8-10 weeks. We\'ll build a retouch schedule that fits your budget and grow-out tolerance.',
    ],
];

$faqSchema = generateFAQSchema($faqs);

/* Service schema */
$serviceData = [
    'name' => 'Hair Coloring',
    'slug' => 'hair-coloring',
    'description' => 'Custom hair coloring, root touch-ups, blonde specialists, and full color correction services for every hair type at Blown Away Salon in Louisville, Kentucky.',
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
            'name' => 'Hair Coloring',
            'item' => $siteUrl . '/services/hair-coloring/'
        ]
    ]
];

$schemaMarkup = $serviceSchema . "\n" . $faqSchema . "\n" . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     HAIR COLORING SERVICE PAGE
     ================================================================ */

  .service-hero {
    display: block;
    min-height: 60vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: left;
    background:
      linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.75) 100%),
      url('/assets/images/service-hair-coloring.jpg');
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
<section class="service-hero" aria-label="Hair coloring service">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Hair Coloring</span>
    </nav>
    <h1>Hair Coloring in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon delivers custom hair coloring for Louisville clients — all-over color, root touch-ups, blonde specialists, and full color correction from stylists trained to build vibrant, long-lasting results on every hair type. Whether you're lifting virgin hair or fixing a box-dye mishap, we consult, formulate, and execute a plan that protects your hair and hits your color goal.
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
<section class="section" aria-label="Hair coloring details">
  <div class="container">
    <div class="service-content">

      <div class="service-detail">
        <h2>What does <span class="text-accent">hair coloring</span> include at Blown Away Salon in Louisville?</h2>
        <p class="answer-block">
          Hair coloring at Blown Away Salon includes a consultation to assess your current color and desired result, a custom formula mixed to match your skin tone and hair health, application (all-over, roots only, or corrective), processing time, toning if needed, and a finishing style with product recommendations. Root touch-ups, gray coverage, fashion colors, and corrective services all follow the same personalized approach.
        </p>
        <p>
          Our Louisville color specialists work with Redken, Wella, and Paul Mitchell formulas — professional lines that deliver vivid, even color with less damage than box dye. We adjust developer strength, processing time, and toner based on your hair's porosity, previous color history, and the shift you want to make.
        </p>
        <p>
          If your hair is already colored, over-processed, or uneven, we start with a strand test and a realistic timeline. A single-process all-over color can be done in one visit. Corrective work — lifting out old dye, depositing new tone, or repairing banding — may take multiple sessions to protect your hair integrity.
        </p>

        <h2>How long does <span class="text-accent">hair color</span> last after a salon appointment?</h2>
        <p class="answer-block">
          Professional hair color from Blown Away Salon typically lasts 4-8 weeks, depending on your color formula, hair porosity, and home care routine. Permanent color fades gradually but doesn't wash out; semi-permanent and demi-permanent colors fade faster, usually 3-6 weeks. Root regrowth becomes visible after 4-6 weeks on most clients, which is when we recommend scheduling your next touch-up.
        </p>
        <p>
          To extend your color life in Louisville's humidity and sun, we recommend sulfate-free shampoo, color-safe conditioner, and weekly deep conditioning. Washing less frequently (2-3 times per week max), using lukewarm water, and applying a heat protectant before blow-drying all help lock in tone. We send you home with a personalized product list so you're not guessing at the drugstore.
        </p>

        <h2>What is the process for <span class="text-accent">color correction</span> at Blown Away Salon?</h2>
        <p class="answer-block">
          Color correction at Blown Away Salon starts with a free consultation where we evaluate your current color, hair condition, and goal. We map a treatment plan — which might include a color remover, gentle lifting with low-volume developer, toning, or a staged approach over 2-3 appointments. Each step prioritizes hair health, and we adjust the plan if your hair shows stress. The final session includes toning and a gloss to even out the result.
        </p>

        <div class="process-steps">
          <h3>The Blown Away Color Process</h3>
          <div class="process-step">
            <span class="process-step__num">1</span>
            <div>
              <h4>Consult & Strand Test</h4>
              <p>We examine your current color, assess damage, and test a small section to preview the result.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">2</span>
            <div>
              <h4>Custom Formula</h4>
              <p>Your colorist mixes a formula tailored to your hair type, porosity, and target shade.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">3</span>
            <div>
              <h4>Application & Processing</h4>
              <p>We apply color evenly, monitor processing time, and adjust as needed for even saturation.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">4</span>
            <div>
              <h4>Tone & Finish</h4>
              <p>A final gloss tones out brass, seals cuticles, and adds shine. We style and send you with care instructions.</p>
            </div>
          </div>
        </div>

        <p><strong>Last Updated:</strong> <?php echo date('F Y'); ?></p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-card">
          <h3>What's Included</h3>
          <ul>
            <li><?php echo icon('check-circle', 18); ?> <span>Free color consultation</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Strand test for major changes</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Custom formula mixed on-site</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Toning for even, vibrant results</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Styling & home-care guidance</span></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3>Book Your Color Appointment</h3>
          <p style="font-size: var(--font-size-sm); color: var(--color-gray); margin-bottom: var(--space-4);">
            Ready for a fresh color or a corrective transformation? Call or book online — walk-ins welcome based on availability.
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
      <h2>Common questions about hair coloring in Louisville</h2>
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
<section class="cta-banner" aria-label="Book your color appointment">
  <div class="container" style="text-align: center;">
    <h2 style="color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4);">
      Ready to refresh your color or fix a past mistake?
    </h2>
    <p style="color: rgba(var(--color-white-rgb), 0.9); max-width: 42rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg);">
      Blown Away Salon's Louisville color specialists deliver custom formulas, honest timelines, and results that last. Book your free consultation today.
    </p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
