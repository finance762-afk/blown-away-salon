<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage = 'services';
$pageTitle       = 'Highlights & Balayage in Louisville, KY | ' . $siteName;
$pageDescription = 'Hand-painted balayage, ombré, highlights, and lowlights at Blown Away Salon in Louisville. Natural dimensional color by expert stylists. Call ' . $phone . '.';
$canonicalUrl    = $siteUrl . '/services/highlights-balayage/';
$ogImage         = $siteUrl . '/assets/images/dimensional-color-bob.jpg';
$heroPreloadImage = '/assets/images/dimensional-color-bob.jpg';
$cssVersion      = '2';

$service = [
    'name'        => 'Highlights & Balayage',
    'slug'        => 'highlights-balayage',
    'description' => 'Hand-painted balayage, ombré, highlights, and lowlights for natural, sun-kissed dimension.',
    'keywords'    => ['balayage', 'ombre hair', 'highlights', 'lowlights', 'blonde specialist'],
];

$faqs = [
    ['q' => 'What is the difference between highlights and balayage?', 'a' => 'Highlights use foils to saturate specific strands from root to tip for uniform lightness. Balayage is hand-painted color swept onto the surface of the hair for a softer, more natural gradient — thicker at the ends, lighter at the roots. Balayage grows out more gracefully and requires less frequent touch-ups.'],
    ['q' => 'How much do highlights or balayage cost in Louisville?', 'a' => 'Partial highlights (around the face and crown) start around $95-$130. Full balayage ranges from $150-$250+ depending on your hair length, density, and whether we need a root shadow or toner. We give you a price quote after your consultation.'],
    ['q' => 'How long does a balayage appointment take?', 'a' => 'Plan 2-3 hours for a full balayage. We paint the color, let it process (30-45 minutes), rinse, apply toner, let that process (10-20 minutes), then style. Shorter hair or a partial application can take 90 minutes.'],
    ['q' => 'How often should I refresh my highlights or balayage?', 'a' => 'Balayage typically needs a refresh every 3-4 months because the grow-out is gradual. Traditional highlights grow out with a harder line, so most clients return every 6-8 weeks for a root touch-up or toner to keep the color fresh.'],
];

$faqSchema = generateFAQSchema($faqs);
$serviceSchema = generateServiceSchema($service);
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Highlights & Balayage', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
echo $serviceSchema;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
  .hero--service { position: relative; min-height: 50vh; display: flex; align-items: center; padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-12); background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.85) 0%, rgba(var(--color-primary-rgb), 0.65) 100%), url('/assets/images/dimensional-color-bob.jpg'); background-size: cover; background-position: center; }
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
  .section-cta { padding: var(--space-16) 0; background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.88) 100%), url('/assets/images/dimensional-color-bob.jpg'); background-size: cover; background-position: center; text-align: center; color: var(--color-white); }
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
      <span aria-current="page">Highlights & Balayage</span>
    </nav>
    <h1>Highlights & Balayage in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon creates dimensional color through hand-painted balayage, traditional foil highlights, ombré, and lowlights. Whether you want sun-kissed blonde, warm caramel ribbons, or a soft shadow root, our Louisville colorists customize every placement to suit your hair texture, face shape, and maintenance preferences.
    </p>
  </div>
</section>

<section class="section-service-intro">
  <div class="container">
    <div class="prose-service">
      <h2>What is balayage, and how is it different from highlights?</h2>
      <p class="answer-block">
        Balayage is a freehand painting technique where the colorist sweeps lightener onto the hair surface to create a soft, natural gradient — heavier at the ends, lighter toward the roots. Traditional highlights use foils to saturate individual strands from root to tip for uniform brightness. Balayage grows out with a softer line and requires less frequent touch-ups than foil highlights.
      </p>
      <p>
        Both techniques add dimension, but they give you different looks. Highlights create ribbons of light that are uniform in intensity from root to end. Balayage mimics how the sun would naturally lighten your hair — more color where the light hits, less where it does not. If you like a polished, structured look and do not mind regular root appointments, highlights are a good choice. If you prefer a lived-in, low-maintenance vibe, balayage is the better option.
      </p>
      <p>
        We also do ombré (a visible shift from dark roots to light ends), lowlights (darker pieces woven into highlighted hair for depth), and shadow roots (a soft, blended root so you do not see a harsh grow-out line). Most Louisville clients mix techniques — partial balayage around the face with a shadow root, or traditional highlights on top with lowlights underneath for contrast.
      </p>

      <h2>How long does balayage or highlights take, and how often do I need a touch-up?</h2>
      <p class="answer-block">
        Full balayage takes 2-3 hours from consultation to finish. Partial highlights run 90 minutes to 2 hours. Balayage grows out gracefully, so you can wait 3-4 months between appointments. Traditional highlights show a root line faster, so most clients return every 6-8 weeks for a root touch-up or toner refresh.
      </p>
      <p>
        The timeline depends on how fast your hair grows and how much contrast you want to maintain. A soft, natural balayage can go 4-5 months before it needs refreshing, especially if we do a shadow root. High-contrast platinum highlights on dark hair will show regrowth sooner — plan for 6 weeks between visits if you want a crisp, clean line.
      </p>
      <p>
        Toner fades over time, especially if you wash your hair frequently or use hot tools. We recommend a gloss or toner refresh every 4-6 weeks to keep blonde tones from turning brassy. That service takes 30-45 minutes and costs less than a full highlight or balayage session.
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
    <h2>Ready for dimensional color?</h2>
    <p>
      Book your balayage or highlight appointment at Blown Away Salon in Louisville. Call <?php echo htmlspecialchars($phone); ?> or schedule online today.
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
