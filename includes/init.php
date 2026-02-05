<?php
/**
 * FlintGo - Application Initialization
 * This file bootstraps the entire application
 */

// Load configuration files
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/config/database.php';

// Load helper files
require_once __DIR__ . '/../app/helpers/functions.php';
require_once __DIR__ . '/../app/helpers/session.php';

// Check session timeout
if (isLoggedIn()) {
    checkSessionTimeout();
}

// Set default timezone
date_default_timezone_set('Asia/Jakarta');

?>
