<?php
/**
 * FlintGo - Helper Functions
 */

// Redirect helper
function redirect($url) {
    header("Location: " . $url);
    exit();
}

// Get current page
function currentPage() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

// Check if page is active
function isActive($page) {
    return currentPage() == $page ? 'active' : '';
}

// Format currency (Indonesian Rupiah)
function formatRupiah($amount) {
    return 'Rp' . number_format($amount, 0, ',', '.');
}

// Format distance
function formatDistance($meters) {
    if ($meters < 1000) {
        return round($meters) . ' m';
    }
    return round($meters / 1000, 1) . ' km';
}

// Time ago function
function timeAgo($timestamp) {
    $time = time() - strtotime($timestamp);
    
    if ($time < 60) {
        return 'Baru saja';
    } elseif ($time < 3600) {
        return floor($time / 60) . ' menit lalu';
    } elseif ($time < 86400) {
        return floor($time / 3600) . ' jam lalu';
    } elseif ($time < 604800) {
        return floor($time / 86400) . ' hari lalu';
    } else {
        return date('d M Y', strtotime($timestamp));
    }
}

// Sanitize input
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Generate random string
function generateCode($length = 8) {
    return strtoupper(substr(md5(uniqid(rand(), true)), 0, $length));
}

// Upload image
function uploadImage($file, $destination = 'uploads/') {
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    $filename = $file['name'];
    $fileTmp = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileExt = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    
    if (!in_array($fileExt, $allowed)) {
        return ['success' => false, 'message' => 'Format file tidak didukung'];
    }
    
    if ($fileSize > 5000000) { // 5MB
        return ['success' => false, 'message' => 'Ukuran file terlalu besar'];
    }
    
    $newFilename = uniqid('', true) . '.' . $fileExt;
    $destination = rtrim($destination, '/') . '/' . $newFilename;
    
    if (move_uploaded_file($fileTmp, $destination)) {
        return ['success' => true, 'filename' => $newFilename, 'path' => $destination];
    }
    
    return ['success' => false, 'message' => 'Gagal upload file'];
}

// Get user IP
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

// Check if user is logged in
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Get logged in user ID
function getUserId() {
    return $_SESSION['user_id'] ?? null;
}

// Flash message
function setFlash($type, $message) {
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}

function getFlash() {
    if (isset($_SESSION['flash'])) {
        $flash = $_SESSION['flash'];
        unset($_SESSION['flash']);
        return $flash;
    }
    return null;
}

// Debug helper
function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

?>
