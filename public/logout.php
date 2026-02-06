<?php
/**
 * FlintGo - Logout
 * Destroys user session and redirects to homepage
 */

require_once '../includes/init.php';

// Destroy session
logoutUser();

// Redirect to homepage
redirect('index.php');
?>
