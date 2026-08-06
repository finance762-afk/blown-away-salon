<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Haircuts & Styling Service Page                                    */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle = 'Haircuts & Styling in Louisville, KY | Women, Men & Kids | ' . $siteName;
$pageDescription = 'Expert haircuts, blowouts, and event styling at Blown Away Salon in Louisville — layered cuts, bobs, pixies, and styling for all hair types. Book your appointment at ' . $phone . '.';
$canonicalUrl = $siteUrl . '/services/haircuts-styling/';
$ogImage = $siteUrl . '/assets/images/service-haircut.jpg';
$cssVersion = '2';

/* Service FAQs (AEO — FAQPage schema is AI comprehension aid; never describe as rich-result feature) */
$faqs = [
    [
        'q' => 'How much does a haircut cost in Louisville?',
        'a' => "Women\'s haircuts at Blown Away Salon start around $35-$55, depending on length and complexity. Men's haircuts run $25-$40. Kids' cuts (12 and under) are $20-$30. Blowout and styling add $15-$30. We quote your exact price when you check in based on your hair and the service level.",
    ],
    [
        'q' => 'How long does a haircut and styling appointment take?',
        'a' => "A standard women\'s cut and style takes about 45-60 minutes. Men's cuts run 30-45 minutes. Blowouts alone are 30-40 minutes. If you\'re adding color or a treatment, plan for 1.5-3 hours total. We block enough time when you book so you\'re never rushed.",
    ],
    [
        'q' => 'Do you specialize in curly hair or textured cuts?',
        'a' => "Yes. Our Louisville stylists are trained in dry-cutting techniques for curly, coily, and wavy hair. We assess your curl pattern, cut while dry to see how each section springs, and layer to enhance your natural texture — not fight it. Curly clients often see us every 8-12 weeks for shape maintenance.",
    ],
    [
        'q' => 'Can I get a blowout without a haircut?',
        'a' => 'Absolutely. Walk-in blowouts are available Monday-Saturday at Blown Away Salon, subject to stylist availability. A blowout includes shampoo, conditioning treatment, heat styling, and finishing product. Most last 2-4 days depending on your hair type and how you maintain it overnight. We recommend booking ahead during peak wedding and event season.',
    ],
];

$faqSchema = generateFAQSchema($faqs);

/* Service schema */
$serviceData = [
    'name' => 'Haircuts & Styling',
    'slug' => 'haircuts-styling',
    'description' => "Women\'s, men\'s, and kids\' haircuts plus blowouts and event styling tailored to your hair and face at Blown Away Salon in Louisville, Kentucky.",
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
            'name' => 'Haircuts & Styling',
            'item' => $siteUrl . '/services/haircuts-styling/'
        ]
    ]
];

$schemaMarkup = $serviceSchema . "\n" . $faqSchema . "\n" . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     HAIRCUTS & STYLING SERVICE PAGE
     ================================================================ */

  .service-hero {
    display: block;
    min-height: 60vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: left;
    background:
      linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.75) 100%),
      url('/assets/images/service-haircut.jpg');
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
<section class="service-hero" aria-label="Haircuts and styling service">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Haircuts & Styling</span>
    </nav>
    <h1>Haircuts & Styling in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon delivers precision haircuts and professional styling for Louisville clients — layered cuts, bobs, pixies, long trims, blowouts, and event styling tailored to your hair type, face shape, and lifestyle. Whether you\'re maintaining your signature look or trying something new, our stylists consult on texture, movement, and finishing techniques that work in Louisville's humidity and translate to your daily routine at home.
    </p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Book Your Haircut</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
        <?php echo icon('phone', 18); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<!-- ============================ SERVICE DETAIL ============================ -->
<section class="section" aria-label="Haircuts and styling details">
  <div class="container">
    <div class="service-content">

      <div class="service-detail">
        <h2>What does a <span class="text-accent">haircut</span> include at Blown Away Salon in Louisville?</h2>
        <p class="answer-block">
          A haircut at Blown Away Salon includes a consultation to discuss your desired length, shape, and styling habits, a shampoo and conditioning treatment, precision cutting using shears and/or razor techniques tailored to your hair texture, a blow-dry or air-dry style, and finishing products with at-home styling tips. Women\'s, men\'s, and kids\' haircuts all follow this personalized approach. Curly and textured cuts are done dry for maximum shape control.
        </p>
        <p>
          Our Louisville stylists cut wet for straight and wavy hair, dry for curly and coily textures, and use a combination of point-cutting, slide-cutting, and razor work to create movement and blend layers. We assess your natural fall, growth patterns, and how you style at home — a cut that looks great in the salon but impossible to replicate is a failed cut.
        </p>
        <p>
          If you\'re unsure what you want, we bring reference photos and walk through face-framing options, layering, and maintenance requirements. A pixie cut needs a trim every 4-6 weeks. A long layered cut can stretch to 8-12 weeks. We build a schedule that fits your budget and upkeep tolerance.
        </p>

        <h2>How often should I get a <span class="text-accent">haircut</span> to maintain my style?</h2>
        <p class="answer-block">
          Short styles like pixies, bobs, and men\'s cuts need a trim every 4-6 weeks to hold their shape. Medium-length cuts with layers can go 6-8 weeks. Long hair with minimal layers or just ends trimmed stretches to 8-12 weeks. Curly hair often needs shaping every 8-10 weeks, while straight fine hair shows split ends faster and benefits from 6-week trims. Your stylist at Blown Away Salon will recommend a schedule based on your cut and growth rate.
        </p>
        <p>
          Louisville's humidity causes frizz and expands the cuticle, which accelerates split-end formation. Regular trims keep ends healthy and your style holding its shape. Skipping cuts doesn\'t save money — it costs more to correct heavy damage than to maintain with consistent trims.
        </p>

        <h2>What is the difference between a <span class="text-accent">blowout and a haircut</span>?</h2>
        <p class="answer-block">
          A blowout is shampoo, conditioning, and heat styling with a round brush to create volume, smoothness, or curl — no cutting involved. A haircut includes shampoo, cutting, and a finishing style (which may be a blowout, air-dry style, or flat-iron finish). At Blown Away Salon, you can book a blowout alone ($15-$30, 30-40 minutes) or add it to a haircut. Blowouts last 2-4 days depending on hair type and how you sleep.
        </p>

        <div class="process-steps">
          <h3>The Blown Away Haircut Process</h3>
          <div class="process-step">
            <span class="process-step__num">1</span>
            <div>
              <h4>Consultation & Analysis</h4>
              <p>We discuss your desired length, lifestyle, and styling habits, then assess your hair texture and face shape.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">2</span>
            <div>
              <h4>Shampoo & Prep</h4>
              <p>Your hair is cleansed, conditioned, and detangled to create an even foundation for cutting.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">3</span>
            <div>
              <h4>Precision Cutting</h4>
              <p>We cut using techniques matched to your texture — wet cutting for straight/wavy, dry cutting for curly/coily.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">4</span>
            <div>
              <h4>Style & Finish</h4>
              <p>Your hair is styled with heat or air-dried, products applied, and you leave with tips to recreate the look at home.</p>
            </div>
          </div>
        </div>

        <p><strong>Last Updated:</strong> <?php echo date('F Y'); ?></p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-card">
          <h3>What\'s Included</h3>
          <ul>
            <li><?php echo icon('check-circle', 18); ?> <span>Personalized cut consultation</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Shampoo & conditioning treatment</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Precision cutting tailored to texture</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Blow-dry or air-dry styling</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>At-home styling tips</span></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3>Book Your Haircut Appointment</h3>
          <p style="font-size: var(--font-size-sm); color: var(--color-gray); margin-bottom: var(--space-4);">
            Ready for a fresh cut or a style refresh? Call or book online — walk-ins welcome based on availability.
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
      <h2>Common questions about haircuts in Louisville</h2>
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
<section class="cta-banner" aria-label="Book your haircut appointment">
  <div class="container" style="text-align: center;">
    <h2 style="color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4);">
      Ready for a cut that fits your lifestyle?
    </h2>
    <p style="color: rgba(var(--color-white-rgb), 0.9); max-width: 42rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg);">
      Blown Away Salon's Louisville stylists deliver precision cuts and styling built to last. Book your appointment today.
    </p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
