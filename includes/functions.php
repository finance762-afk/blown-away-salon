<?php
/**
 * functions.php — Helper functions for Blown Away Salon / Bon Air Barbershop
 *
 * Utility functions for navigation state, schema generation, and data formatting.
 * Phase 2 — v6.2
 */

/**
 * Check if current page matches the given page identifier
 *
 * @param string $page Page identifier (e.g., 'home', 'about', 'services')
 * @return bool
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Format phone number for display with consistent styling
 *
 * @param string $phone Phone number (e.g., '(502) 639-5524')
 * @return string Formatted phone number
 */
function formatPhone($phone) {
    return htmlspecialchars($phone);
}

/**
 * Convert service name to URL-friendly slug
 *
 * @param string $name Service name
 * @return string URL slug
 */
function getServiceSlug($name) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name), '-'));
}

/**
 * Convert city name to URL-friendly slug
 *
 * @param string $city City name
 * @return string URL slug
 */
function getAreaSlug($city) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $city), '-'));
}

/**
 * Generate Service schema markup (JSON-LD) for individual service pages
 *
 * @param array $service Service data array with keys: name, description, slug
 * @return string JSON-LD script tag
 */
function generateServiceSchema($service) {
    global $siteName, $siteUrl, $phone, $address, $geo;

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'Service',
        'name' => $service['name'],
        'description' => $service['description'],
        'provider' => [
            '@id' => $siteUrl . '/#organization'
        ],
        'areaServed' => [
            '@type' => 'City',
            'name' => $address['city'],
            'containedInPlace' => [
                '@type' => 'State',
                'name' => $address['state']
            ]
        ]
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate FAQPage schema markup (JSON-LD)
 *
 * @param array $faqs Array of FAQ items, each with 'q' and 'a' keys
 * @return string JSON-LD script tag
 */
function generateFAQSchema($faqs) {
    $mainEntity = [];

    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type' => 'Question',
            'name' => $faq['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['a']
            ]
        ];
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $mainEntity
    ];

    return '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>';
}

/**
 * Generate meta tags for SEO (used in head.php when page-specific values are set)
 *
 * @param string $title Page title
 * @param string $description Meta description
 * @param string $canonical Canonical URL
 * @return array Associative array of meta tag values
 */
function generateMetaTags($title, $description, $canonical) {
    return [
        'title' => htmlspecialchars($title),
        'description' => htmlspecialchars($description),
        'canonical' => htmlspecialchars($canonical)
    ];
}

/**
 * Inline SVG icon helper (v6.2 — NO runtime injection, paste at build time)
 *
 * @param string $name Icon name (matches filename in references/lucide-icons/)
 * @param int $size Width/height in pixels (default 24)
 * @return string SVG markup with aria-hidden and dimensions
 */
function icon($name, $size = 24) {
    $iconPath = $_SERVER['DOCUMENT_ROOT'] . '/references/lucide-icons/' . $name . '.svg';

    if (!file_exists($iconPath)) {
        return '<!-- Icon not found: ' . htmlspecialchars($name) . ' -->';
    }

    $svg = file_get_contents($iconPath);

    // Add aria-hidden and explicit width/height
    $svg = str_replace(
        '<svg',
        '<svg aria-hidden="true" width="' . $size . '" height="' . $size . '"',
        $svg
    );

    return $svg;
}
