<?php
require_once '../includes/init.php';

$pageTitle = 'Profil Saya';
$bodyClass = 'profile-page';

// Simulate logged in user data
$_SESSION['user_data'] = [
    'name' => 'Ahmad Fauzi',
    'email' => 'ahmad.fauzi@email.com',
    'phone' => '081234567890',
    'balance' => 150000,
    'member_since' => '2024-01-15'
];

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Profile Page -->
<div class="profile-wrapper bg-light min-vh-100">
    <div class="container py-4">
        
        <!-- Profile Header -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <img src="https://ui-avatars.com/api/?name=<?php echo urlencode(getUserData('name')); ?>&background=10B981&color=fff&size=80" 
                             class="rounded-circle shadow" width="80" height="80" alt="Profile">
                    </div>
                    <div class="col">
                        <h5 class="fw-bold mb-1"><?php echo getUserData('name'); ?></h5>
                        <p class="mb-1 text-muted small"><?php echo getUserData('email'); ?></p>
                        <p class="mb-0 text-muted small">
                            <i class="fas fa-phone me-1"></i><?php echo getUserData('phone'); ?>
                        </p>
                    </div>
                    <div class="col-auto">
                        <a href="edit-profile.php" class="btn btn-outline-primary btn-sm rounded-pill">
                            <i class="fas fa-edit me-1"></i>Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Membership Card -->
        <div class="card border-0 shadow-sm mb-4" style="background: linear-gradient(135deg, #10B981, #059669);">
            <div class="card-body p-4 text-white">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <span class="badge bg-warning text-dark mb-2">Bronze Member</span>
                        <h6 class="fw-bold mb-0">FlintGo Rewards</h6>
                    </div>
                    <i class="fas fa-medal fs-2 opacity-50"></i>
                </div>
                <div class="row g-3">
                    <div class="col-6">
                        <small class="d-block opacity-75">Total XP</small>
                        <h5 class="fw-bold mb-0">245 XP</h5>
                    </div>
                    <div class="col-6">
                        <small class="d-block opacity-75">Member Sejak</small>
                        <h5 class="fw-bold mb-0">Jan 2024</h5>
                    </div>
                </div>
                <div class="progress bg-white bg-opacity-25 mt-3" style="height: 8px;">
                    <div class="progress-bar bg-warning" style="width: 45%"></div>
                </div>
                <small class="d-block mt-2 opacity-75">121 XP lagi untuk Silver Member</small>
            </div>
        </div>

        <!-- Wallet Balance -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <small class="text-muted d-block mb-1">FlintPay Balance</small>
                        <h4 class="fw-bold mb-0 text-primary"><?php echo formatRupiah(getUserData('balance')); ?></h4>
                        <small class="text-muted">
                            <i class="fas fa-coins text-warning me-1"></i>100 Coins
                        </small>
                    </div>
                    <div>
                        <button class="btn btn-primary btn-sm rounded-pill me-2">
                            <i class="fas fa-plus me-1"></i>Top Up
                        </button>
                        <button class="btn btn-outline-primary btn-sm rounded-pill">
                            Riwayat
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="row g-3 mb-4">
            <div class="col-4">
                <a href="order.php" class="card border-0 shadow-sm text-decoration-none h-100">
                    <div class="card-body p-3 text-center">
                        <i class="fas fa-receipt text-primary fs-3 mb-2"></i>
                        <p class="mb-0 small fw-bold">Pesanan</p>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="#" class="card border-0 shadow-sm text-decoration-none h-100">
                    <div class="card-body p-3 text-center">
                        <i class="fas fa-ticket-alt text-warning fs-3 mb-2"></i>
                        <p class="mb-0 small fw-bold">Voucher</p>
                    </div>
                </a>
            </div>
            <div class="col-4">
                <a href="#" class="card border-0 shadow-sm text-decoration-none h-100">
                    <div class="card-body p-3 text-center">
                        <i class="fas fa-heart text-danger fs-3 mb-2"></i>
                        <p class="mb-0 small fw-bold">Favorit</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Menu Sections -->
        <div class="mb-3">
            <h6 class="fw-bold mb-3">Akun Saya</h6>
            
            <div class="card border-0 shadow-sm">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-map-marker-alt text-primary me-3"></i>
                            <span>Alamat Tersimpan</span>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-credit-card text-success me-3"></i>
                            <span>Metode Pembayaran</span>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-shield-alt text-info me-3"></i>
                            <span>Keamanan Akun</span>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <h6 class="fw-bold mb-3">Preferensi</h6>
            
            <div class="card border-0 shadow-sm">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-bell text-warning me-3"></i>
                            <span>Notifikasi</span>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-language text-primary me-3"></i>
                            <span>Bahasa</span>
                        </div>
                        <span class="text-muted small">Indonesia <i class="fas fa-chevron-right ms-2"></i></span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-moon text-dark me-3"></i>
                            <span>Dark Mode</span>
                        </div>
                        <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox">
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <h6 class="fw-bold mb-3">Lainnya</h6>
            
            <div class="card border-0 shadow-sm">
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-question-circle text-info me-3"></i>
                            <span>Pusat Bantuan</span>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-file-alt text-secondary me-3"></i>
                            <span>Syarat & Ketentuan</span>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-lock text-warning me-3"></i>
                            <span>Kebijakan Privasi</span>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-info-circle text-primary me-3"></i>
                            <span>Tentang FlintGo</span>
                        </div>
                        <i class="fas fa-chevron-right text-muted"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- App Version -->
        <div class="text-center mb-3">
            <small class="text-muted">FlintGo v1.0.0</small>
        </div>

        <!-- Logout Button -->
        <div class="text-center mb-5">
            <button class="btn btn-outline-danger rounded-pill px-5" onclick="confirmLogout()">
                <i class="fas fa-sign-out-alt me-2"></i>Keluar
            </button>
        </div>

    </div>
</div>

<script>
function confirmLogout() {
    if (confirm('Apakah Anda yakin ingin keluar?')) {
        alert('Berhasil keluar dari akun');
        window.location.href = 'index.php';
    }
}
</script>

<?php include '../app/views/components/bottom-nav.php'; ?>
<?php include '../app/views/layouts/footer.php'; ?>
