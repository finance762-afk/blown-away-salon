<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage = 'services';
$pageTitle       = 'Beard Trims & Grooming in Louisville, KY | ' . $siteName;
$pageDescription = 'Precision beard shaping, line-ups, and hot-towel grooming at Bon Air Barbershop in Louisville. Keep your beard sharp and clean. Call ' . $phone . '.';
$canonicalUrl    = $siteUrl . '/services/beard-trims/';
$ogImage         = $siteUrl . '/assets/images/mens-cut-highlights.jpg';
$heroPreloadImage = '/assets/images/mens-cut-highlights.jpg';
$cssVersion      = '2';

$service = [
    'name'        => 'Beard Trims & Grooming',
    'slug'        => 'beard-trims',
    'description' => 'Precision beard shaping, line-ups, and hot-towel grooming to keep your look sharp.',
    'keywords'    => ['beard trim', 'beard grooming', 'line up', 'hot towel'],
];

$faqs = [
    ['q' => 'How much does a beard trim cost in Louisville?', 'a' => 'A beard trim at Bon Air Barbershop runs $15-$25 as a standalone service, or $10-$15 when added to a haircut. Full beard shaping with a hot-towel finish is $25-$35.'],
    ['q' => 'What is included in a beard trim?', 'a' => 'We trim your beard to your desired length, shape the cheek and neck lines, clean up stray hairs, and finish with a hot towel and beard oil or balm. You walk out with a groomed, defined beard that looks intentional, not scraggly.'],
    ['q' => 'How often should I get my beard trimmed?', 'a' => 'Most beards need shaping every 2-4 weeks to stay clean and defined. If you wear a short beard or goatee, you can stretch that to 4-6 weeks. Longer beards benefit from a trim every 3-4 weeks to remove split ends and maintain shape.'],
    ['q' => 'Do you do straight-razor shaves?', 'a' => 'We offer hot-towel neck shaves and cheek line clean-ups with a straight razor to finish a haircut or beard trim. Full straight-razor face shaves are available by request — call ahead to confirm availability.'],
];

$faqSchema = generateFAQSchema($faqs);
$serviceSchema = generateServiceSchema($service);
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Beard Trims & Grooming', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
echo $serviceSchema;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
  .hero--service { position: relative; min-height: 50vh; display: flex; align-items: center; padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-12); background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.85) 0%, rgba(var(--color-primary-rgb), 0.65) 100%), url('/assets/images/mens-cut-highlights.jpg'); background-size: cover; background-position: center; }
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
  .faq-answer { color: var(--color-gray); font-size: var(--font-size-md); line-height: 1.7); }
  .section-cta { padding: var(--space-16) 0; background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.88) 100%), url('/assets/images/mens-cut-highlights.jpg'); background-size: cover; background-position: center; text-align: center; color: var(--color-white); }
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
      <span aria-current="page">Beard Trims & Grooming</span>
    </nav>
    <h1>Beard Trims & Grooming in Louisville, KY</h1>
    <p class="hero-answer">
      Bon Air Barbershop delivers precision beard shaping, line-ups, and hot-towel finishing across Louisville. Whether you wear a full beard, goatee, or short stubble, we trim, shape, and groom it so it looks intentional, clean, and defined — never scraggly or unkempt.
    </p>
  </div>
</section>

<section class="section-service-intro">
  <div class="container">
    <div class="prose-service">
      <h2>What does a beard trim service include?</h2>
      <p class="answer-block">
        Every beard trim at Bon Air Barbershop includes length adjustment with clippers or scissors, cheek and neck line shaping, stray-hair removal, and a hot-towel treatment to soften the skin and open pores. We finish with beard oil or balm to condition the hair and leave your beard looking groomed and healthy.
      </p>
      <p>
        A good beard trim is not just about cutting hair shorter — it is about creating a deliberate shape that works with your face, jawline, and the style you want. We define your cheek line so it sits at the right height, clean up your neck line so the beard has a clear bottom edge, and remove bulk or split ends that make the beard look uneven.
      </p>
      <p>
        Some Louisville clients want a tight, corporate-friendly beard that stays close to the face. Others want a fuller, styled beard with length and volume. We adjust our approach based on what you are going for — scissor work for texture and shaping, clippers with guards for uniform length, or a combination of both for a blended, natural look.
      </p>

      <h2>How often should I get my beard trimmed in Louisville?</h2>
      <p class="answer-block">
        Most beards need professional shaping every 2-4 weeks to stay clean and defined. Short beards and goatees can stretch to 4-6 weeks. Longer beards benefit from a trim every 3-4 weeks to remove split ends, maintain shape, and prevent the beard from looking wild or unintentional.
      </p>
      <p>
        The frequency depends on how fast your beard grows and how precise you want the lines. If you keep a tight, structured beard for a professional setting, every two weeks keeps the cheek and neck lines crisp. If you wear a longer, more relaxed beard, you can go three to four weeks before it needs a refresh.
      </p>
      <p>
        Between full grooming sessions, you can maintain your beard at home with a quality trimmer, beard scissors, and a comb. Use beard oil daily to keep the hair soft and the skin underneath healthy. A good beard brush distributes oil evenly and trains the hair to grow in the direction you want. When the shape starts to blur or stray hairs multiply, come back for a professional trim.
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
    <h2>Get a clean, shaped beard</h2>
    <p>
      Book your beard trim at Bon Air Barbershop in Louisville. Call <?php echo htmlspecialchars($phone); ?> or stop in today.
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
