<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Page-level setup — Hair Coloring Service                           */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle       = 'Hair Coloring in Louisville, KY | ' . $siteName;
$pageDescription = 'Custom hair coloring, root touch-ups, and color correction at Blown Away Salon in Louisville. From vibrant fashion color to natural-looking touch-ups. Call ' . $phone . ' today.';
$canonicalUrl    = $siteUrl . '/services/hair-coloring/';
$ogImage         = $siteUrl . '/assets/images/bold-color-client.jpg';
$heroPreloadImage = '/assets/images/bold-color-client.jpg';
$cssVersion      = '2';

/* Service Data */
$service = [
    'name'        => 'Hair Coloring',
    'slug'        => 'hair-coloring',
    'description' => 'Custom color, root touch-ups, and full-scale color correction for every hair type, done by Louisville color specialists.',
    'keywords'    => ['hair color specialist', 'root touch-up', 'color correction', 'fashion hair color'],
];

/* Service-specific FAQs */
$faqs = [
    [
        'q' => 'How much does hair coloring cost in Louisville?',
        'a' => 'Single-process color at Blown Away Salon starts around $65-$90; double-process or fashion color runs $120-$200+ depending on your hair length, density, and the number of formulas required. We give you an exact price after your consultation.',
    ],
    [
        'q' => 'What is color correction, and do I need it?',
        'a' => 'Color correction lifts out or neutralizes unwanted tones — brass, orange, or uneven patches — left from a previous color job or box dye. If your current color looks off or you want to shift to a lighter shade, you likely need correction before we can place your new color.',
    ],
    [
        'q' => 'How often should I schedule a root touch-up?',
        'a' => 'Most clients with permanent color return every 4-6 weeks to cover gray or root regrowth. If you are growing out color or use a low-maintenance balayage, you can stretch that to 8-12 weeks.',
    ],
    [
        'q' => 'Will hair color damage my hair?',
        'a' => 'Any chemical color process lifts the cuticle to deposit or remove pigment, which changes the structure. We use quality formulas, bond-strengthening treatments, and proper developer strengths to minimize damage, but heavily bleached or over-processed hair needs extra care.',
    ],
    [
        'q' => 'Do you work with all hair types and textures?',
        'a' => 'Yes. Our Louisville colorists work with straight, wavy, curly, and coily hair every day. Textured or coarse hair takes color differently than fine hair, so we adjust processing times and formulas accordingly.',
    ],
];

$faqSchema = generateFAQSchema($faqs);
$serviceSchema = generateServiceSchema($service);

$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Hair Coloring', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
echo $serviceSchema;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
  /* ================================================================
     HAIR COLORING SERVICE PAGE — composition (Phase 4)
     ================================================================ */

  /* Hero — smaller than homepage, service-focused */
  .hero--service {
    position: relative;
    min-height: 50vh;
    display: flex;
    align-items: center;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-12);
    background:
      linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.85) 0%, rgba(var(--color-primary-rgb), 0.65) 100%),
      url('/assets/images/bold-color-client.jpg');
    background-size: cover;
    background-position: center;
  }
  .hero--service::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E");
    pointer-events: none;
  }
  .hero--service .container {
    position: relative;
    z-index: 2;
  }
  .hero--service .breadcrumb {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    color: rgba(var(--color-white-rgb),0.7);
    font-size: var(--font-size-sm);
    margin-bottom: var(--space-4);
  }
  .breadcrumb-sep {
    color: rgba(var(--color-white-rgb),0.4);
  }
  .breadcrumb a {
    color: rgba(var(--color-white-rgb),0.9);
    text-decoration: none;
    transition: color 0.2s;
  }
  .breadcrumb a:hover {
    color: var(--color-accent);
  }
  .hero--service h1 {
    color: var(--color-white);
    font-size: var(--fs-h1);
    line-height: 1.1;
    margin-bottom: var(--space-4);
  }
  .hero--service .hero-answer {
    color: rgba(var(--color-white-rgb),0.92);
    font-size: var(--font-size-lg);
    line-height: 1.7;
    max-width: 48rem;
  }

  /* Section layouts */
  .section-service-intro {
    padding: var(--space-16) 0;
    background: var(--color-white);
  }
  .split-content {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-12);
    align-items: center;
  }
  .prose-service {
    max-width: 52rem;
  }
  .prose-service h2 {
    color: var(--color-primary);
    font-size: var(--fs-h2);
    margin-bottom: var(--space-4);
  }
  .answer-block {
    background: rgba(var(--color-accent-rgb), 0.08);
    border-left: 4px solid var(--color-accent);
    padding: var(--space-4) var(--space-5);
    font-size: var(--font-size-md);
    line-height: 1.7;
    margin: var(--space-4) 0 var(--space-8);
    color: var(--color-text);
  }
  .prose-service p {
    color: var(--color-gray);
    font-size: var(--font-size-md);
    line-height: 1.8;
    margin-bottom: var(--space-5);
  }
  .split-image {
    border-radius: var(--radius-lg);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
  }
  .split-image img {
    width: 100%;
    height: auto;
    display: block;
  }

  /* Process section */
  .section-process {
    padding: var(--space-16) 0;
    background: var(--color-bg-alt);
  }
  .process-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-6);
    margin-top: var(--space-8);
  }
  .process-step {
    display: flex;
    gap: var(--space-4);
    align-items: flex-start;
  }
  .process-number {
    flex-shrink: 0;
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--color-accent);
    color: var(--color-primary);
    font-family: var(--font-heading);
    font-size: 1.5rem;
    font-weight: 800;
    border-radius: 50%;
  }
  .process-content h3 {
    color: var(--color-primary);
    font-size: var(--font-size-xl);
    margin-bottom: var(--space-2);
  }
  .process-content p {
    color: var(--color-gray);
    font-size: var(--font-size-md);
    line-height: 1.7;
  }

  /* Why choose section */
  .section-why {
    padding: var(--space-16) 0;
    background: var(--color-white);
  }
  .why-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: var(--space-5);
    margin-top: var(--space-8);
  }
  .why-item {
    display: flex;
    gap: var(--space-4);
    align-items: flex-start;
    padding: var(--space-5);
    background: var(--color-bg-alt);
    border-radius: var(--radius);
    border-left: 4px solid var(--color-accent);
  }
  .why-icon {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--color-accent);
  }
  .why-content h3 {
    color: var(--color-primary);
    font-size: var(--font-size-lg);
    margin-bottom: var(--space-2);
  }
  .why-content p {
    color: var(--color-gray);
    font-size: var(--font-size-md);
    line-height: 1.6;
  }

  /* FAQ section */
  .section-faq {
    padding: var(--space-16) 0;
    background: var(--color-bg-alt);
  }
  .faq-list {
    max-width: 52rem;
    margin: var(--space-8) auto 0;
  }
  .faq-item {
    background: var(--color-white);
    border-radius: var(--radius);
    padding: var(--space-6);
    margin-bottom: var(--space-4);
    box-shadow: var(--shadow-sm);
  }
  .faq-item h3 {
    color: var(--color-primary);
    font-size: var(--font-size-lg);
    margin-bottom: var(--space-3);
  }
  .faq-answer {
    color: var(--color-gray);
    font-size: var(--font-size-md);
    line-height: 1.7;
  }

  /* CTA section */
  .section-cta {
    padding: var(--space-16) 0;
    background:
      linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.88) 100%),
      url('/assets/images/bold-color-client.jpg');
    background-size: cover;
    background-position: center;
    text-align: center;
    color: var(--color-white);
  }
  .section-cta h2 {
    color: var(--color-white);
    font-size: var(--fs-h2);
    margin-bottom: var(--space-4);
  }
  .section-cta p {
    color: rgba(var(--color-white-rgb),0.9);
    font-size: var(--font-size-lg);
    max-width: 40rem;
    margin: 0 auto var(--space-6);
  }
  .cta-actions {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-4);
    justify-content: center;
  }

  @media (min-width: 768px) {
    .split-content {
      grid-template-columns: 1fr 1fr;
      gap: var(--space-16);
    }
    .process-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .why-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
</style>

<!-- Hero Section -->
<section class="hero--service">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">›</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Hair Coloring</span>
    </nav>
    <h1>Hair Coloring in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon offers custom hair coloring for Louisville clients, from single-process all-over color and gray coverage to complex color correction and vibrant fashion shades. Every color service starts with a consultation so we can match your vision, work within your hair\'s condition, and give you results you can show off across the Highlands, Bon Air, and beyond.
    </p>
  </div>
</section>

<!-- Service Detail Section -->
<section class="section-service-intro">
  <div class="container">
    <div class="split-content">
      <div class="prose-service">
        <h2>What kind of hair coloring services do you offer in Louisville?</h2>
        <p class="answer-block">
          We handle single-process color (one formula applied root-to-tip), double-process (bleach + toner or two separate color steps), root touch-ups, gray blending, fashion color (vivid reds, blues, pastels), and full color correction when your current color needs fixing. Our Louisville colorists also do glossing treatments to refresh faded color or add shine between major color appointments.
        </p>
        <p>
          Hair color is not one-size-fits-all. Virgin hair takes color differently than previously colored or bleached hair. Coarse gray hair needs a different developer strength and processing time than fine, non-resistant hair. That is why every color service at Blown Away Salon starts with a conversation at the chair — we look at your hair\'s current state, talk about where you want to go, and build a formula that gets you there without unnecessary damage.
        </p>
        <p>
          If you are covering gray, we recommend permanent color with a root touch-up every 4-6 weeks. If you want vivid fashion color (purple, teal, rose gold), we usually pre-lighten the hair, then place the vivid tone on top. Vivid colors fade faster than natural shades, so plan for a gloss or refresh every 3-5 weeks to keep that intensity. Color correction — lifting out old box dye, removing brass, or evening out patchy tones — can take 2-3 hours and may require multiple sessions if your starting point is very dark or heavily damaged.
        </p>
      </div>
      <div class="split-image">
        <img
          src="/assets/images/dimensional-color-bob-480.webp"
          srcset="/assets/images/dimensional-color-bob-480.webp 480w, /assets/images/dimensional-color-bob-960.webp 960w"
          sizes="(max-width: 768px) 100vw, 50vw"
          alt="Dimensional hair color on a sleek bob at Blown Away Salon in Louisville"
          width="960"
          height="960"
          loading="lazy"
        >
      </div>
    </div>
  </div>
</section>

<!-- Process Section -->
<section class="section-process">
  <div class="container">
    <h2>How does the hair coloring process work at Blown Away Salon?</h2>
    <p class="answer-block">
      We start with a consultation to assess your current color, hair health, and desired result. Then we mix a custom formula, apply it section-by-section, monitor processing time, rinse thoroughly, and finish with a toner or gloss if needed. You leave with care instructions and a plan for when to return for your next touch-up or refresh.
    </p>
    <div class="process-grid">
      <div class="process-step">
        <div class="process-number">1</div>
        <div class="process-content">
          <h3>Consultation & Formula</h3>
          <p>
            We examine your hair, discuss the look you want, and build a custom color formula. If you are going significantly lighter or correcting old color, we explain how many sessions it will take and what to expect.
          </p>
        </div>
      </div>
      <div class="process-step">
        <div class="process-number">2</div>
        <div class="process-content">
          <h3>Application & Processing</h3>
          <p>
            We section your hair and apply color where it is needed — roots only for a touch-up, or full-head for all-over coverage. Processing takes 20-45 minutes depending on the formula and your hair type.
          </p>
        </div>
      </div>
      <div class="process-step">
        <div class="process-number">3</div>
        <div class="process-content">
          <h3>Rinse & Toner</h3>
          <p>
            After processing, we rinse the color thoroughly and apply a toner if you need one — to neutralize brass, shift undertones, or add gloss. The toner processes 5-20 minutes.
          </p>
        </div>
      </div>
      <div class="process-step">
        <div class="process-number">4</div>
        <div class="process-content">
          <h3>Style & Aftercare</h3>
          <p>
            We style your hair so you can see the full result, give you product recommendations, and schedule your next visit. Color-treated hair needs sulfate-free shampoo and a weekly mask to stay vibrant.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us Section -->
<section class="section-why">
  <div class="container">
    <h2>Why choose Blown Away Salon for hair coloring in Louisville?</h2>
    <p class="answer-block">
      Our Louisville colorists have logged thousands of hours doing everything from simple root coverage to multi-dimensional balayage and vivid fashion color. We use professional-grade formulas, bond-strengthening treatments, and precise processing times so your color looks good and your hair stays healthy.
    </p>
    <div class="why-grid">
      <div class="why-item">
        <div class="why-icon"><?php echo icon('award', 32); ?></div>
        <div class="why-content">
          <h3>Experienced Color Specialists</h3>
          <p>
            Our team trains continuously on new color techniques, corrective formulas, and trend shades so you get expert application every visit.
          </p>
        </div>
      </div>
      <div class="why-item">
        <div class="why-icon"><?php echo icon('beaker', 32); ?></div>
        <div class="why-content">
          <h3>Custom Formulas</h3>
          <p>
            No two clients get the same mix. We adjust developer strength, tone, and processing time to fit your hair\'s porosity, texture, and starting color.
          </p>
        </div>
      </div>
      <div class="why-item">
        <div class="why-icon"><?php echo icon('shield-check', 32); ?></div>
        <div class="why-content">
          <h3>Bond-Strengthening Treatments</h3>
          <p>
            We add bond-repair products to high-lift color and bleach services to minimize breakage and keep your hair\'s integrity intact.
          </p>
        </div>
      </div>
      <div class="why-item">
        <div class="why-icon"><?php echo icon('map-pin', 32); ?></div>
        <div class="why-content">
          <h3>Rooted in Louisville</h3>
          <p>
            We know what colors work in Kentucky's climate and hard water — and how to maintain vivid shades when you are washing your hair at home in Louisville.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section-faq">
  <div class="container">
    <h2 style="text-align:center; margin-bottom:var(--space-4);">Frequently Asked Questions</h2>
    <div class="faq-list">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item">
        <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php echo $faqSchema; ?>

<!-- CTA Section -->
<section class="section-cta">
  <div class="container">
    <h2>Ready for a new color?</h2>
    <p>
      Schedule your color consultation at Blown Away Salon in Louisville. Call <?php echo htmlspecialchars($phone); ?> or book online today.
    </p>
    <div class="cta-actions">
      <a href="/contact/" class="btn-primary">Book Your Appointment</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn-secondary">
        <?php echo icon('phone', 20); ?>
        Call Now
      </a>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
