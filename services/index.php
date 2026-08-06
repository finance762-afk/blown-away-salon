<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';
?>
<?php
/* ------------------------------------------------------------------ */
/* Services Index — All Services Listing                              */
/* ------------------------------------------------------------------ */

$currentPage = 'services';

$pageTitle = 'Hair Salon & Barbershop Services in Louisville, KY | ' . $siteName;
$metaDescription = 'Expert hair coloring, balayage, men's cuts, fades, beard grooming, and waxing at Blown Away Salon and Bon Air Barbershop in Louisville. Book your appointment today.';
$canonicalUrl = $siteUrl . '/services/';
$ogImage = $siteUrl . '/assets/images/logo.png';
$cssVersion = '2';

/* BreadcrumbList schema */
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
        ]
    ]
];

$schemaMarkup = '<script type="application/ld+json">' . json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<style>
  /* ================================================================
     SERVICES INDEX — comprehensive grid layout
     ================================================================ */

  .hero--services {
    display: block;
    min-height: 50vh;
    padding: calc(var(--nav-height) + var(--space-12)) 0 var(--space-16);
    text-align: center;
    background:
      linear-gradient(135deg, rgba(var(--color-primary-rgb), 0.96) 0%, rgba(var(--color-primary-rgb), 0.88) 100%),
      linear-gradient(to right, rgba(176,141,87,0.15) 0%, rgba(201,162,75,0.12) 100%);
    position: relative;
  }
  .hero--services::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
  }
  .hero--services .container { position: relative; z-index: 2; }
  .hero--services .hero-title {
    color: var(--color-white);
    font-size: var(--fs-h1);
    line-height: 1.1;
    margin-bottom: var(--space-4);
  }
  .hero--services .text-accent { color: var(--color-accent); }
  .hero--services .hero-answer {
    color: rgba(var(--color-white-rgb), 0.9);
    font-size: var(--font-size-lg);
    line-height: 1.7;
    max-width: 50rem;
    margin: 0 auto var(--space-8);
  }

  .services-grid-full {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: var(--space-8);
  }

  .service-card-full {
    background: var(--color-white);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-card);
    transition: transform var(--transition-base), box-shadow var(--transition-base);
    overflow: hidden;
  }
  .service-card-full:hover {
    transform: translateY(-6px);
    box-shadow: var(--shadow-lg);
  }
  .service-card-full__image {
    position: relative;
    overflow: hidden;
    aspect-ratio: 16 / 10;
  }
  .service-card-full__image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
  }
  .service-card-full:hover .service-card-full__image img {
    transform: scale(1.08);
  }
  .service-card-full__body {
    padding: var(--space-6);
  }
  .service-card-full__icon {
    width: 48px;
    height: 48px;
    border-radius: var(--radius-md);
    background: rgba(var(--color-secondary-rgb), 0.12);
    color: var(--color-secondary);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: var(--space-4);
  }
  .service-card-full h3 {
    font-size: var(--font-size-xl);
    color: var(--color-primary);
    margin-bottom: var(--space-3);
  }
  .service-card-full__desc {
    font-size: var(--font-size-sm);
    color: var(--color-gray);
    line-height: 1.7;
    margin-bottom: var(--space-4);
  }
  .service-card-full__cta {
    display: inline-flex;
    align-items: center;
    gap: var(--space-2);
    font-family: var(--font-heading);
    font-size: var(--font-size-sm);
    font-weight: 700;
    color: var(--color-secondary);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    transition: color var(--transition-fast);
  }
  .service-card-full__cta:hover { color: var(--color-primary); }

  .services-cta-section {
    text-align: center;
    background: var(--color-light);
  }
  .services-cta-section h2 {
    font-size: var(--fs-h2);
    color: var(--color-primary);
    margin-bottom: var(--space-4);
  }
  .services-cta-section p {
    font-size: var(--font-size-lg);
    color: var(--color-gray);
    max-width: 40rem;
    margin: 0 auto var(--space-8);
  }

  @media (max-width: 600px) {
    .services-grid-full {
      grid-template-columns: 1fr;
    }
  }
</style>

<?php
echo $schemaMarkup;
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ============================ HERO ============================ -->
<section class="hero hero--services" aria-label="Blown Away Salon services">
  <div class="container">
    <h1 class="hero-title">
      Professional <span class="text-accent">Hair &amp; Grooming Services</span> in Louisville
    </h1>
    <p class="hero-answer">
      Blown Away Salon and Bon Air Barbershop deliver expert hair coloring, precision cuts and fades, balayage, beard grooming, and styling from one Poplar Level Road address. Whether you need a standing weekly fade or a complete color transformation, our Louisville stylists and barbers build each service around your look, hair type, and schedule.
    </p>
  </div>
</section>

<!-- ============================ ALL SERVICES GRID ============================ -->
<section class="section" aria-label="Complete service menu">
  <div class="container">

    <div class="services-grid-full">
      <?php
      $serviceImages = [
        'hair-coloring' => 'service-hair-coloring',
        'highlights-balayage' => 'service-balayage',
        'haircuts-styling' => 'service-haircut',
        'mens-cuts-fades' => 'service-mens-fade',
        'beard-trims' => 'service-beard',
        'waxing' => 'service-waxing',
      ];
      $iconMap = [
        'hair-coloring' => 'paint-bucket',
        'highlights-balayage' => 'pen-tool',
        'haircuts-styling' => 'award',
        'mens-cuts-fades' => 'users',
        'beard-trims' => 'badge-check',
        'waxing' => 'star',
      ];
      foreach ($services as $service):
        $imgSlug = $serviceImages[$service['slug']] ?? 'service-hair-coloring';
        $iconName = $iconMap[$service['slug']] ?? 'award';
      ?>
      <article class="service-card-full" data-animate>
        <div class="service-card-full__image">
          <img
            src="/assets/images/<?php echo $imgSlug; ?>.jpg"
            srcset="/assets/images/<?php echo $imgSlug; ?>-480.webp 480w, /assets/images/<?php echo $imgSlug; ?>-960.webp 960w"
            sizes="(max-width: 600px) 100vw, (max-width: 1199px) 50vw, 400px"
            alt="<?php echo htmlspecialchars($service['name']); ?> service at Blown Away Salon, Louisville KY"
            width="600" height="375" loading="lazy">
        </div>
        <div class="service-card-full__body">
          <div class="service-card-full__icon"><?php echo icon($iconName, 24); ?></div>
          <h3><?php echo htmlspecialchars($service['name']); ?></h3>
          <p class="service-card-full__desc"><?php echo htmlspecialchars($service['description']); ?></p>
          <a href="/services/<?php echo $service['slug']; ?>/" class="service-card-full__cta">
            Learn more <?php echo icon('arrow-right', 16); ?>
          </a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<!-- ============================ CTA ============================ -->
<section class="services-cta-section section" aria-label="Book your appointment">
  <div class="container">
    <h2>Ready to book your next look?</h2>
    <p>Walk-ins welcome, or call ahead to lock in your preferred stylist and time at our Louisville salon and barbershop.</p>
    <a href="/contact/" class="btn btn-primary btn-lg">Book Your Appointment</a>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
