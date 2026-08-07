<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Men's Cuts & Fades Service Page                                    */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle = "Men's Cuts & Fades in Louisville, KY | Bon Air Barbershop | " . $siteName;
$pageDescription = "Expert men's haircuts, fades, tapers, and classic cuts at Bon Air Barbershop in Louisville — precision barbering from experienced barbers. Book your cut at " . $phone . ".";
$canonicalUrl = $siteUrl . '/services/mens-cuts-fades/';
$ogImage = $siteUrl . '/assets/images/service-mens-cut.jpg';
$cssVersion = '2';

/* Service FAQs (AEO — FAQPage schema is AI comprehension aid; never describe as rich-result feature) */
$faqs = [
    [
        'q' => "How much does a men's haircut cost in Louisville?",
        'a' => "Men's haircuts at Bon Air Barbershop start at $25-$40, depending on the complexity of the cut. A basic clipper cut or buzz runs $25-$30. Fades, tapers, and scissor cuts with blending are $30-$40. If you're adding a beard trim or line-up, add $10-$15. We quote your exact price when you check in.",
    ],
    [
        'q' => "How long does a men's haircut and fade take?",
        'a' => "Most men's cuts at Bon Air Barbershop take 30-45 minutes. A simple buzz or trim runs 20-30 minutes. A detailed skin fade with a scissor-cut top can take 40-50 minutes. If you're adding a beard trim and hot-towel finish, plan for 45-60 minutes total. We block enough time so your cut is never rushed.",
    ],
    [
        'q' => 'What\'s the difference between a taper fade and a skin fade?',
        'a' => 'A taper fade gradually shortens from longer on top to very short at the neckline and ears, but it never goes down to bare skin. A skin fade (also called a bald fade) uses a razor or zero-guard clipper to blend down to smooth skin at the edges. Skin fades are sharper and higher-contrast but require more frequent touch-ups — every 1-2 weeks vs. 2-3 weeks for a taper fade.',
    ],
    [
        'q' => "How often should I get a men's haircut to keep it looking sharp?",
        'a' => "Skin fades and tapers need a trim every 1-3 weeks to stay crisp. Scissor cuts and classic styles can go 3-5 weeks. If you're growing your hair out or maintaining a longer style, 4-6 weeks is typical. Your barber at Bon Air Barbershop will recommend a schedule based on your cut and how fast your hair grows.",
    ],
];

$faqSchema = generateFAQSchema($faqs);

/* Service schema */
$serviceData = [
    'name' => "Men's Cuts & Fades",
    'slug' => 'mens-cuts-fades',
    'description' => "Precision men's haircuts, fades, tapers, scissor cuts, and classic barbering from experienced barbers at Bon Air Barbershop in Louisville, Kentucky.",
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
            'name' => "Men's Cuts & Fades",
            'item' => $siteUrl . '/services/mens-cuts-fades/'
        ]
    ]
];

$schemaMarkup = $serviceSchema . "\n" . $faqSchema . "\n" . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     MEN'S CUTS & FADES SERVICE PAGE
     ================================================================ */

  .service-hero {
    display: block;
    min-height: 60vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: left;
    background:
      linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.75) 100%),
      url('/assets/images/service-mens-cut.jpg');
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
<section class="service-hero" aria-label="Men's cuts and fades service">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Men's Cuts & Fades</span>
    </nav>
    <h1>Men's Cuts & Fades in Louisville, KY</h1>
    <p class="hero-answer">
      Bon Air Barbershop delivers precision men's haircuts and fades for Louisville clients — skin fades, taper fades, buzz cuts, undercuts, scissor cuts, and classic barbering from experienced barbers who understand proportion, blend technique, and what actually looks sharp in real life. Whether you're maintaining a corporate cut or dialing in a fresh fade, we consult on style, clipper guards, and maintenance schedules that fit your routine.
    </p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Book Your Cut</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
        <?php echo icon('phone', 18); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<!-- ============================ SERVICE DETAIL ============================ -->
<section class="section" aria-label="Men's cuts and fades details">
  <div class="container">
    <div class="service-content">

      <div class="service-detail">
        <h2>What does a <span class="text-accent">men's fade haircut</span> include at Bon Air Barbershop?</h2>
        <p class="answer-block">
          A men's fade at Bon Air Barbershop includes a consultation to discuss your desired fade height and top length, clipper work with multiple guard sizes to create a smooth gradient from longer on top to very short or skin-bare at the sides and back, scissor work or clipper-over-comb blending at the top, line-up and edge detailing, and a finishing style with pomade, clay, or cream. Skin fades, taper fades, high fades, mid fades, and low fades are all available.
        </p>
        <p>
          Our Louisville barbers use Andis and Wahl clippers with sharp blades, working in half-guard increments to blend seamlessly. A skin fade goes down to bare scalp using a zero guard or straight razor. A taper fade stops short of the skin, leaving a very close buzz. High fades start the blend above the temple; mid fades around the temple; low fades just above the ear.
        </p>
        <p>
          If you're new to fades or unsure which height suits your face shape, we walk through reference photos and recommend a starting point. Fades grow out fast — expect to return every 1-3 weeks to keep the blend crisp. Classic cuts and scissor cuts without fades can stretch to 3-5 weeks.
        </p>

        <h2>How long does a <span class="text-accent">fade haircut</span> stay sharp before it needs a touch-up?</h2>
        <p class="answer-block">
          A skin fade at Bon Air Barbershop stays sharp for 1-2 weeks before the blend starts to blur. A taper fade lasts 2-3 weeks. Classic cuts and scissor cuts without tight fades can go 3-5 weeks. Your hair's growth rate, the fade height, and how crisp you want the edges determine your retouch schedule. Most Louisville clients on a fade maintenance plan come in every 2 weeks.
        </p>
        <p>
          To extend the life of your fade between cuts, keep your neckline clean with clippers at home or stop by for a line-up ($5-$10, 10 minutes). Fades in Louisville's humidity can look fuzzy faster due to expanded cuticles — a weekly wash with a men's shampoo and a light pomade or cream keeps edges defined.
        </p>

        <h2>What is the difference between a <span class="text-accent">taper and a fade</span>?</h2>
        <p class="answer-block">
          A taper is a gradual shortening of hair length from longer on top to shorter at the neckline and ears, but it doesn't blend down to skin — it stops at a short buzz. A fade uses multiple clipper guards and blending techniques to create a seamless gradient from longer hair to very short or bare skin. Tapers are lower-maintenance and look more conservative; fades are sharper, higher-contrast, and require more frequent touch-ups. Both are available at Bon Air Barbershop in Louisville.
        </p>

        <div class="process-steps">
          <h3>The Bon Air Barbershop Men's Cut Process</h3>
          <div class="process-step">
            <span class="process-step__num">1</span>
            <div>
              <h4>Style Consultation</h4>
              <p>We discuss your desired fade height, top length, and line-up preference, then assess your hair texture and head shape.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">2</span>
            <div>
              <h4>Clipper Fade Work</h4>
              <p>Your barber uses multiple guard sizes to create a smooth gradient, blending from longer to shorter with precision.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">3</span>
            <div>
              <h4>Top Cutting & Blending</h4>
              <p>Scissor work or clipper-over-comb technique shapes the top, blending seamlessly into the fade.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">4</span>
            <div>
              <h4>Line-Up & Style</h4>
              <p>Your edges are cleaned, the neckline squared or tapered, and finishing product applied for hold and texture.</p>
            </div>
          </div>
        </div>

        <p><strong>Last Updated:</strong> <?php echo date('F Y'); ?></p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-card">
          <h3>What's Included</h3>
          <ul>
            <li><?php echo icon('check-circle', 18); ?> <span>Personalized fade consultation</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Precision clipper fade work</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Scissor cutting & blending</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Line-up & edge detailing</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Styling product & tips</span></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3>Book Your Men's Cut</h3>
          <p style="font-size: var(--font-size-sm); color: var(--color-gray); margin-bottom: var(--space-4);">
            Ready for a fresh fade or classic cut? Call or book online — walk-ins welcome based on availability.
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
      <h2>Common questions about men's cuts in Louisville</h2>
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
<section class="cta-banner" aria-label="Book your men's cut">
  <div class="container" style="text-align: center;">
    <h2 style="color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4);">
      Ready for a clean fade or classic cut?
    </h2>
    <p style="color: rgba(var(--color-white-rgb), 0.9); max-width: 42rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg);">
      Bon Air Barbershop's Louisville barbers deliver precision fades and classic cuts that actually last. Book your appointment today.
    </p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
