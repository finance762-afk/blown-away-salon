<?php
/**
 * config.php — Global site configuration for Blown Away Salon / Bon Air Barbershop
 *
 * Single source of truth for site-wide variables (NAP, brand, services, SEO).
 * Generated in Phase 1 (Scaffold) from build-plan.json.
 *
 * NOTE: $canonicalUrl is intentionally NOT set here — each page sets its own
 * $canonicalUrl (= $siteUrl . '/path/') before including head.php.
 */

/* ------------------------------------------------------------------ */
/* Identity & Domain                                                   */
/* ------------------------------------------------------------------ */

$slug   = 'blown-away-salon';                 // MUST match build directory name
$domain = 'blown-away-salon.pageone.cloud';   // no production_domain in build-plan → preview domain
$siteUrl = 'https://' . $domain;              // always a valid absolute URL

$siteName = 'Blown Away Salon/Bon Air Barbershop';
$tagline  = 'Where Precision Meets Style';
$industry = 'Hair Salon/ Barber Shop';

$ownerName = 'Tamara Morris';
$tier      = 'basic';

/* ------------------------------------------------------------------ */
/* Contact / NAP                                                       */
/* ------------------------------------------------------------------ */

$phone          = '(502) 639-5524';
$phoneRaw       = '+15026395524';            // tel: / sms: friendly (E.164)
$phoneSecondary = '';
$email          = 'tamaramorris2@gmail.com';

$address = [
    'street' => '4218 Poplar Level Rd',
    'city'   => 'Louisville',
    'state'  => 'KY',
    'zip'    => '40213',
];

$businessHours = '';                          // not provided in intake

$geo = [
    'lat' => 38.198224700000004,
    'lng' => -85.7081789,
];

/* ------------------------------------------------------------------ */
/* Brand Colors — PROVISIONAL (Phase 0 logo analysis not yet run;      */
/* build-plan design.colors was empty). Refine in Phase 2 from logo.   */
/* ------------------------------------------------------------------ */

$colors = [
    'primary'        => '#1c1c22',   // near-black — barbershop/salon sophistication
    'primary_dark'   => '#0e0e12',
    'secondary'      => '#b08d57',   // warm brushed gold
    'accent'         => '#c9a24b',
];

/* ------------------------------------------------------------------ */
/* Business Facts                                                      */
/* ------------------------------------------------------------------ */

$yearsInBusiness = 5;
$yearEstablished = 2021;                       // 2026 - 5
$description = 'Blown Away Salon/Bon Air Barbershop is a hair salon serving Louisville, Kentucky and the surrounding area. Call (502) 639-5524 for more information.';

/* ------------------------------------------------------------------ */
/* SEO Keywords                                                        */
/* ------------------------------------------------------------------ */

$primaryKeyword = 'Hair Coloring';
$secondaryKeywords = [
    'Highlights & Balayage',
    'Beard Trims',
    'Styling & Blowouts',
    'Waxing',
    "Men's haircut Louisville",
    "Women\'s haircut Louisville",
    'Color correction',
    'Balayage Louisville',
];

/* ------------------------------------------------------------------ */
/* Services                                                            */
/* build-plan services[] was empty; derived from SEO keyword clusters  */
/* and the salon/barbershop dual concept. Refine copy in Phase 4.      */
/* ------------------------------------------------------------------ */

$services = [
    [
        'name'        => 'Hair Coloring',
        'slug'        => 'hair-coloring',
        'description' => 'Custom color, root touch-ups, and full-scale color correction for every hair type, done by Louisville color specialists.',
        'keywords'    => ['hair color specialist', 'root touch-up', 'color correction', 'fashion hair color'],
    ],
    [
        'name'        => 'Highlights & Balayage',
        'slug'        => 'highlights-balayage',
        'description' => 'Hand-painted balayage, ombré, highlights, and lowlights for natural, sun-kissed dimension.',
        'keywords'    => ['balayage', 'ombre hair', 'highlights', 'lowlights', 'blonde specialist'],
    ],
    [
        'name'        => 'Haircuts & Styling',
        'slug'        => 'haircuts-styling',
        'description' => "Women\'s, men\'s, and kids\' cuts plus blowouts and event styling tailored to your hair and face.",
        'keywords'    => ['layered haircut', 'bob haircut', 'pixie cut', 'blowout', 'styling'],
    ],
    [
        'name'        => "Men's Cuts & Fades",
        'slug'        => 'mens-cuts-fades',
        'description' => 'Bon Air Barbershop fades, tapers, scissor cuts, and classic men’s styles from experienced barbers.',
        'keywords'    => ['skin fade', 'taper fade', 'buzz cut', 'undercut', 'classic haircut'],
    ],
    [
        'name'        => 'Beard Trims & Grooming',
        'slug'        => 'beard-trims',
        'description' => 'Precision beard shaping, line-ups, and hot-towel grooming to keep your look sharp.',
        'keywords'    => ['beard trim', 'beard grooming', 'line up', 'hot towel'],
    ],
    [
        'name'        => 'Waxing',
        'slug'        => 'waxing',
        'description' => 'Facial and brow waxing services for clean, defined finishing touches.',
        'keywords'    => ['brow wax', 'facial waxing', 'waxing Louisville'],
    ],
];

/* ------------------------------------------------------------------ */
/* Service Areas                                                       */
/* ------------------------------------------------------------------ */

$serviceAreas = [
    'Louisville',
];

/* ------------------------------------------------------------------ */
/* Social & Third-Party Profiles                                       */
/* ------------------------------------------------------------------ */

$socialLinks = [
    'google' => 'https://maps.google.com/?cid=8279459367918226907',
];

$gbpPlaceId       = 'ChIJ35j8pfUMaYgR280LvW2M5nI';
$gbpMapEmbed      = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.2313087751777!2d-85.7081789!3d38.198224700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88690cf5a5fc98df%3A0x72e68c6dbd0bcddb!2sBlown%20Away%20Salon!5e1!3m2!1sen!2sus!4v1786055020438!5m2!1sen!2sus" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>';
$directionsUrl    = 'https://www.google.com/maps/dir/?api=1&destination=place_id:ChIJ35j8pfUMaYgR280LvW2M5nI';
$reviewRequestUrl = 'https://search.google.com/local/writereview?placeid=ChIJ35j8pfUMaYgR280LvW2M5nI';
$gbpProfileUrl    = 'https://maps.google.com/?cid=8279459367918226907';

/* ------------------------------------------------------------------ */
/* Forms & Analytics                                                   */
/* ------------------------------------------------------------------ */

$formAction   = 'https://formsubmit.co/tamaramorris2@gmail.com';
$leadCcEmail  = 'CustomerService@pageoneinsights.com';
$acceptsSms   = false;                         // no SMS "Text Us" button on sticky bar

$googleAnalyticsId = 'G-XXXXXXXXXX';           // placeholder — replace post-launch
