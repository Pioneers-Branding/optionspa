<?php
// router.php - clean URLs for the PHP built-in server.
// Mirrors .htaccess so local dev matches production.
//
//   php -S localhost:8000 -t . router.php              (site at the root)
//   php -S localhost:8000 -t .. site/router.php        (site in a subfolder)
//
// Canonical URL form is /spravato-therapy - no .php, no trailing slash.
// Everything else 301s to it. The no-trailing-slash rule matters: page assets
// are directory-relative (wp-content/...), so a URL ending in / would make the
// browser resolve them one level too deep.

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$qs  = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$q   = $qs === null ? '' : '?' . $qs;

// Base path this site is mounted at ('' at the docroot, '/site' in a subfolder).
$norm = function ($p) { return rtrim(str_replace('\\', '/', realpath($p)), '/'); };
$base = substr($norm(__DIR__), strlen($norm($_SERVER['DOCUMENT_ROOT'])));

// Path relative to the site folder.
$path = $uri;
if ($base !== '' && strpos($path, $base) === 0) {
    $path = substr($path, strlen($base));
}
$path = ltrim($path, '/');
$hadSlash = $path !== '' && substr($path, -1) === '/';
$clean = trim($path, '/');

$go = function ($to) use ($base, $q) {
    header('Location: ' . $base . '/' . ltrim($to, '/') . $q, true, 301);
    exit;
};
$serve = function ($file) {
    require __DIR__ . '/' . $file;
    return true;
};
$exists = function ($file) { return is_file(__DIR__ . '/' . $file); };

// includes/ holds HTML fragments, not pages
if (strpos($clean, 'includes/') === 0) { http_response_code(403); echo 'Forbidden'; return true; }

// real static asset -> let the built-in server handle it
if ($clean !== '' && $exists($clean) && substr($clean, -4) !== '.php') { return false; }

// home
if ($clean === '' && !$hadSlash) { return $serve('index.php'); }
if ($clean === '')               { return $serve('index.php'); }
if ($clean === 'index.php' || $clean === 'index') { $go(''); }

// strip .php
if (substr($clean, -4) === '.php' && strpos($clean, 'wp-') !== 0) { $go(substr($clean, 0, -4)); }

// old WordPress nested URLs -> flat canonical
$nested = [
    '2026/05' => '2026-05', '2026/06' => '2026-06',
    '2026/07' => '2026-07', '2026/08' => '2026-08',
    'category/adhd' => 'category-adhd',
    'category/anxiety' => 'category-anxiety',
    'category/blog' => 'category-blog',
    'category/casino' => 'category-casino',
    'category/casino-utan-svensk-licens' => 'category-casino-utan-svensk-licens',
    'category/mental-health' => 'category-mental-health',
    'category/mental-health/page/2' => 'category-mental-health-page-2',
    'category/ocd' => 'category-ocd',
    'category/spravato' => 'category-spravato',
    'category/tms-therapy' => 'category-tms-therapy',
    'category/tms-therapy/page/2' => 'category-tms-therapy-page-2',
    'elementor-hf/footer' => 'elementor-hf-footer',
    'elementor-hf/header' => 'elementor-hf-header',
    'location/reading' => 'location-reading',
];
if (isset($nested[$clean])) { $go($nested[$clean]); }

// date archives that were never exported -> home
if (preg_match('#^(?:19|20)\d{2}/\d{2}$#', $clean)) { $go(''); }

// /blog/page/N -> blog
if (preg_match('#^blog/page/\d+$#', $clean)) { $go('blog'); }

// retired URLs -> nearest live page
$retired = [
    'anxiety-treatment-reading-pa' => 'anxiety-treatment',
    'bipolar-affective-disorder'   => 'bipolar-disorder',
    'contact-us'                   => 'contact',
    'depression-treatment-reading-pa' => 'depression',
    'depression-treatment'         => 'depression',
    'how-tms-therapy-helps-treat-depression' => 'how-does-tms-therapy-help-in-the-treatment-of-depression',
    'insurance-coverage'           => 'insurances-accepted',
    'insurance-plans'              => 'insurances-accepted',
    'ocd-treatment'                => 'ocd',
    'psychiatrist-in-reading-pa'   => 'location-reading',
    'ptsd-treatment'               => 'ptsd',
    'tms-therapy-reading-pa'       => 'tms-therapy-reading',
];
if (isset($retired[$clean])) { $go($retired[$clean]); }

// drop a trailing slash
if ($hadSlash) { $go($clean); }

// serve the canonical URL from its flat file
if ($exists($clean . '.php')) { return $serve($clean . '.php'); }

http_response_code(404);
return $exists('404.php') ? $serve('404.php') : (print('404 Not Found') && true);
