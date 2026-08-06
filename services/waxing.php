<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage = 'services';
$pageTitle       = 'Waxing Services in Louisville, KY | ' . $siteName;
$pageDescription = 'Facial and brow waxing at Blown Away Salon in Louisville. Clean, defined brows and smooth skin. Call ' . $phone . ' to book your appointment.';
$canonicalUrl    = $siteUrl . '/services/waxing/';
$ogImage         = $siteUrl . '/assets/images/bold-color-client.jpg';
$heroPreloadImage = '/assets/images/bold-color-client.jpg';
$cssVersion      = '2';

$service = [
    'name'        => 'Waxing',
    'slug'        => 'waxing',
    'description' => 'Facial and brow waxing services for clean, defined finishing touches.',
    'keywords'    => ['brow wax', 'facial waxing', 'waxing Louisville'],
];

$faqs = [
    ['q' => 'What waxing services do you offer at Blown Away Salon?', 'a' => 'We offer eyebrow waxing, upper lip waxing, chin waxing, and full-face waxing. Each service includes pre-wax cleansing, precise wax application, hair removal, and a soothing post-wax treatment to calm the skin.'],
    ['q' => 'How much does eyebrow waxing cost in Louisville?', 'a' => 'Eyebrow waxing at our Louisville salon starts around $12-$18 as a standalone service, or $10-$15 when added to a haircut or color appointment. Upper lip and chin waxing run $8-$12 each.'],
    ['q' => 'Is waxing better than threading or tweezing?', 'a' => 'Waxing removes hair from the root and lasts 3-6 weeks, longer than shaving or trimming. Threading is more precise for intricate brow shapes but takes longer. Tweezing works for a few stray hairs but is impractical for larger areas. Waxing is fast, effective, and gives clean results for most clients.'],
    ['q' => 'How often should I get my eyebrows waxed?', 'a' => 'Most Louisville clients return every 3-5 weeks to keep their brows shaped and defined. If your hair grows quickly or you prefer a very clean look, you may want to come in every 3 weeks. Slower growth can stretch that to 5-6 weeks.'],
];

$faqSchema = generateFAQSchema($faqs);
$serviceSchema = generateServiceSchema($service);
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Waxing', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
echo $serviceSchema;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
  .hero--service { position: relative; min-height: 50vh; display: flex; align-items: center; padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-12); background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.85) 0%, rgba(var(--color-primary-rgb), 0.65) 100%), url('/assets/images/bold-color-client.jpg'); background-size: cover; background-position: center; }
  .hero--service::after { content: ''; position: absolute; inset: 0; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.05'/%3E%3C/svg%3E"); pointer-events: none; }
  .hero--service .container { position: relative; z-index: 2; }
  .breadcrumb { display: flex; align-items: center; gap: var(--space-2); color: rgba(var(--color-white-rgb),0.7); font-size: var(--font-size-sm); margin-bottom: var(--space-4); }
  .breadcrumb-sep { color: rgba(var(--color-white-rgb),0.4); }
  .breadcrumb a { color: rgba(var(--color-white-rgb),0.9); text-decoration: none; transition: color 0.2s; }
  .breadcrumb a:hover { color: var(--color-accent); }
  .hero--service h1 { color: var(--color-white); font-size: var(--fs-h1); line-height: 1.1; margin-bottom: var(--space-4); }
  .hero--service .hero-answer { color: rgba(var(--color-white-rgb),0.92); font-size: var(--font-size-lg); line-height: 1.7; max-width: 48rem; }
  .section-service-intro { padding: var(--space-16) 0; background: var(--color-white); }
  .prose-service { max-width: 52rem; margin: 0 auto; }
  .prose-service h2 { color: var(--color-primary); font-size: var(--fs-h2); margin-bottom: var(--space-4); }
  .answer-block { background: rgba(var(--color-accent-rgb), 0.08); border-left: 4px solid var(--color-accent); padding: var(--space-4) var(--space-5); font-size: var(--font-size-md); line-height: 1.7; margin: var(--space-4) 0 var(--space-8); color: var(--color-text); }
  .prose-service p { color: var(--color-gray); font-size: var(--font-size-md); line-height: 1.8; margin-bottom: var(--space-5); }
  .section-faq { padding: var(--space-16) 0; background: var(--color-bg-alt); }
  .faq-list { max-width: 52rem; margin: var(--space-8) auto 0; }
  .faq-item { background: var(--color-white); border-radius: var(--radius); padding: var(--space-6); margin-bottom: var(--space-4); box-shadow: var(--shadow-sm); }
  .faq-item h3 { color: var(--color-primary); font-size: var(--font-size-lg); margin-bottom: var(--space-3); }
  .faq-answer { color: var(--color-gray); font-size: var(--font-size-md); line-height: 1.7; }
  .section-cta { padding: var(--space-16) 0; background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.88) 100%), url('/assets/images/bold-color-client.jpg'); background-size: cover; background-position: center; text-align: center; color: var(--color-white); }
  .section-cta h2 { color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4); }
  .section-cta p { color: rgba(var(--color-white-rgb),0.9); font-size: var(--font-size-lg); max-width: 40rem; margin: 0 auto var(--space-6); }
  .cta-actions { display: flex; flex-wrap: wrap; gap: var(--space-4); justify-content: center; }
</style>

<section class="hero--service">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="/">Home</a>
      <span class="breadcrumb-sep" aria-hidden="true">›</span>
      <a href="/services/">Services</a>
      <span class="breadcrumb-sep" aria-hidden="true">›</span>
      <span aria-current="page">Waxing</span>
    </nav>
    <h1>Waxing Services in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon offers eyebrow, upper lip, chin, and facial waxing for Louisville clients who want clean, defined features. Waxing removes hair from the root for smooth skin that lasts 3-6 weeks — longer than shaving or trimming — and keeps your brows shaped and your face polished.
    </p>
  </div>
</section>

<section class="section-service-intro">
  <div class="container">
    <div class="prose-service">
      <h2>What waxing services do you offer in Louisville?</h2>
      <p class="answer-block">
        We offer eyebrow waxing, upper lip waxing, chin waxing, and full-face waxing at our Louisville salon. Each service includes skin cleansing, precise wax application, hair removal, and a soothing post-wax treatment to calm redness and prevent irritation.
      </p>
      <p>
        Eyebrow waxing is our most popular service — we shape your brows to frame your face, remove stray hairs, and create a clean arch that suits your features. Upper lip and chin waxing remove fine or coarse facial hair quickly and cleanly. Full-face waxing covers the entire face (excluding the eyelids) for an all-over smooth finish.
      </p>
      <p>
        Waxing works for all skin tones and most skin types, but we take extra care with sensitive skin. If you have active acne, sunburn, or are using retinoids or prescription acne medication, let us know before your appointment — we may recommend waiting until your skin heals or switching to a gentler hair-removal method.
      </p>

      <h2>How long does waxing last, and how often should I come back?</h2>
      <p class="answer-block">
        Waxing removes hair from the root, so results last 3-6 weeks depending on how fast your hair grows. Most Louisville clients return every 3-5 weeks to keep their brows shaped and their skin smooth. Regular waxing trains the hair to grow back finer and sparser over time.
      </p>
      <p>
        After your first wax, you may notice some regrowth within two weeks. That is normal — hair grows in cycles, and waxing catches the hair that is actively growing. After a few sessions on a regular schedule, the growth becomes more synchronized and the results last longer.
      </p>
      <p>
        Between waxing appointments, avoid tweezing or shaving the waxed area — plucking disrupts the growth cycle and makes your next wax less effective. If a few stray hairs appear, you can tweeze them, but resist the urge to reshape your brows yourself. Let the wax do the work.
      </p>
    </div>
  </div>
</section>

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

<section class="section-cta">
  <div class="container">
    <h2>Get clean, defined brows</h2>
    <p>
      Book your waxing appointment at Blown Away Salon in Louisville. Call <?php echo htmlspecialchars($phone); ?> or schedule online.
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
