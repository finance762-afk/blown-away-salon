<?php
/**
 * sitemap.php — Dynamic XML sitemap for Blown Away Salon / Bon Air Barbershop
 *
 * Generates a valid sitemap.xml from the $services array in config.php.
 * Served at /sitemap.xml via .htaccess rewrite rule.
 *
 * Phase 4 — v6.2
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';

// Set XML content type header
header('Content-Type: application/xml; charset=utf-8');

// Calculate last modification date (use current date for dynamic sitemap)
$lastmod = date('Y-m-d');

// Build page registry with priority and changefreq
$pages = [
    ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'weekly', 'lastmod' => $lastmod],
    ['loc' => '/services/', 'priority' => '0.9', 'changefreq' => 'monthly', 'lastmod' => $lastmod],
    ['loc' => '/about/', 'priority' => '0.7', 'changefreq' => 'monthly', 'lastmod' => $lastmod],
    ['loc' => '/contact/', 'priority' => '0.8', 'changefreq' => 'monthly', 'lastmod' => $lastmod],
    ['loc' => '/privacy-policy/', 'priority' => '0.3', 'changefreq' => 'yearly', 'lastmod' => $lastmod],
];

// Add all service pages dynamically
foreach ($services as $service) {
    $pages[] = [
        'loc' => '/services/' . $service['slug'] . '/',
        'priority' => '0.8',
        'changefreq' => 'monthly',
        'lastmod' => $lastmod
    ];
}

// Generate XML output
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

foreach ($pages as $page) {
    echo "  <url>\n";
    echo "    <loc>" . htmlspecialchars($siteUrl . $page['loc']) . "</loc>\n";
    echo "    <lastmod>" . $page['lastmod'] . "</lastmod>\n";
    echo "    <changefreq>" . $page['changefreq'] . "</changefreq>\n";
    echo "    <priority>" . $page['priority'] . "</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';
