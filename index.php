<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Page-level setup (Phase 3 — Homepage)                               */
/* ------------------------------------------------------------------ */

$currentPage = 'home';

$pageTitle       = 'Hair Salon & Barbershop in Louisville, KY | ' . $siteName;
$pageDescription = 'Blown Away Salon & Bon Air Barbershop on Poplar Level Rd in Louisville, KY — expert hair coloring, balayage, precision fades, beard grooming, and styling under one roof. Call ' . $phone . '.';
$canonicalUrl    = $siteUrl . '/';
$ogImage         = $siteUrl . '/assets/images/hero-home.jpg';
$heroPreloadImage = '/assets/images/hero-home.jpg';
$cssVersion      = '2';

/* Homepage FAQs — sourced from research brief, banned phrases removed, one local FAQ added */
$faqs = [
    [
        'q' => 'Do I need an appointment, or do you accept walk-ins?',
        'a' => 'We welcome both appointments and walk-ins at our Poplar Level Road location. Booking ahead is the surest way to get your preferred stylist or barber and time, especially on evenings and Saturdays. Call ' . $phone . ' or stop in to check availability.',
    ],
    [
        'q' => "What\'s the difference between the Bon Air Barbershop and the salon services?",
        'a' => 'The Bon Air Barbershop side specializes in traditional and contemporary men\'s cuts, fades, and beard grooming. The salon side offers cuts, color, treatments, and styling for all hair types and genders. Many Louisville families like having one trusted team for everyone under a single roof.',
    ],
    [
        'q' => 'How long does a typical haircut or color service take?',
        'a' => 'Haircuts generally take 30-45 minutes depending on the style. Color services run 1-3 hours based on your hair length and the result you want — a root touch-up is quick, while a full balayage or color correction takes longer. We give you a time estimate when you book.',
    ],
    [
        'q' => "What if I\'m not happy with my cut or color?",
        'a' => 'Tell your stylist or barber right away — ideally before you leave the chair. We will gladly refine the shape, adjust the tone, or schedule a complimentary redo so you walk out of our Louisville studio looking and feeling like yourself.',
    ],
    [
        'q' => 'Do you offer styling for weddings and special occasions?',
        'a' => 'Yes. We handle bridal parties, event styling, and special-occasion prep for clients across Louisville. We recommend booking well in advance and scheduling a consultation so we can plan your look, do a trial if needed, and keep the day running on time.',
    ],
    [
        'q' => 'Where are you located, and is parking available?',
        'a' => 'You will find Blown Away Salon and Bon Air Barbershop at 4218 Poplar Level Road in Louisville\'s Bon Air area, just off the Watterson Expressway (I-264). Free on-site parking is right at the door, and we are an easy drive from Buechel, the Highlands, and Fern Creek.',
    ],
];

/* FAQPage schema (AI comprehension aid) — echoed after the visible FAQ section */
$faqSchema = generateFAQSchema($faqs);

/* Homepage services (all 6 render on the grid) */
$homeServices = $services;

/* Icon + tint + photo mapping for the service grid (adjacent icons/tints differ) */
$serviceCards = [
    ['slug' => 'hair-coloring',      'icon' => 'paint-bucket', 'tint' => 1, 'photo' => 'service-hair-coloring', 'alt' => 'Fresh custom hair color applied at Blown Away Salon in Louisville', 'title' => 'Hair Coloring',          'desc' => 'Custom color, root touch-ups, and full color correction for every hair type.',          'bullets' => ['Custom all-over color', 'Gray & root touch-ups', 'Full color corrections']],
    ['slug' => 'highlights-balayage','icon' => 'pen-tool',     'tint' => 2, 'photo' => 'dimensional-color-bob',  'alt' => 'Hand-painted dimensional hair color on a sleek bob at Blown Away Salon in Louisville, KY', 'title' => 'Highlights & Balayage', 'desc' => 'Hand-painted balayage, ombré, highlights, and lowlights for natural dimension.',              'bullets' => ['Hand-painted balayage', 'Sun-kissed dimension', 'Blonde & ombré specialists']],
    ['slug' => 'haircuts-styling',   'icon' => 'award',        'tint' => 3, 'photo' => 'formal-braid-updo',      'alt' => 'Formal fishtail braid updo styled for a special occasion at Blown Away Salon in Louisville', 'title' => 'Haircuts & Styling',    'desc' => "Women\'s, men\'s, and kids\' cuts plus blowouts and event styling.",                            'bullets' => ["Women\'s, men\'s & kids\' cuts", 'Blowouts & event styling', 'Cut to your face shape']],
    ['slug' => 'mens-cuts-fades',    'icon' => 'users',        'tint' => 1, 'photo' => 'mens-cut-highlights',    'alt' => "Men's short cut with blonde highlights at Bon Air Barbershop in Louisville, KY", 'title' => "Men's Cuts & Fades",    'desc' => 'Bon Air Barbershop fades, tapers, scissor cuts, and classic styles.',                       'bullets' => ['Skin, taper & drop fades', 'Scissor & classic cuts', 'Sharp, consistent line-ups']],
    ['slug' => 'beard-trims',        'icon' => 'badge-check',  'tint' => 2, 'photo' => 'precision-haircut',      'alt' => 'Sharp, precision cut with a clean finish at Bon Air Barbershop in Louisville', 'title' => 'Beard Trims & Grooming','desc' => 'Precision beard shaping, line-ups, and hot-towel grooming.',                                'bullets' => ['Precision beard shaping', 'Clean line-ups', 'Hot-towel finish']],
    ['slug' => 'waxing',             'icon' => 'star',         'tint' => 3, 'photo' => 'bold-color-client',      'alt' => 'Salon client with a bold color result and clean, defined brows in Louisville', 'title' => 'Waxing',                'desc' => 'Facial and brow waxing for clean, defined finishing touches.',                             'bullets' => ['Brow shaping & waxing', 'Facial waxing', 'Clean, defined finish']],
];

/* Why-choose-us points (from research brief differentiators — factual, not fabricated reviews) */
$whyPoints = [
    ['icon' => 'users',        'title' => 'Salon + barbershop, one roof', 'text' => 'A full salon and a dedicated barbershop share the same address, so the whole family can be seen in one stop.'],
    ['icon' => 'award',        'title' => 'Classic craft, modern technique', 'text' => 'Our team blends traditional barbering with current salon color and cutting methods.'],
    ['icon' => 'badge-check',  'title' => 'A real consultation first', 'text' => 'Every service starts with a conversation about your hair, routine, and the look you actually want.'],
    ['icon' => 'map-pin',      'title' => 'Rooted in Louisville', 'text' => 'We know Bon Air, Buechel, and the Highlands — and the styles that suit our neighbors.'],
    ['icon' => 'check-circle', 'title' => 'One menu for everything', 'text' => 'Color, cuts, fades, beards, and waxing in a single place means fewer appointments across town.'],
    ['icon' => 'shield-check', 'title' => 'Welcoming, professional chairs', 'text' => 'A comfortable studio that suits both classic barbershop regulars and salon color clients.'],
];

/* Ticker proof items */
$tickerItems = [
    'Hair Coloring', 'Balayage & Highlights', 'Precision Fades', 'Beard Grooming',
    "Women\'s & Men's Cuts", "Kids' Cuts", 'Bridal & Event Styling', 'Waxing',
    'Walk-Ins Welcome', 'Serving Louisville Since ' . $yearEstablished,
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     HOMEPAGE — page-specific composition (Phase 3)
     var() tokens only; no hardcoded colors / shadows / spacing
     ================================================================ */

  /* ---- Layered hero: 60/40 split + gradient overlay + texture ---- */
  .hero--home {
    display: block;
    min-height: 100vh;
    padding: calc(var(--nav-height) + var(--space-16)) 0 var(--space-16);
    text-align: left;
    background:
      linear-gradient(115deg, rgba(var(--color-primary-rgb), 0.94) 0%, rgba(var(--color-primary-rgb), 0.72) 48%, rgba(var(--color-primary-rgb), 0.45) 100%),
      url('/assets/images/hero-home.jpg');
    background-size: cover;
    background-position: center;
  }
  .hero--home::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.06'/%3E%3C/svg%3E");
    pointer-events: none;
  }
  .hero__inner {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: 3fr 2fr;
    gap: var(--space-12);
    align-items: center;
  }
  .hero-text { max-width: 40rem; }
  .hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    font-family: var(--font-heading);
    font-size: var(--font-size-sm);
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--color-accent);
    padding: var(--space-2) var(--space-4);
    border: 1px solid rgba(var(--color-secondary-rgb), 0.5);
    border-radius: var(--radius-full);
    margin-bottom: var(--space-5);
  }
  .hero-eyebrow svg { width: 18px; height: 18px; }
  .hero--home .hero-title {
    color: var(--color-white);
    font-size: var(--fs-h1);
    line-height: 1.05;
    margin-bottom: var(--space-5);
  }
  .hero--home .hero-title .text-accent { color: var(--color-accent); }
  .hero--home .hero-subtitle {
    color: rgba(var(--color-white-rgb), 0.88);
    font-size: var(--font-size-lg);
    line-height: 1.7;
    max-width: none;
    margin: 0 0 var(--space-8);
  }
  .hero-actions {
    display: flex;
    flex-wrap: wrap;
    gap: var(--space-4);
    margin-bottom: var(--space-8);
  }
  .hero--home .hero-trust {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start;
    gap: var(--space-4) var(--space-6);
  }
  .hero-trust-item {
    display: flex;
    align-items: center;
    gap: var(--space-2);
    color: rgba(var(--color-white-rgb),0.85);
    font-size: var(--font-size-sm);
    font-weight: 600;
  }
  .hero-trust-item svg { width: 18px; height: 18px; color: var(--color-accent); flex-shrink: 0; }

  /* ---- Hero lead-capture form (glassmorphism card) ---- */
  .hero-form-card {
    position: relative;
    z-index: 2;
    background: rgba(var(--color-white-rgb),0.97);
    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);
    border: 1px solid rgba(var(--color-secondary-rgb), 0.4);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-xl);
    padding: var(--space-8);
  }
  .hero-form-card h2 {
    font-size: var(--font-size-2xl);
    color: var(--color-primary);
    margin-bottom: var(--space-1);
  }
  .hero-form-tagline {
    color: var(--color-gray);
    font-size: var(--font-size-sm);
    margin-bottom: var(--space-5);
  }
  .sr-only {
    position: absolute;
    width: 1px; height: 1px;
    padding: 0; margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border: 0;
  }
  .hero-form .form-row { margin-bottom: var(--space-3); }
  .hero-form input,
  .hero-form select {
    width: 100%;
    padding: var(--space-4);
    font-family: var(--font-body);
    font-size: var(--font-size-base);
    color: var(--color-black);
    background: var(--color-white);
    border: 1px solid var(--color-gray-light);
    border-radius: var(--radius-md);
    transition: border-color var(--transition-fast), box-shadow var(--transition-fast);
  }
  .hero-form input:focus,
  .hero-form select:focus {
    outline: none;
    border-color: var(--color-secondary);
    box-shadow: 0 0 0 3px rgba(var(--color-secondary-rgb), 0.2);
  }
  .btn-block { width: 100%; margin-top: var(--space-2); }
  .form-footnote {
    font-size: var(--font-size-xs);
    color: var(--color-gray);
    text-align: center;
    margin: var(--space-3) 0 0;
    line-height: 1.5;
  }
  .form-footnote a { color: var(--color-secondary); text-decoration: underline; }

  /* ---- Section title / answer-block shared bits ---- */
  .section-title { text-align: center; max-width: 52rem; margin: 0 auto var(--space-12); }
  .eyebrow-label {
    display: inline-block;
    font-family: var(--font-heading);
    font-size: var(--font-size-xs);
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: var(--color-secondary);
    margin-bottom: var(--space-3);
  }
  .section-title h2 { font-size: var(--fs-h2); margin-bottom: var(--space-4); }
  .text-accent { color: var(--color-secondary); }
  .section-subtitle {
    display: block;
    font-family: var(--font-heading);
    font-style: italic;
    font-weight: 500;
    color: var(--color-accent);
    font-size: var(--font-size-lg);
    margin: var(--space-3) 0 var(--space-2);
  }
  .hero-answer {
    font-size: var(--font-size-lg);
    line-height: 1.7;
    color: var(--color-text);
  }
  .section-title .prose { color: var(--color-gray); max-width: 42rem; margin: 0 auto; }

  /* ---- Numbered section watermark (decorative technique) ---- */
  .numbered-section { position: relative; }
  .numbered-section::before {
    content: attr(data-num);
    position: absolute;
    top: var(--space-4);
    right: 5%;
    font-family: var(--font-heading);
    font-weight: 800;
    font-size: clamp(6rem, 16vw, 16rem);
    line-height: 1;
    color: rgba(var(--color-secondary-rgb), 0.07);
    pointer-events: none;
    z-index: 0;
  }
  .numbered-section > .container { position: relative; z-index: 1; }

  /* ---- Diagonal section divider (technique) ---- */
  .section-divider { background: var(--color-light); }

  .services-cta-row { text-align: center; margin-top: var(--space-12); }

  /* ---- About / process split ---- */
  .about-split { display: grid; grid-template-columns: 3fr 2fr; gap: var(--space-12); align-items: center; }
  .about-content h2 { font-size: var(--fs-h2); margin-bottom: var(--space-4); }
  .about-content > p { color: var(--color-gray); margin-bottom: var(--space-4); line-height: 1.75; }
  .process-name {
    font-family: var(--font-heading);
    font-size: var(--font-size-lg);
    color: var(--color-primary);
    margin: var(--space-6) 0 var(--space-4);
  }
  .process-steps { display: grid; gap: var(--space-4); }
  .process-step { display: flex; gap: var(--space-4); align-items: flex-start; }
  .process-step__num {
    flex-shrink: 0;
    width: 40px; height: 40px;
    border-radius: 50%;
    background: var(--color-primary);
    color: var(--color-accent);
    font-family: var(--font-heading);
    font-weight: 800;
    display: flex; align-items: center; justify-content: center;
  }
  .process-step__body h4 { font-size: var(--font-size-base); margin-bottom: var(--space-1); color: var(--color-primary); }
  .process-step__body p { font-size: var(--font-size-sm); color: var(--color-gray); margin: 0; }
  .about-media { position: relative; }
  .about-media img { border-radius: var(--radius-lg); width: 100%; object-fit: cover; box-shadow: var(--shadow-lg); }
  .about-stat-card {
    position: absolute;
    bottom: calc(-1 * var(--space-6));
    left: calc(-1 * var(--space-4));
    background: var(--color-accent);
    color: var(--color-primary);
    padding: var(--space-5) var(--space-6);
    border-radius: var(--radius-md);
    box-shadow: var(--shadow-lg);
    text-align: center;
  }
  .about-stat-card .big { font-family: var(--font-heading); font-weight: 800; font-size: var(--font-size-4xl); line-height: 1; }
  .about-stat-card .lbl { font-size: var(--font-size-xs); text-transform: uppercase; letter-spacing: 1px; font-weight: 700; }

  /* ---- Why-choose (dark) ---- */
  .why-section { background: var(--color-primary); }
  .why-section .section-title h2 { color: var(--color-white); }
  .why-section .eyebrow-label { color: var(--color-accent); }
  .why-section .section-title .prose { color: rgba(var(--color-white-rgb),0.75); }
  .why-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: var(--space-6); }
  @media (max-width: 900px) { .why-grid { grid-template-columns: 1fr 1fr; } }
  @media (max-width: 600px) { .why-grid { grid-template-columns: 1fr; } }
  .why-card {
    background: rgba(var(--color-white-rgb),0.05);
    border: 1px solid rgba(var(--color-secondary-rgb), 0.25);
    border-radius: var(--radius-lg);
    padding: var(--space-6);
  }
  .why-card__icon {
    width: 48px; height: 48px;
    border-radius: var(--radius-md);
    background: rgba(var(--color-secondary-rgb), 0.18);
    color: var(--color-accent);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: var(--space-4);
  }
  .why-card h3 { color: var(--color-white); font-size: var(--font-size-lg); margin-bottom: var(--space-2); }
  .why-card p { color: rgba(var(--color-white-rgb),0.72); font-size: var(--font-size-sm); line-height: 1.65; margin: 0; }
  .why-reviews-cta {
    display: flex; flex-wrap: wrap; align-items: center; justify-content: center;
    gap: var(--space-4);
    margin-top: var(--space-12);
    text-align: center;
  }
  .why-reviews-cta p { color: rgba(var(--color-white-rgb),0.85); margin: 0; font-size: var(--font-size-base); }

  /* ---- FAQ ---- */
  .faq-section .faq-item { background: var(--color-light); }
  .faq-question { display: flex; gap: var(--space-3); align-items: flex-start; }
  .faq-question svg { color: var(--color-secondary); flex-shrink: 0; width: 22px; height: 22px; margin-top: 2px; }
  .faq-question h3 { font-size: var(--font-size-base); margin: 0; color: var(--color-primary); }
  .faq-answer { color: var(--color-gray); font-size: var(--font-size-sm); line-height: 1.7; margin: var(--space-3) 0 0; }

  /* ---- Closing CTA ---- */
  .closing-cta { text-align: center; }
  .closing-cta h2 { color: var(--color-white); font-size: var(--fs-h2); margin-bottom: var(--space-4); }
  .closing-cta p { color: rgba(var(--color-white-rgb),0.9); max-width: 40rem; margin: 0 auto var(--space-8); font-size: var(--font-size-lg); }
  .closing-cta .hero-actions { justify-content: center; }

  /* ---- Reveal fallback-safe: driven by [data-animate] in main.js ---- */

  /* ---- Responsive ---- */
  @media (max-width: 900px) {
    .hero__inner { grid-template-columns: 1fr; gap: var(--space-8); }
    .about-split { grid-template-columns: 1fr; gap: var(--space-16); }
    .about-stat-card { left: var(--space-4); }
  }
  @media (max-width: 600px) {
    .hero-actions { flex-direction: column; align-items: stretch; }
    .hero-actions .btn { width: 100%; }
    .why-grid { grid-template-columns: 1fr; }
  }
</style>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

<!-- ============================ HERO ============================ -->
<section class="hero hero--home" aria-label="Louisville hair salon and barbershop">
  <div class="container">
    <div class="hero__inner">

      <div class="hero-text">
        <span class="hero-eyebrow">
          <?php echo icon('shield-check', 18); ?>
          Serving Louisville Since <?php echo $yearEstablished; ?>
        </span>
        <h1 class="hero-title">
          Louisville's Salon &amp; Barbershop for <span class="text-accent">Color, Cuts &amp; Fades</span>
        </h1>
        <p class="hero-subtitle">
          Blown Away Salon and Bon Air Barbershop bring master stylists and barbers together under one roof on Poplar Level Road. Expert hair coloring and balayage, sharp fades and beard work, and styling built around you &mdash; without booking two salons across town.
        </p>
        <div class="hero-actions">
          <a href="#estimate-form" class="btn btn-accent btn-lg">Book a Free Consultation</a>
          <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
            <?php echo icon('phone', 18); ?>
            Call <?php echo htmlspecialchars($phone); ?>
          </a>
        </div>
        <div class="hero-trust">
          <span class="hero-trust-item"><?php echo icon('shield-check', 18); ?> Licensed &amp; Insured</span>
          <span class="hero-trust-item"><?php echo icon('award', 18); ?> <?php echo $yearsInBusiness; ?>+ Years in Louisville</span>
          <span class="hero-trust-item"><?php echo icon('users', 18); ?> Salon + Barbershop</span>
          <span class="hero-trust-item"><?php echo icon('check-circle', 18); ?> Walk-Ins Welcome</span>
        </div>
      </div>

      <aside class="hero-form-card" id="estimate-form">
        <h2>Book a Free Consultation</h2>
        <p class="hero-form-tagline">No obligation. We\'ll follow up the same day.</p>
        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" class="hero-form">
          <input type="hidden" name="_next" value="<?php echo htmlspecialchars($siteUrl); ?>/thank-you">
          <input type="hidden" name="_captcha" value="false">
          <input type="hidden" name="_template" value="table">
          <input type="hidden" name="_subject" value="New consultation request — <?php echo htmlspecialchars($siteName); ?> website">
          <input type="hidden" name="_cc" value="<?php echo htmlspecialchars($leadCcEmail); ?>">
          <input type="text" name="_honey" style="display:none" tabindex="-1" autocomplete="off">
          <input type="hidden" name="form_location" value="hero">
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">

          <div class="form-row">
            <label for="hero-name" class="sr-only">Full name</label>
            <input type="text" id="hero-name" name="name" placeholder="Full name" required>
          </div>
          <div class="form-row">
            <label for="hero-phone" class="sr-only">Phone number</label>
            <input type="tel" id="hero-phone" name="phone" placeholder="Phone number" required>
          </div>
          <div class="form-row">
            <label for="hero-zip" class="sr-only">ZIP code</label>
            <input type="text" id="hero-zip" name="zip" placeholder="ZIP code" pattern="[0-9]{5}" inputmode="numeric" required>
          </div>
          <div class="form-row">
            <label for="hero-service" class="sr-only">What do you need?</label>
            <select id="hero-service" name="service_requested">
              <option value="">What do you need?</option>
              <?php foreach ($homeServices as $svc): ?>
              <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
              <?php endforeach; ?>
              <option value="Something else">Something else</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Request My Appointment</button>
          <p class="form-footnote">By submitting, you agree to our <a href="/terms/">Terms</a> and <a href="/privacy-policy/">Privacy Policy</a>.</p>
        </form>
      </aside>

    </div>
  </div>
</section>

<!-- ============================ TICKER ============================ -->
<div class="ticker-strip" aria-hidden="true">
  <div class="ticker-track">
    <?php for ($i = 0; $i < 2; $i++): ?>
      <?php foreach ($tickerItems as $t): ?>
        <span><?php echo icon('star', 14); ?> <?php echo htmlspecialchars($t); ?></span>
      <?php endforeach; ?>
    <?php endfor; ?>
  </div>
</div>

<!-- ============================ SERVICES (01) ============================ -->
<section class="section numbered-section" data-num="01" aria-label="Hair salon and barbershop services">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">What We Do</span>
      <h2>Which <span class="text-accent">salon &amp; barbershop services</span> does Blown Away offer in Louisville?</h2>
      <p class="hero-answer">Blown Away Salon and Bon Air Barbershop offer hair coloring, balayage and highlights, women\'s, men\'s, and kids\' cuts, precision fades, beard grooming, and waxing from one Poplar Level Road location in Louisville. Whether you want a bold color change or a sharp weekly fade, one trusted team handles it all.</p>
      <span class="section-subtitle">One roof, every look</span>
      <p class="prose">From color correction to classic barbering, our stylists and barbers tailor every service to your hair, your face shape, and your routine.</p>
    </div>

    <div class="services-grid">
      <?php foreach ($serviceCards as $i => $card): ?>
      <article class="service-card-with-image card-tint-<?php echo $card['tint']; ?> reveal-up reveal-delay-<?php echo $card['tint']; ?>" data-animate>
        <div class="service-card__image">
          <img
            src="/assets/images/<?php echo $card['photo']; ?>.jpg"
            srcset="/assets/images/<?php echo $card['photo']; ?>-480.webp 480w, /assets/images/<?php echo $card['photo']; ?>-960.webp 960w"
            sizes="(max-width: 600px) 100vw, (max-width: 1199px) 50vw, 300px"
            alt="<?php echo htmlspecialchars($card['alt']); ?>"
            width="600" height="360" loading="lazy">
        </div>
        <div class="service-card__body">
          <div class="service-card__icon"><?php echo icon($card['icon'], 26); ?></div>
          <h3><?php echo htmlspecialchars($card['title']); ?></h3>
          <p class="service-card__desc"><?php echo htmlspecialchars($card['desc']); ?></p>
          <ul>
            <?php foreach ($card['bullets'] as $b): ?>
            <li><?php echo htmlspecialchars($b); ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/services/<?php echo $card['slug']; ?>/" class="service-card__cta">Learn more</a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <div class="services-cta-row">
      <a href="/services/" class="btn btn-primary btn-lg">View All Services</a>
    </div>
  </div>
</section>

<!-- ============================ STATS ============================ -->
<section class="stats-section" aria-label="Blown Away Salon at a glance">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item" data-animate>
        <div class="stat-number"><span data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</span></div>
        <div class="stat-label">Years in Louisville</div>
      </div>
      <div class="stat-item" data-animate>
        <div class="stat-number"><span data-counter="2">0</span></div>
        <div class="stat-label">Salon &amp; Barbershop</div>
      </div>
      <div class="stat-item" data-animate>
        <div class="stat-number"><span data-counter="6">0</span></div>
        <div class="stat-label">Signature Services</div>
      </div>
      <div class="stat-item" data-animate>
        <div class="stat-number"><span data-counter="<?php echo (int)($seo_radius ?? 25); ?>" data-suffix=" mi">0</span></div>
        <div class="stat-label">Service Radius</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ MID CTA BANNER ============================ -->
<section class="cta-banner" aria-label="Book your appointment">
  <div class="container">
    <h2>Ready for a fresh look on Poplar Level Road?</h2>
    <p>New color for the weekend, a standing fade, or a full restyle before an event — get on the books with a Louisville team that treats your chair time like it matters.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<!-- ============================ ABOUT / PROCESS (02) ============================ -->
<section class="section section-divider numbered-section" data-num="02" aria-label="About Blown Away Salon and Bon Air Barbershop">
  <div class="container">
    <div class="about-split">
      <div class="about-content" data-animate>
        <span class="eyebrow-label">Our Story</span>
        <h2>A Louisville salon and barbershop built on craft</h2>
        <p>Founded on the belief that great hair starts with expertise and attention to detail, Blown Away Salon and Bon Air Barbershop bring together master barbers and stylists who understand that every cut, color, and style tells your story.</p>
        <p>From our studio on Poplar Level Road in Louisville's Bon Air neighborhood, we pair traditional barbering craftsmanship with modern salon technique &mdash; so a family can get a skin fade, a full balayage, and a kids\' cut without ever leaving the building.</p>

        <p class="process-name">The Blown Away Chair-Side Process</p>
        <div class="process-steps">
          <div class="process-step">
            <span class="process-step__num">1</span>
            <div class="process-step__body">
              <h4>Consult</h4>
              <p>We talk through your hair, lifestyle, and the exact look you\'re after.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">2</span>
            <div class="process-step__body">
              <h4>Personalize</h4>
              <p>Your stylist or barber maps a plan and color formula to match.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">3</span>
            <div class="process-step__body">
              <h4>Create</h4>
              <p>Precision cutting, coloring, and grooming with premium products.</p>
            </div>
          </div>
          <div class="process-step">
            <span class="process-step__num">4</span>
            <div class="process-step__body">
              <h4>Finish</h4>
              <p>A styling walkthrough so you can recreate the look at home.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="about-media" data-animate>
        <img
          src="/assets/images/salon-blowout-styling.jpg"
          srcset="/assets/images/salon-blowout-styling-480.webp 480w, /assets/images/salon-blowout-styling-960.webp 960w"
          sizes="(max-width: 900px) 100vw, 460px"
          alt="A long, wavy blowout finished in the chair at Blown Away Salon in Louisville, KY"
          width="600" height="450" loading="lazy">
        <div class="about-stat-card">
          <div class="big"><?php echo $yearsInBusiness; ?>+</div>
          <div class="lbl">Years in<br>Louisville</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================ WHY CHOOSE (03) ============================ -->
<section class="section why-section numbered-section" data-num="03" aria-label="Why choose Blown Away Salon">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Why Blown Away</span>
      <h2>Why Louisville keeps coming back to <span class="text-accent">one chair</span></h2>
      <p class="prose">Blown Away Salon and Bon Air Barbershop give Louisville a single place for color, cuts, fades, beards, and waxing &mdash; handled by a team that knows the neighborhood.</p>
    </div>

    <div class="why-grid">
      <?php foreach ($whyPoints as $p): ?>
      <div class="why-card" data-animate>
        <div class="why-card__icon"><?php echo icon($p['icon'], 24); ?></div>
        <h3><?php echo htmlspecialchars($p['title']); ?></h3>
        <p><?php echo htmlspecialchars($p['text']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="why-reviews-cta" data-animate>
      <p>See what your Louisville neighbors are saying.</p>
      <a href="<?php echo htmlspecialchars($gbpProfileUrl); ?>" class="btn btn-accent" target="_blank" rel="noopener">Read our Google reviews</a>
      <a href="<?php echo htmlspecialchars($reviewRequestUrl); ?>" class="btn btn-outline-white" target="_blank" rel="noopener">Leave a review</a>
    </div>
  </div>
</section>

<!-- ============================ FAQ (04) ============================ -->
<section class="section faq-section numbered-section" data-num="04" aria-label="Frequently asked questions">
  <div class="container">
    <div class="section-title" data-animate>
      <span class="eyebrow-label">Good to Know</span>
      <h2>Questions Louisville clients ask before booking</h2>
      <p class="prose">Straight answers on appointments, timing, and what to expect at our Poplar Level Road studio.</p>
    </div>

    <div class="faq-grid">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item" data-animate>
        <div class="faq-question">
          <?php echo icon('info', 22); ?>
          <h3><?php echo htmlspecialchars($faq['q']); ?></h3>
        </div>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['a']); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============================ CLOSING CTA ============================ -->
<section class="cta-banner closing-cta" aria-label="Schedule your visit">
  <div class="container">
    <h2>Your best hair is one appointment away</h2>
    <p>Book a consultation with Blown Away Salon and Bon Air Barbershop, or call and we'll find a chair for you in Louisville.</p>
    <div class="hero-actions">
      <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn btn-outline-white btn-lg">
        <?php echo icon('phone', 18); ?>
        Call <?php echo htmlspecialchars($phone); ?>
      </a>
    </div>
  </div>
</section>

<?php echo $faqSchema; ?>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
