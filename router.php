<?php
// router.php - Handles clean URLs for the PHP built-in server
// Emulates the .htaccess rules

$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Serve static files as-is
if (preg_match('/\.(?:png|jpg|jpeg|gif|webp|css|js|mp4|webm|vtt|html|ico|svg|woff|woff2|ttf|eot)$/', $uri)) {
    return false;
}

$path = trim($uri, '/');

// Rule 5: Nested URLs
$nested = [
    '2026/05' => '2026-05.php',
    '2026/06' => '2026-06.php',
    '2026/07' => '2026-07.php',
    '2026/08' => '2026-08.php',
    'category/adhd' => 'category-adhd.php',
    'category/anxiety' => 'category-anxiety.php',
    'category/blog' => 'category-blog.php',
    'category/casino' => 'category-casino.php',
    'category/casino-utan-svensk-licens' => 'category-casino-utan-svensk-licens.php',
    'category/mental-health' => 'category-mental-health.php',
    'category/mental-health/page/2' => 'category-mental-health-page-2.php',
    'category/ocd' => 'category-ocd.php',
    'category/spravato' => 'category-spravato.php',
    'category/tms-therapy' => 'category-tms-therapy.php',
    'category/tms-therapy/page/2' => 'category-tms-therapy-page-2.php',
    'elementor-hf/footer' => 'elementor-hf-footer.php',
    'elementor-hf/header' => 'elementor-hf-header.php',
    'location/reading' => 'location-reading.php'
];

if (isset($nested[$path]) && file_exists(__DIR__ . '/' . $nested[$path])) {
    require __DIR__ . '/' . $nested[$path];
    return true;
}

// Rule 7: flat pages /foo/ -> foo.php
if ($path !== '') {
    $parts = explode('/', $path);
    if (count($parts) === 1) {
        $file = $parts[0] . '.php';
        if (file_exists(__DIR__ . '/' . $file)) {
            require __DIR__ . '/' . $file;
            return true;
        }
    }
}

// Default to index.php if root
if ($path === '' || $path === 'index.php') {
    require __DIR__ . '/index.php';
    return true;
}

// Default 404
http_response_code(404);
if (file_exists(__DIR__ . '/404.php')) {
    require __DIR__ . '/404.php';
} else {
    echo "404 Not Found";
}
return true;
