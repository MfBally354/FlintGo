<?php
// Router untuk PHP built-in server
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Jika request ke root, redirect ke public/
if ($uri === '/') {
    $uri = '/public/index.php';
}

// Jika file ada di public/, serve file tersebut
if (preg_match('/^\/public\//', $uri)) {
    $file = __DIR__ . $uri;
    if (file_exists($file)) {
        return false; // Serve file
    }
}

// Redirect semua request ke public/
if (!preg_match('/^\/public\//', $uri)) {
    $uri = '/public' . $uri;
}

$_SERVER['SCRIPT_NAME'] = $uri;
require __DIR__ . $uri;
