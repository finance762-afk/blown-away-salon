<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Waxing Service Page                                                */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle = 'Waxing Services in Louisville, KY | Brow & Facial Waxing | ' . $siteName;
$pageDescription = 'Professional facial and brow waxing at Blown Away Salon in Louisville — clean, precise results for defined brows and smooth skin. Book at ' . $phone . '.';
$canonicalUrl = $siteUrl . '/services/waxing/';
$ogImage = $siteUrl . '/assets/images/service-waxing.jpg';
$cssVersion = '2';

/* Service FAQs (AEO — FAQPage schema is AI comprehension aid; never describe as rich-result feature) */
$faqs = [
    [
        'q' => 'How much does brow waxing cost in Louisville?',
        'a' => 'Eyebrow waxing at Blown Away Salon is $12-$18. Lip waxing is $8-$12. Full-face waxing (brows, lip, chin, sideburns) runs $30-$45. We quote your exact price when you check in based on the areas you want waxed.',
    ],
    [
        'q' => 'How long does a waxing appointment take?',
        'a' => 'Eyebrow waxing takes about 10-15 minutes. Lip or chin waxing is 5-10 minutes. Full-face waxing runs 20-30 minutes. If you\'re adding waxing to a haircut or color appointment, we can do it as a quick add-on at the end of your service.',
    ],
    [
        'q' => 'Is waxing better than threading or tweezing for brows?',
        'a' => 'Waxing removes multiple hairs at once, creating a clean, defined brow shape in one pass. Threading offers more precision for very detailed shaping but takes longer. Tweezing is best for isolated stray hairs between waxing appointments. At Blown Away Salon in Louisville, we recommend waxing for full brow shaping and tweezing for quick touch-ups at home.',
    ],
    [
        'q' => 'How often should I get my brows waxed?',
        'a' => 'Most Louisville clients get brow waxing every 3-5 weeks to maintain their shape. If your brow hair grows fast or you want a very clean look, every 2-3 weeks works. If you tweeze at home between visits, you can stretch to 5-6 weeks. We recommend staying consistent with your schedule so your brows grow in evenly and maintain the same shape.',
    ],
];

$faqSchema = generateFAQSchema($faqs);

/* Service schema */
$serviceData = [
    'name' => 'Waxing',
    'slug' => 'waxing',
    'description' => 'Professional facial and brow waxing services for clean, defined results at Blown Away Salon in Louisville, Kentucky.',
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
            'name' => 'Waxing',
            'item' => $siteUrl . '/services/waxing/'
        ]
    ]
];

$schemaMarkup = $serviceSchema . "\n" . $faqSchema . "\n" . '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     WAXING SERVICE PAGE
     ================================================================ */

  .service-hero {
    display: block;
    min-height: 60vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: left;
    background:
      linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.75) 100%),
      url('/assets/images/service-waxing.jpg');
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
<section class="service-hero" aria-label="Waxing services">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep">/</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep">/</span>
      <span>Waxing</span>
    </nav>
    <h1>Waxing Services in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon delivers professional facial and brow waxing for Louisville clients — clean, defined brows, smooth upper lip and chin, and precision sideburn shaping using high-quality hard and soft waxes that minimize irritation. Whether you're maintaining your brow shape between appointments or trying waxing for the first time, our estheticians consult on shape, sensitivity, and aftercare to deliver results that last 3-5 weeks.
    </p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-accent btn-lg">Book Your Waxing Appointment</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
        <?php echo icon('phone', 18); ?>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

<!-- ============================ SERVICE DETAIL ============================ -->
<section class="section" aria-label="Waxing services details">
  <div class="container">
    <div class="service-content">

      <div class="service-detail">
        <h2>What does <span class="text-accent">brow waxing</span> include at Blown Away Salon in Louisville?</h2>
        <p class="answer-block">
          Brow waxing at Blown Away Salon includes a consultation to discuss your desired brow shape and thickness, cleansing the area to remove oils and makeup, applying warm wax to unwanted hair outside your desired brow line, quick removal in smooth strips, tweezing any stray hairs the wax missed, and applying a soothing gel to reduce redness. Most sessions take 10-15 minutes and deliver clean, defined brows that last 3-5 weeks.
        </p>
        <p>
          Our Louisville estheticians use hard wax for sensitive areas (like the brow bone) and soft wax for larger areas. Hard wax adheres to the hair, not the skin, making removal less painful and reducing irritation. If you have very sensitive skin, low pain tolerance, or are using retinol or acne medication, let us know — we can adjust wax temperature and technique to minimize discomfort.
        </p>
        <p>
          If you've never had your brows waxed, we start by mapping your natural brow shape and asking about your preferences. Over-waxed brows take weeks to grow back, so we err on the side of conservative and adjust from there. You can always remove more; you can't undo over-plucking.
        </p>

        <h2>How long does <span class="text-accent">waxing</span> last before hair grows back?</h2>
        <p class="answer-block">
          Waxing at Blown Away Salon lasts 3-5 weeks on average. Brow hair typically takes 3-4 weeks to regrow to visible length. Lip and chin hair can return in 2-3 weeks if your hair grows fast or is coarse. With consistent waxing every 3-4 weeks, regrowth becomes finer and sparser over time — regular clients at our Louisville salon often see less dense regrowth after 6-12 months of consistent appointments.
        </p>
        <p>
          To extend the life of your wax, avoid tweezing between appointments — tweezing disrupts the growth cycle and causes uneven regrowth. Exfoliate the waxed area gently 2-3 times a week to prevent ingrown hairs. Moisturize daily to keep skin smooth and make the next wax less painful.
        </p>

        <h2>What is the difference between <span class="text-accent">hard wax and soft wax</span> for facial waxing?</h2>
        <p class="answer-block">
          Hard wax is applied warm, allowed to harden on the skin, and removed by gripping the edge and pulling — no strip required. It adheres to the hair, not the skin, making it gentler and ideal for sensitive areas like brows and upper lip. Soft wax is applied thinly, covered with a cloth or paper strip, and removed quickly. It's faster for larger areas but grips both hair and skin, which can cause more redness on delicate facial skin. At Blown Away Salon, we use hard wax for most facial waxing unless you prefer soft wax.
        </p>

        <div class="process-steps">
          <h3>The Blown Away Waxing Process</h3>
          <div class="process-step">
            <span class="process-step__num">1</span>
            <div>
              <h4>Consultation & Cleansing</h4>
              <p>We discuss your desired shape and areas to wax, then cleanse your skin to remove oils and makeup.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">2</span>
            <div>
              <h4>Wax Application</h4>
              <p>Warm wax is applied to unwanted hair in sections, allowed to set briefly, then removed quickly.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">3</span>
            <div>
              <h4>Tweezing & Cleanup</h4>
              <p>Any stray hairs the wax missed are tweezed for a clean, defined result.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">4</span>
            <div>
              <h4>Soothing & Aftercare</h4>
              <p>A cooling gel is applied to reduce redness, and you receive aftercare tips to prevent irritation and ingrowns.</p>
            </div>
          </div>
        </div>

        <p><strong>Last Updated:</strong> <?php echo date('F Y'); ?></p>

      </div>

      <aside class="service-sidebar">
        <div class="sidebar-card">
          <h3>What's Included</h3>
          <ul>
            <li><?php echo icon('check-circle', 18); ?> <span>Personalized shape consultation</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Skin cleansing & prep</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Precision waxing with hard or soft wax</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Tweezing for stray hairs</span></li>
            <li><?php echo icon('check-circle', 18); ?> <span>Soothing gel & aftercare tips</span></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3>Book Your Waxing Appointment</h3>
          <p style="font-size: var(--font-size-sm); color: var(--color-gray); margin-bottom: var(--space-4);">
            Ready for smooth skin and defined brows? Call or book online — walk-ins welcome based on availability.
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
      <h2>Common questions about waxing in Louisville</h2>
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
<section class="cta-banner" aria-label="Book your waxing appointment">
  <div class="container" style="text-align: center;">
    <h2 style="color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4);">
      Ready for smooth, defined brows?
    </h2>
    <p style="color: rgba(var(--color-white-rgb), 0.9); max-width: 42rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg);">
      Blown Away Salon's Louisville estheticians deliver precision waxing with minimal irritation. Book your appointment today.
    </p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
