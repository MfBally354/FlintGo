<?php
/**
 * FlintGo - Session Management
 */

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_name(SESSION_NAME);
    session_start();
}

// Session helper functions
function setSession($key, $value) {
    $_SESSION[$key] = $value;
}

function getSession($key, $default = null) {
    return $_SESSION[$key] ?? $default;
}

function destroySession($key = null) {
    if ($key === null) {
        session_destroy();
    } else {
        unset($_SESSION[$key]);
    }
}

// User session functions
function loginUser($userId, $userData = []) {
    $_SESSION['user_id'] = $userId;
    $_SESSION['user_data'] = $userData;
    $_SESSION['logged_in'] = true;
    $_SESSION['login_time'] = time();
}

function logoutUser() {
    session_destroy();
    redirect('index.php');
}

function getUserData($key = null) {
    if ($key === null) {
        return $_SESSION['user_data'] ?? [];
    }
    return $_SESSION['user_data'][$key] ?? null;
}

// Check session timeout
function checkSessionTimeout() {
    if (isset($_SESSION['login_time'])) {
        $elapsed = time() - $_SESSION['login_time'];
        if ($elapsed > SESSION_LIFETIME) {
            logoutUser();
        }
    }
}

// Regenerate session ID for security
function regenerateSession() {
    session_regenerate_id(true);
}

?>
