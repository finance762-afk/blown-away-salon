<?php
/**
 * Contact Page — Blown Away Salon / Bon Air Barbershop
 * Generated 2026-08-06 per v6.2 standards + 2026 TCPA compliance (triple checkbox)
 */

include $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

$currentPage    = 'contact';
$pageTitle      = 'Contact ' . $siteName . ' — Book an Appointment in Louisville, KY';
$pageDescription = 'Book your salon or barbershop appointment at Blown Away Salon/Bon Air Barbershop in Louisville, KY. Call (502) 639-5524 or submit a request online.';
$canonicalUrl   = $siteUrl . '/contact/';
$cssVersion     = '5';
$heroImagePreload = '/assets/images/hero-salon-interior.jpg';

// Breadcrumb schema
$breadcrumbSchema = [
    '@context'  => 'https://schema.org',
    '@type'     => 'BreadcrumbList',
    'itemListElement' => [
        [
            '@type'    => 'ListItem',
            'position' => 1,
            'name'     => 'Home',
            'item'     => $siteUrl . '/',
        ],
        [
            '@type'    => 'ListItem',
            'position' => 2,
            'name'     => 'Contact',
            'item'     => $canonicalUrl,
        ],
    ],
];

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/nav.php';
?>

<main id="main-content">

<!-- ============================================================ -->
<!-- HERO — Question Headline + Hero Answer                       -->
<!-- ============================================================ -->
<section class="hero hero--contact">
  <div class="hero__overlay"></div>
  <div class="hero__noise"></div>
  <div class="hero__content container">
    <p class="eyebrow-label">Get In Touch</p>
    <h1>How do I <span class="text-accent">book an appointment</span> at Blown Away Salon in Louisville?</h1>
    <p class="hero-answer">
      Book your appointment online below, or call <a href="tel:<?php echo $phoneRaw; ?>"><?php echo $phone; ?></a> directly.
      We're located at <?php echo $address['street']; ?> in Louisville, Kentucky, serving all hair types with color, cuts, fades, styling, and beard grooming.
      Walk-ins welcome when chairs are available.
    </p>
  </div>
</section>

<!-- ============================================================ -->
<!-- CONTACT FORM + INFO — 2-Column Layout                        -->
<!-- ============================================================ -->
<section class="section contact-section">
  <div class="container">

    <div class="contact-grid">

      <!-- Left: Contact Form -->
      <div class="contact-form-wrapper">
        <h2>Request an <span class="text-accent">Appointment</span></h2>
        <p class="section-intro">Fill out the form below and we'll get back to you within 24 hours to confirm your booking.</p>

        <form
          action="<?php echo $formAction; ?>"
          method="POST"
          class="contact-form"
          id="contact-form"
        >

          <!-- ========== HIDDEN FIELDS (Formsubmit.co config) ========== -->
          <input type="hidden" name="_next" value="<?php echo $siteUrl; ?>/thank-you">
          <input type="hidden" name="_captcha" value="false">
          <input type="hidden" name="_template" value="table">
          <input type="hidden" name="_subject" value="<?php echo $siteName; ?> — New Appointment Request">
          <input type="hidden" name="_cc" value="<?php echo $leadCcEmail; ?>">

          <!-- ========== HIDDEN FIELDS (TCPA Consent Record) ========== -->
          <input type="hidden" name="consent_version" value="v2.1">
          <input type="hidden" name="consent_page" value="<?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>">

          <!-- ========== HONEYPOT (spam trap) ========== -->
          <input
            type="text"
            name="_honey"
            style="display:none"
            tabindex="-1"
            autocomplete="off"
            aria-hidden="true"
          >

          <!-- ========== VISIBLE FIELDS ========== -->

          <!-- Name -->
          <div class="form-field">
            <input type="text" name="name" id="name" required placeholder=" ">
            <label for="name">Full Name</label>
          </div>

          <!-- Email -->
          <div class="form-field">
            <input type="email" name="email" id="email" required placeholder=" ">
            <label for="email">Email Address</label>
          </div>

          <!-- Phone -->
          <div class="form-field">
            <input type="tel" name="phone" id="phone" required placeholder=" ">
            <label for="phone">Phone Number</label>
          </div>

          <!-- Service Requested -->
          <div class="form-field">
            <select name="service_requested" id="service_requested" required>
              <option value="" disabled selected>Select a Service</option>
              <?php foreach ($services as $service): ?>
                <option value="<?php echo htmlspecialchars($service['name']); ?>">
                  <?php echo htmlspecialchars($service['name']); ?>
                </option>
              <?php endforeach; ?>
              <option value="Not Sure — General Inquiry">Not Sure — General Inquiry</option>
            </select>
            <label for="service_requested">Service Needed</label>
          </div>

          <!-- Message -->
          <div class="form-field form-field--textarea">
            <textarea name="message" id="message" rows="5" placeholder=" "></textarea>
            <label for="message">Message (optional)</label>
          </div>

          <!-- ========== TCPA 2026 CONSENT CHECKBOXES (3 separate, unbundled) ========== -->

          <!-- Checkbox 1: Email Opt-In (OPTIONAL) -->
          <div class="form-field form-field--checkbox">
            <input type="checkbox" name="email_opt_in" id="email-opt-in" value="yes">
            <label for="email-opt-in">
              I'd like to receive promotional emails and appointment reminders from <?php echo $siteName; ?>.
            </label>
          </div>

          <!-- Checkbox 2: SMS Opt-In (OPTIONAL) -->
          <div class="form-field form-field--checkbox">
            <input type="checkbox" name="sms_opt_in" id="sms-opt-in" value="yes">
            <label for="sms-opt-in">
              I consent to receive text messages from <?php echo $siteName; ?> about my appointment request.
              Consent is not a condition of purchase. Message and data rates may apply.
              Reply STOP to unsubscribe, HELP for help.
            </label>
          </div>

          <!-- Checkbox 3: Terms Acceptance (REQUIRED) -->
          <div class="form-field form-field--checkbox tcpa-consent">
            <input type="checkbox" name="terms_accepted" id="terms-accepted" required value="yes">
            <label for="terms-accepted">
              I agree to the
              <a href="/privacy-policy/" target="_blank">Privacy Policy</a> and
              <a href="/terms/" target="_blank">Terms of Service</a>.
            </label>
          </div>

          <button type="submit" class="btn-primary btn-submit">
            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>
            Send Request
          </button>

        </form>
      </div>

      <!-- Right: Contact Info Card -->
      <div class="contact-info-wrapper">

        <!-- Contact Card -->
        <div class="card contact-info-card">
          <h3>Visit Our <span class="text-accent">Salon</span></h3>

          <div class="contact-info-block">
            <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            <div>
              <strong>Address</strong>
              <p>
                <?php echo $address['street']; ?><br>
                <?php echo $address['city'] . ', ' . $address['state'] . ' ' . $address['zip']; ?>
              </p>
            </div>
          </div>

          <div class="contact-info-block">
            <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            <div>
              <strong>Phone</strong>
              <p><a href="tel:<?php echo $phoneRaw; ?>"><?php echo $phone; ?></a></p>
            </div>
          </div>

          <div class="contact-info-block">
            <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            <div>
              <strong>Email</strong>
              <p><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
            </div>
          </div>

          <?php if (!empty($businessHours)): ?>
          <div class="contact-info-block">
            <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            <div>
              <strong>Hours</strong>
              <p><?php echo nl2br(htmlspecialchars($businessHours)); ?></p>
            </div>
          </div>
          <?php endif; ?>

          <a href="tel:<?php echo $phoneRaw; ?>" class="btn-primary btn-full">
            <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call Now
          </a>

        </div>

      </div>

    </div>

  </div>
</section>

<!-- ============================================================ -->
<!-- MAP + DIRECTIONS                                             -->
<!-- ============================================================ -->
<section class="section section--map">
  <div class="container">
    <h2>Find Us in <span class="text-accent">Louisville</span></h2>
    <p class="section-intro">We're located on Poplar Level Road in Louisville, Kentucky. Walk-ins welcome when chairs are available.</p>

    <div class="map-embed-wrapper">
      <?php
        // Strip fixed width/height from embed, add loading + title
        $mapEmbed = str_replace(['width="600"', 'height="450"'], '', $gbpMapEmbed);
        $mapEmbed = str_replace('<iframe', '<iframe loading="lazy" title="Blown Away Salon location map"', $mapEmbed);
        echo $mapEmbed;
      ?>
    </div>

    <div class="map-cta">
      <a href="<?php echo $directionsUrl; ?>" target="_blank" rel="noopener" class="btn-secondary">
        <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="10" r="3"/><path d="M12 21.7C17.3 17 20 13 20 10a8 8 0 1 0-16 0c0 3 2.7 7 8 11.7z"/></svg>
        Get Directions
      </a>
    </div>

  </div>
</section>

<!-- ============================================================ -->
<!-- CTA BANNER                                                   -->
<!-- ============================================================ -->
<section class="cta-banner">
  <div class="container">
    <div class="cta-banner__content">
      <h2>Ready for Your Next <span class="text-accent">Look?</span></h2>
      <p>Book your appointment or call us — we\'re here to make you look your best.</p>
    </div>
    <div class="cta-banner__actions">
      <a href="tel:<?php echo $phoneRaw; ?>" class="btn-primary">
        <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Call <?php echo $phone; ?>
      </a>
    </div>
  </div>
</section>

</main>

<style>
/* ================================================================ */
/* CONTACT PAGE — Page-Specific Styles                             */
/* ================================================================ */

/* ---------- HERO (Contact) ---------- */
.hero--contact {
  position: relative;
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: calc(var(--nav-height) + var(--space-4xl)) var(--space-lg) var(--space-4xl);
  overflow: hidden;
}

.hero--contact::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    circle at 30% 50%,
    rgba(var(--color-secondary-rgb), 0.15) 0%,
    transparent 50%
  );
  pointer-events: none;
}

.hero--contact .hero__overlay,
.hero--contact .hero__noise {
  position: absolute;
  inset: 0;
  pointer-events: none;
}

.hero--contact .hero__noise {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' /%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.08'/%3E%3C/svg%3E");
  opacity: 0.5;
}

.hero--contact .hero__content {
  position: relative;
  z-index: 1;
  max-width: var(--content-width);
  text-align: center;
  margin: 0 auto;
}

.hero--contact h1 {
  font-size: clamp(2rem, 5vw, 3.5rem);
  color: #fff;
  margin-bottom: var(--space-lg);
  text-wrap: balance;
  line-height: 1.1;
}

.hero--contact .hero-answer {
  font-size: 1.125rem;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.9);
  margin-top: var(--space-md);
  max-width: 60ch;
  margin-left: auto;
  margin-right: auto;
}

.hero--contact .hero-answer a {
  color: var(--color-accent);
  text-decoration: underline;
  text-underline-offset: 3px;
  transition: var(--transition);
}

.hero--contact .hero-answer a:hover {
  color: #fff;
}

/* ---------- CONTACT SECTION ---------- */
.contact-section {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg);
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-3xl);
  max-width: var(--max-width);
  margin: 0 auto;
}

@media (min-width: 900px) {
  .contact-grid {
    grid-template-columns: 1.5fr 1fr;
    gap: var(--space-4xl);
  }
}

/* ---------- FORM WRAPPER ---------- */
.contact-form-wrapper h2 {
  font-size: clamp(1.75rem, 4vw, 2.5rem);
  margin-bottom: var(--space-sm);
  color: var(--color-primary);
  text-wrap: balance;
}

.section-intro {
  font-size: 1.125rem;
  color: var(--color-text-light);
  margin-bottom: var(--space-2xl);
  line-height: 1.6;
}

/* ---------- CONTACT FORM ---------- */
.contact-form {
  display: flex;
  flex-direction: column;
  gap: var(--space-lg);
}

/* Floating Label Pattern */
.form-field {
  position: relative;
  display: flex;
  flex-direction: column;
}

.form-field input,
.form-field textarea,
.form-field select {
  font-family: var(--font-body);
  font-size: 1rem;
  padding: 1rem;
  border: 2px solid var(--color-border);
  border-radius: var(--radius);
  background: #fff;
  color: var(--color-text);
  transition: var(--transition);
  outline: none;
}

.form-field input:focus,
.form-field textarea:focus,
.form-field select:focus {
  border-color: var(--color-secondary);
  box-shadow: 0 0 0 3px rgba(var(--color-secondary-rgb), 0.15);
}

.form-field label {
  position: absolute;
  top: 1rem;
  left: 1rem;
  font-size: 1rem;
  color: var(--color-text-light);
  background: #fff;
  padding: 0 0.25rem;
  pointer-events: none;
  transition: var(--transition);
}

.form-field input:focus + label,
.form-field input:not(:placeholder-shown) + label,
.form-field textarea:focus + label,
.form-field textarea:not(:placeholder-shown) + label,
.form-field select:focus + label,
.form-field select:not([value=""]) + label {
  top: -0.6rem;
  left: 0.75rem;
  font-size: 0.875rem;
  color: var(--color-secondary);
}

/* Select dropdown label override */
.form-field select + label {
  top: -0.6rem;
  left: 0.75rem;
  font-size: 0.875rem;
  color: var(--color-secondary);
}

.form-field--textarea textarea {
  resize: vertical;
  min-height: 120px;
}

/* Checkboxes */
.form-field--checkbox {
  display: flex;
  flex-direction: row;
  align-items: flex-start;
  gap: var(--space-sm);
}

.form-field--checkbox input[type="checkbox"] {
  flex-shrink: 0;
  width: 20px;
  height: 20px;
  margin-top: 0.15rem;
  cursor: pointer;
  accent-color: var(--color-secondary);
}

.form-field--checkbox label {
  position: static;
  font-size: 0.9375rem;
  line-height: 1.5;
  color: var(--color-text);
  cursor: pointer;
  padding: 0;
  background: transparent;
}

.form-field--checkbox label a {
  color: var(--color-secondary);
  text-decoration: underline;
  text-underline-offset: 2px;
  transition: var(--transition);
}

.form-field--checkbox label a:hover {
  color: var(--color-primary);
}

.tcpa-consent {
  border-top: 1px solid var(--color-border);
  padding-top: var(--space-md);
  margin-top: var(--space-sm);
}

.tcpa-consent label {
  font-weight: 500;
}

/* Submit Button */
.btn-submit {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: var(--space-sm);
  align-self: flex-start;
  margin-top: var(--space-md);
}

/* ---------- CONTACT INFO CARD ---------- */
.contact-info-card {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  color: #fff;
  padding: var(--space-2xl);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-lg);
  height: fit-content;
  position: sticky;
  top: calc(var(--nav-height) + var(--space-lg));
}

.contact-info-card h3 {
  font-size: 1.75rem;
  margin-bottom: var(--space-xl);
  color: #fff;
}

.contact-info-block {
  display: flex;
  gap: var(--space-md);
  margin-bottom: var(--space-xl);
}

.contact-info-block:last-of-type {
  margin-bottom: var(--space-2xl);
}

.contact-info-block svg {
  flex-shrink: 0;
  color: var(--color-accent);
  margin-top: 0.15rem;
}

.contact-info-block strong {
  display: block;
  font-size: 0.875rem;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  color: var(--color-accent);
  margin-bottom: 0.25rem;
}

.contact-info-block p {
  font-size: 1rem;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.9);
}

.contact-info-block a {
  color: #fff;
  text-decoration: none;
  transition: var(--transition);
}

.contact-info-block a:hover {
  color: var(--color-accent);
  text-decoration: underline;
}

.btn-full {
  width: 100%;
  text-align: center;
}

/* ---------- MAP SECTION ---------- */
.section--map {
  padding: var(--space-4xl) var(--space-lg);
  background: var(--color-bg-alt);
}

.section--map h2 {
  text-align: center;
  font-size: clamp(1.75rem, 4vw, 2.5rem);
  margin-bottom: var(--space-md);
  color: var(--color-primary);
}

.section--map .section-intro {
  text-align: center;
  max-width: 60ch;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: var(--space-2xl);
}

.map-embed-wrapper {
  max-width: 900px;
  margin: 0 auto var(--space-xl);
  border-radius: var(--radius-lg);
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}

.map-embed-wrapper iframe {
  width: 100%;
  height: 450px;
  border: 0;
  display: block;
}

.map-cta {
  text-align: center;
}

/* ---------- CTA BANNER ---------- */
.cta-banner {
  background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
  padding: var(--space-4xl) var(--space-lg);
  position: relative;
  overflow: hidden;
}

.cta-banner::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(
    circle at 70% 50%,
    rgba(var(--color-secondary-rgb), 0.2) 0%,
    transparent 60%
  );
  pointer-events: none;
}

.cta-banner .container {
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: var(--space-xl);
  text-align: center;
}

@media (min-width: 768px) {
  .cta-banner .container {
    flex-direction: row;
    justify-content: space-between;
    text-align: left;
  }
}

.cta-banner__content h2 {
  font-size: clamp(1.75rem, 4vw, 2.5rem);
  color: #fff;
  margin-bottom: var(--space-sm);
  text-wrap: balance;
}

.cta-banner__content p {
  font-size: 1.125rem;
  color: rgba(255, 255, 255, 0.9);
  line-height: 1.6;
}

.cta-banner__actions {
  display: flex;
  gap: var(--space-md);
  flex-wrap: wrap;
  justify-content: center;
}

@media (min-width: 768px) {
  .cta-banner__actions {
    justify-content: flex-end;
  }
}

</style>

<script type="application/ld+json">
<?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
