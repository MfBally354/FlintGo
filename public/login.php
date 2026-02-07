<?php
require_once __DIR__ . '/../includes/init.php'; //dibuat dir agar tidak error OK!

// Redirect if already logged in
if(isLoggedIn()) {
    redirect('dashboard.php');
}

$pageTitle = 'Masuk';
$bodyClass = 'login-page';

include '../app/views/layouts/header.php';
?>

<!-- Login Page -->
<div class="login-wrapper min-vh-100 d-flex align-items-center" style="background: linear-gradient(135deg, #F0FDF4 0%, #DCFCE7 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                
                <!-- Logo & Welcome -->
                <div class="text-center mb-4">
                    <div class="brand-logo mb-3">
                        <i class="fas fa-bolt text-primary" style="font-size: 48px;"></i>
                    </div>
                    <h2 class="fw-bold">
                        Flint<span class="text-primary">Go</span>
                    </h2>
                    <p class="text-muted">Masuk untuk melanjutkan</p>
                </div>

                <!-- Login Card -->
                <div class="card border-0 shadow-lg rounded-4">
                    <div class="card-body p-4">
                        
                        <!-- Error Alert -->
                        <div id="errorAlert" class="alert alert-danger alert-dismissible fade" role="alert" style="display: none;">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            <span id="errorMessage"></span>
                            <button type="button" class="btn-close" onclick="hideError()"></button>
                        </div>

                        <!-- Login Form -->
                        <form id="loginForm" onsubmit="handleLogin(event)">
                            
                            <!-- Email/Phone -->
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Email atau No. Telepon</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-user text-muted"></i>
                                    </span>
                                    <input type="text" class="form-control border-start-0 ps-0" 
                                           id="emailOrPhone" name="emailOrPhone" 
                                           placeholder="Masukkan email atau nomor telepon"
                                           required>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label class="form-label fw-bold small">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        <i class="fas fa-lock text-muted"></i>
                                    </span>
                                    <input type="password" class="form-control border-start-0 ps-0" 
                                           id="password" name="password" 
                                           placeholder="Masukkan password"
                                           required>
                                    <button class="btn btn-outline-secondary border-start-0" type="button" 
                                            onclick="togglePassword()">
                                        <i class="fas fa-eye" id="toggleIcon"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberMe">
                                    <label class="form-check-label small" for="rememberMe">
                                        Ingat saya
                                    </label>
                                </div>
                                <a href="forgot-password.php" class="text-primary text-decoration-none small">
                                    Lupa password?
                                </a>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary w-100 btn-lg rounded-pill mb-3" id="loginBtn">
                                <i class="fas fa-sign-in-alt me-2"></i>Masuk
                            </button>

                            <!-- Demo Credentials Info -->
                            <div class="alert alert-info py-2 small" role="alert">
                                <strong>Demo:</strong> Email: <code>ahmad.fauzi@email.com</code> | Pass: <code>password</code>
                            </div>

                        </form>

                        <!-- Divider -->
                        <div class="position-relative my-4">
                            <hr>
                            <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 small text-muted">
                                atau
                            </span>
                        </div>

                        <!-- Social Login -->
                        <div class="d-grid gap-2 mb-3">
                            <button class="btn btn-outline-secondary rounded-pill" onclick="alert('Fitur Google Login akan segera hadir!')">
                                <i class="fab fa-google me-2"></i>Masuk dengan Google
                            </button>
                            <button class="btn btn-outline-secondary rounded-pill" onclick="alert('Fitur Facebook Login akan segera hadir!')">
                                <i class="fab fa-facebook me-2"></i>Masuk dengan Facebook
                            </button>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="small text-muted mb-0">
                                Belum punya akun? 
                                <a href="register.php" class="text-primary text-decoration-none fw-bold">
                                    Daftar Sekarang
                                </a>
                            </p>
                        </div>

                    </div>
                </div>

                <!-- Back to Home -->
                <div class="text-center mt-4">
                    <a href="index.php" class="text-muted text-decoration-none">
                        <i class="fas fa-arrow-left me-2"></i>Kembali ke Beranda
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.getElementById('toggleIcon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    }
}

function showError(message) {
    const errorAlert = document.getElementById('errorAlert');
    const errorMessage = document.getElementById('errorMessage');
    errorMessage.textContent = message;
    errorAlert.style.display = 'block';
    errorAlert.classList.add('show');
}

function hideError() {
    const errorAlert = document.getElementById('errorAlert');
    errorAlert.classList.remove('show');
    setTimeout(() => {
        errorAlert.style.display = 'none';
    }, 150);
}

async function handleLogin(event) {
    event.preventDefault();
    
    const loginBtn = document.getElementById('loginBtn');
    const originalHTML = loginBtn.innerHTML;
    
    // Show loading
    loginBtn.disabled = true;
    loginBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Memproses...';
    
    // Get form data
    const formData = new FormData(event.target);
    
    try {
        // Send login request
        const response = await fetch('api/auth/login.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        if (result.success) {
            // Success - redirect to dashboard
            loginBtn.innerHTML = '<i class="fas fa-check me-2"></i>Berhasil!';
            loginBtn.classList.remove('btn-primary');
            loginBtn.classList.add('btn-success');
            
            setTimeout(() => {
                window.location.href = 'dashboard.php';
            }, 500);
        } else {
            // Show error
            showError(result.message || 'Login gagal. Silakan coba lagi.');
            loginBtn.disabled = false;
            loginBtn.innerHTML = originalHTML;
        }
    } catch (error) {
        console.error('Login error:', error);
        showError('Terjadi kesalahan. Silakan coba lagi.');
        loginBtn.disabled = false;
        loginBtn.innerHTML = originalHTML;
    }
}

// Auto-hide error after 5 seconds
setTimeout(() => {
    const errorAlert = document.getElementById('errorAlert');
    if (errorAlert.classList.contains('show')) {
        hideError();
    }
}, 5000);
</script>

<style>
.login-wrapper {
    background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="%2310B981" fill-opacity="0.1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,122.7C672,117,768,139,864,138.7C960,139,1056,117,1152,106.7C1248,96,1344,96,1392,96L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>');
    background-size: cover;
    background-position: bottom;
}

.brand-logo {
    animation: bounce 2s infinite;
}

@keyframes bounce {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

.card {
    backdrop-filter: blur(10px);
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 0.25rem rgba(16, 185, 129, 0.25);
}

.input-group-text {
    border-right: 0;
}

.form-control {
    border-left: 0;
}

.form-control:focus + .input-group-text,
.input-group-text:has(+ .form-control:focus) {
    border-color: var(--primary-color);
}
</style>

<?php include '../app/views/layouts/footer.php'; ?>
