<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
$currentPage = 'services';
$pageTitle       = "Haircuts & Styling in Louisville, KY | " . $siteName;
$pageDescription = "Women\'s, men\'s, and kids\' haircuts plus blowouts and event styling at Blown Away Salon in Louisville. Expert cuts tailored to your hair and face. Call " . $phone . ".";
$canonicalUrl    = $siteUrl . '/services/haircuts-styling/';
$ogImage         = $siteUrl . '/assets/images/formal-braid-updo.jpg';
$heroPreloadImage = '/assets/images/formal-braid-updo.jpg';
$cssVersion      = '2';

$service = [
    'name'        => 'Haircuts & Styling',
    'slug'        => 'haircuts-styling',
    'description' => "Women\'s, men\'s, and kids\' cuts plus blowouts and event styling tailored to your hair and face.",
    'keywords'    => ['layered haircut', 'bob haircut', 'pixie cut', 'blowout', 'styling'],
];

$faqs = [
    ['q' => 'How much does a haircut cost at Blown Away Salon?', 'a' => "Women\'s cuts start around $45-$70 depending on length and complexity. Men's cuts run $30-$45. Kids' cuts (12 and under) are $25-$35. Add a blowout or styling for an additional $25-$45."],
    ['q' => 'Do you cut all hair types and textures?', 'a' => 'Yes. Our Louisville stylists cut straight, wavy, curly, and coily hair every day. Curly and textured hair requires different sectioning and angle work than straight hair, and we train on those techniques so the cut works with your natural pattern.'],
    ['q' => 'How often should I get a haircut?', 'a' => 'Most clients return every 6-8 weeks to maintain shape and remove split ends. If you are growing your hair out, you can stretch that to 10-12 weeks and just trim the ends. Short styles like pixies or fades need a trim every 4-6 weeks to stay sharp.'],
    ['q' => 'Do you offer styling for weddings and special events?', 'a' => 'Yes. We do bridal updos, formal braids, blowouts, and special-occasion styling for clients across Louisville. Book a trial run 4-6 weeks before your event so we can plan the look and adjust timing.'],
];

$faqSchema = generateFAQSchema($faqs);
$serviceSchema = generateServiceSchema($service);
$breadcrumbSchema = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services/'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Haircuts & Styling', 'item' => $canonicalUrl],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
echo '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
echo $serviceSchema;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<style>
  .hero--service { position: relative; min-height: 50vh; display: flex; align-items: center; padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-12); background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.85) 0%, rgba(var(--color-primary-rgb), 0.65) 100%), url('/assets/images/formal-braid-updo.jpg'); background-size: cover; background-position: center; }
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
  .section-cta { padding: var(--space-16) 0; background: linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.92) 0%, rgba(var(--color-primary-rgb), 0.88) 100%), url('/assets/images/formal-braid-updo.jpg'); background-size: cover; background-position: center; text-align: center; color: var(--color-white); }
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
      <span aria-current="page">Haircuts & Styling</span>
    </nav>
    <h1>Haircuts & Styling in Louisville, KY</h1>
    <p class="hero-answer">
      Blown Away Salon delivers precision haircuts and polished styling for women, men, and kids across Louisville. From classic bobs and layered cuts to textured pixies and blowout styling, every cut is shaped to work with your hair\'s natural texture, your face, and the way you style it at home.
    </p>
  </div>
</section>

<section class="section-service-intro">
  <div class="container">
    <div class="prose-service">
      <h2>What haircut services do you offer in Louisville?</h2>
      <p class="answer-block">
        We cut all lengths and styles — women\'s layered cuts, bobs, pixies, and long trims; men\'s scissor cuts and textured crops; kids\' first cuts and maintenance trims. Every haircut includes a consultation, shampoo, precision cutting, and a finish style so you see the full shape before you leave the chair.
      </p>
      <p>
        A good haircut is not just about the shape — it is about how that shape works with your hair type, your daily routine, and your face. Fine hair needs layers placed differently than thick hair. Curly hair should be cut dry so the stylist can see the natural curl pattern and remove bulk in the right spots. We ask about how you style your hair at home, whether you blow-dry or air-dry, and what products you use, then we cut accordingly.
      </p>
      <p>
        Our Louisville stylists also do blowouts, updos, braids, and special-occasion styling. A blowout takes 30-45 minutes and gives you smooth, voluminous hair that lasts 2-3 days with minimal touch-up. Bridal and event styling includes a trial run so we can lock in the look before your big day.
      </p>

      <h2>How do you decide the right haircut for me?</h2>
      <p class="answer-block">
        We start with a consultation where we look at your current haircut, discuss what you like and dislike, examine your hair\'s texture and density, and talk about your styling routine. Then we recommend a cut that fits your hair, your face shape, and the amount of time you want to spend styling it each day.
      </p>
      <p>
        Face shape matters. An oval face can wear almost any cut. A round face benefits from longer layers and side-swept bangs that add length. A square jawline looks softer with textured, choppy layers. A long face needs width at the sides — a blunt bob or shoulder-length cut with layers around the cheekbones. We factor that in, but we also listen to what you actually want and adjust from there.
      </p>
      <p>
        Your lifestyle and styling habits are just as important. If you wash-and-go every morning, we give you a cut that air-dries into a wearable shape. If you flat-iron or curl your hair daily, we build the cut to look polished with heat styling. If you are growing out a pixie or recovering from a bad cut, we map out a plan so you have a presentable shape at every stage.
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
    <h2>Ready for a fresh cut?</h2>
    <p>
      Book your haircut or styling appointment at Blown Away Salon in Louisville. Call <?php echo htmlspecialchars($phone); ?> or schedule online.
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
