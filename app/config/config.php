<?php
/**
 * FlintGo - Main Configuration File
 */

// Config adalah tempat

// Application settings
define('APP_NAME', 'FlintGo');
define('APP_VERSION', '1.0.0');
define('APP_URL', 'http://localhost/flintgo-php/public/');

// Path settings
define('ROOT_PATH', dirname(dirname(__DIR__)));
define('APP_PATH', ROOT_PATH . '/app');
define('PUBLIC_PATH', ROOT_PATH . '/public');
define('UPLOAD_PATH', ROOT_PATH . '/uploads');

// Color scheme
define('COLOR_PRIMARY', '#10B981');
define('COLOR_SECONDARY', '#059669');
define('COLOR_BACKGROUND', '#F8FAFC');
define('COLOR_TEXT', '#0F172A');

// Session settings
define('SESSION_NAME', 'flintgo_session');
define('SESSION_LIFETIME', 86400); // 24 hours

// Security
define('SECURE_KEY', 'flintgo_secret_key_2026'); // Change this in production!

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Error reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
