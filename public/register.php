<?php
/**
 * FlintGo - Register API
 * Handles new user registration
 */

require_once __DIR__ . '/../includes/init.php';
include __DIR__ . '/../app/views/layouts/header.php';
include __DIR__ . '/../app/views/layouts/footer.php';

header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Get and sanitize input data
$name = sanitize($_POST['name'] ?? '');
$email = sanitize($_POST['email'] ?? '');
$phone = sanitize($_POST['phone'] ?? '');
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

// Validation
$errors = [];

if (empty($name) || strlen($name) < 3) {
    $errors[] = 'Nama lengkap minimal 3 karakter';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Email tidak valid';
}

if (empty($phone) || !preg_match('/^[0-9]{10,13}$/', $phone)) {
    $errors[] = 'Nomor telepon harus 10-13 digit angka';
}

if (empty($password) || strlen($password) < 6) {
    $errors[] = 'Password minimal 6 karakter';
}

if ($password !== $confirmPassword) {
    $errors[] = 'Password dan konfirmasi password tidak cocok';
}

if (!empty($errors)) {
    echo json_encode([
        'success' => false,
        'message' => implode(', ', $errors)
    ]);
    exit;
}

try {
    $db = Database::getInstance()->getConnection();
    
    // Check if email already exists
    $stmt = $db->prepare("SELECT id FROM users WHERE email = ? LIMIT 1");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        echo json_encode([
            'success' => false,
            'message' => 'Email sudah terdaftar'
        ]);
        exit;
    }
    
    // Check if phone already exists
    $stmt = $db->prepare("SELECT id FROM users WHERE phone = ? LIMIT 1");
    $stmt->bind_param('s', $phone);
    $stmt->execute();
    if ($stmt->get_result()->num_rows > 0) {
        echo json_encode([
            'success' => false,
            'message' => 'Nomor telepon sudah terdaftar'
        ]);
        exit;
    }
    
    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Insert new user with welcome bonus
    $stmt = $db->prepare("
        INSERT INTO users (name, email, phone, password, balance, coins, xp_points, is_verified) 
        VALUES (?, ?, ?, ?, 50000.00, 50, 0, 0)
    ");
    $stmt->bind_param('ssss', $name, $email, $phone, $hashedPassword);
    
    if ($stmt->execute()) {
        $userId = $db->insert_id;
        
        // Create welcome bonus transaction
        $stmt = $db->prepare("
            INSERT INTO wallet_transactions 
            (user_id, transaction_type, amount, balance_before, balance_after, description) 
            VALUES (?, 'bonus', 50000.00, 0, 50000.00, 'Bonus pendaftaran baru')
        ");
        $stmt->bind_param('i', $userId);
        $stmt->execute();
        
        echo json_encode([
            'success' => true,
            'message' => 'Pendaftaran berhasil! Bonus Rp50.000 telah ditambahkan ke akun Anda.',
            'user_id' => $userId
        ]);
    } else {
        throw new Exception('Gagal menyimpan data pengguna');
    }
    
} catch (Exception $e) {
    error_log('Register error: ' . $e->getMessage());
    echo json_encode([
        'success' => false,
        'message' => 'Terjadi kesalahan sistem. Silakan coba lagi.'
    ]);
}
?>
