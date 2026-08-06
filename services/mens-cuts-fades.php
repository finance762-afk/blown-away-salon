<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage = 'services';
$pageTitle       = "Men's Cuts & Fades in Louisville, KY | " . $siteName;
$metaDescription = "Precision fades, tapers, scissor cuts, and classic men's styles at Bon Air Barbershop in Louisville. Expert barbers, sharp results. Call " . $phone . ".";
$canonicalUrl    = $siteUrl . '/services/mens-cuts-fades/';
$ogImage         = $siteUrl . '/assets/images/mens-cut-highlights.jpg';
$heroPreloadImage = '/assets/images/mens-cut-highlights.jpg';
$cssVersion      = '2';

$service = [
    'name'        => "Men's Cuts & Fades",
    'slug'        => 'mens-cuts-fades',
    'description' => 'Bon Air Barbershop fades, tapers, scissor cuts, and classic men\'s styles from experienced barbers.',
    'keywords'    => ['skin fade', 'taper fade', 'buzz cut', 'undercut', 'classic haircut'],
];

$faqs = [
    ['q' => "How much does a men's haircut cost at Bon Air Barbershop?", 'a' => "Men's cuts at our Louisville barbershop start at $30–$35 for a basic cut and go up to $45–$55 for a precision fade or detailed scissor work. Every cut includes a consultation, wash, cut, and style."],
    ['q' => 'What is the difference between a skin fade and a taper fade?', 'a' => 'A skin fade takes the hair down to bare skin at the bottom, creating a sharp line where the fade starts. A taper fade gradually shortens the hair but leaves a shadow of stubble instead of going all the way to skin. Skin fades are bolder; tapers are more conservative and professional.'],
    ['q' => 'How often should I get a fade?', 'a' => 'Fades grow out noticeably within 2–3 weeks. Most Louisville clients who wear a fade return every 2–4 weeks to keep it looking crisp. If you let it go longer, the fade line blurs and you lose that sharp gradient.'],
    ['q' => 'Do you do scissor cuts, or just clippers?', 'a' => 'We do both. Fades and buzz cuts rely on clippers and guards. Classic scissor cuts, textured crops, and longer styles use shears for precision and blending. Many cuts combine both — clippers for the sides, scissors on top.'],
];

$faqSchema = generateFAQSchema($faqs);
$serviceSchema = generateServiceSchema($service);
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => "Men's Cuts & Fades", 'item' => $canonicalUrl],
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
  .faq-answer { color: var(--color-gray); font-size: var(--font-size-md); line-height: 1.7; }
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
      <span aria-current="page">Men's Cuts & Fades</span>
    </nav>
    <h1>Men's Cuts & Fades in Louisville, KY</h1>
    <p class="hero-answer">
      Bon Air Barbershop delivers sharp, consistent men's haircuts across Louisville — skin fades, taper fades, drop fades, scissor cuts, undercuts, and classic barbershop styles. Every cut is tailored to your hair type, head shape, and the look you want, whether that is a clean professional cut or a bold, modern fade.
    </p>
  </div>
</section>

<section class="section-service-intro">
  <div class="container">
    <div class="prose-service">
      <h2>What types of men's haircuts do you offer at Bon Air Barbershop?</h2>
      <p class="answer-block">
        We specialize in fades (skin, taper, drop, burst), buzz cuts, crew cuts, scissor cuts, undercuts, and classic side-part styles. Every men's cut includes a consultation, wash, precision cutting with clippers or shears, and a styled finish. We also do line-ups, edge work, and neck shaves to complete the look.
      </p>
      <p>
        A fade is a gradual transition from longer hair on top to short or bare skin on the sides and back. The type of fade you choose depends on how dramatic you want the contrast. A skin fade goes all the way down to scalp, creating a sharp line. A taper fade leaves a shadow of stubble instead of bare skin — more conservative and easier to maintain. A drop fade curves down behind the ear for a modern, stylized look.
      </p>
      <p>
        Scissor cuts use shears instead of clippers to create texture, layers, and movement. We blend the sides with scissors for a softer look than a fade, or we leave length on top and texturize it so it holds shape without looking blocky. Classic styles — side part, comb-over, slick-back — combine clipper work on the sides with scissor-cut length on top. Our Louisville barbers know how to execute all of them.
      </p>

      <h2>How often should I get a haircut to keep my fade sharp?</h2>
      <p class="answer-block">
        Fades grow out visibly within 2–3 weeks. Most men who wear a fade in Louisville return every 2–4 weeks to keep the gradient crisp and the line clean. Scissor cuts and longer styles can go 4–6 weeks between appointments depending on how fast your hair grows and how polished you want to look.
      </p>
      <p>
        The tighter the fade, the faster it grows out. A skin fade starts to blur after two weeks. A high taper or textured scissor cut on top can stretch to a month before it looks shaggy. If you have a professional job or just like a tight, clean look, plan for every two weeks. If you are more relaxed about it, every three to four weeks keeps you presentable.
      </p>
      <p>
        We also do line-ups and edge-ups between full cuts — a quick service that cleans up your hairline, sideburns, and neck so you look fresh without redoing the entire cut. That takes 10–15 minutes and costs less than a full haircut.
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
    <h2>Get a sharp fade or classic cut</h2>
    <p>
      Book your men's haircut at Bon Air Barbershop in Louisville. Call <?php echo htmlspecialchars($phone); ?> or walk in today.
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
