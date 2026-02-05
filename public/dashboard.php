<?php
require_once '../includes/init.php';

$pageTitle = 'Dashboard';
$bodyClass = 'dashboard-page';
$pageCSS = 'dashboard.css';
$pageJS = 'dashboard.js';

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Main Dashboard -->
<div class="dashboard-wrapper bg-light min-vh-100 pb-5">
    <div class="container-fluid px-0">
        
        <!-- Hero Banner -->
        <div class="hero-banner bg-gradient-primary text-white py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <h5 class="mb-1">Hai, <?php echo getUserData('name') ?? 'Pengguna'; ?>! 👋</h5>
                        <p class="mb-0 small opacity-75">Mau kemana hari ini?</p>
                    </div>
                    <div class="col-auto">
                        <div class="wallet-info d-flex align-items-center bg-white bg-opacity-25 rounded-pill px-3 py-2">
                            <i class="fas fa-wallet me-2"></i>
                            <span class="fw-bold"><?php echo formatRupiah(getUserData('balance') ?? 150000); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="container">
            <div class="search-bar-wrapper mt-n3 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-3">
                        <div class="input-group">
                            <span class="input-group-text bg-white border-0">
                                <i class="fas fa-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-0 shadow-none" placeholder="Cari layanan, makanan, atau lokasi...">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Voucher -->
            <div class="promo-section mb-4">
                <div class="card border-primary bg-gradient-light">
                    <div class="card-body py-2 px-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-ticket-alt text-primary fs-4 me-3"></i>
                            <div class="flex-fill">
                                <h6 class="mb-0 fw-bold">Lebih aman pakai PerjalananAman+</h6>
                                <p class="mb-0 small text-muted">Voucher s.d. 10rb jika penjemputan tertunda. Aktifin sekarang, yuk!</p>
                            </div>
                            <i class="fas fa-chevron-right text-muted"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Services Grid -->
            <div class="services-grid mb-4">
                <div class="row g-3">
                    <!-- FlintRide -->
                    <div class="col-3">
                        <a href="ride.php" class="service-item text-decoration-none">
                            <div class="service-icon bg-success bg-opacity-10">
                                <i class="fas fa-motorcycle text-success"></i>
                                <span class="badge bg-success position-absolute top-0 end-0 m-1">-30%</span>
                            </div>
                            <h6 class="service-name mt-2 mb-0">FlintRide</h6>
                        </a>
                    </div>

                    <!-- FlintCar -->
                    <div class="col-3">
                        <a href="car.php" class="service-item text-decoration-none">
                            <div class="service-icon bg-success bg-opacity-10">
                                <i class="fas fa-car text-success"></i>
                                <span class="badge bg-success position-absolute top-0 end-0 m-1">-50%</span>
                            </div>
                            <h6 class="service-name mt-2 mb-0">FlintCar</h6>
                        </a>
                    </div>

                    <!-- FlintFood -->
                    <div class="col-3">
                        <a href="food.php" class="service-item text-decoration-none">
                            <div class="service-icon bg-danger bg-opacity-10">
                                <i class="fas fa-utensils text-danger"></i>
                                <span class="badge bg-danger position-absolute top-0 end-0 m-1">-50%</span>
                            </div>
                            <h6 class="service-name mt-2 mb-0">FlintFood</h6>
                        </a>
                    </div>

                    <!-- FlintMart -->
                    <div class="col-3">
                        <a href="mart.php" class="service-item text-decoration-none">
                            <div class="service-icon bg-warning bg-opacity-10">
                                <i class="fas fa-shopping-cart text-warning"></i>
                                <span class="badge bg-warning position-absolute top-0 end-0 m-1">30MIN</span>
                            </div>
                            <h6 class="service-name mt-2 mb-0">FlintMart</h6>
                        </a>
                    </div>

                    <!-- FlintSend -->
                    <div class="col-3">
                        <a href="#" class="service-item text-decoration-none">
                            <div class="service-icon bg-success bg-opacity-10">
                                <i class="fas fa-box text-success"></i>
                            </div>
                            <h6 class="service-name mt-2 mb-0">FlintSend</h6>
                        </a>
                    </div>

                    <!-- FlintPay -->
                    <div class="col-3">
                        <a href="#" class="service-item text-decoration-none">
                            <div class="service-icon bg-primary bg-opacity-10">
                                <i class="fas fa-credit-card text-primary"></i>
                            </div>
                            <h6 class="service-name mt-2 mb-0">FlintPay</h6>
                        </a>
                    </div>

                    <!-- FlintTix -->
                    <div class="col-3">
                        <a href="#" class="service-item text-decoration-none">
                            <div class="service-icon bg-info bg-opacity-10">
                                <i class="fas fa-ticket-alt text-info"></i>
                            </div>
                            <h6 class="service-name mt-2 mb-0">FlintTix</h6>
                        </a>
                    </div>

                    <!-- Lainnya -->
                    <div class="col-3">
                        <a href="#" class="service-item text-decoration-none">
                            <div class="service-icon bg-secondary bg-opacity-10">
                                <i class="fas fa-th text-secondary"></i>
                            </div>
                            <h6 class="service-name mt-2 mb-0">Lainnya</h6>
                        </a>
                    </div>
                </div>
            </div>

            <!-- FlintPay Section -->
            <div class="flintpay-section mb-4">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center">
                                <div class="icon-wrapper bg-primary bg-opacity-10 rounded p-2 me-2">
                                    <i class="fas fa-wallet text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0"><?php echo formatRupiah(getUserData('balance') ?? 150000); ?></h6>
                                    <p class="mb-0 small text-muted">100 coins</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary rounded-pill">
                                    <i class="fas fa-arrow-up me-1"></i> Bayar
                                </button>
                                <button class="btn btn-sm btn-outline-primary rounded-pill">
                                    <i class="fas fa-plus me-1"></i> Top Up
                                </button>
                                <button class="btn btn-sm btn-outline-primary rounded-pill">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- XP Progress -->
            <div class="xp-progress mb-4">
                <div class="card border-0 shadow-sm bg-gradient-light">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="small fw-bold">121 XP lagi dapat Platinum</span>
                            <span class="small text-primary">Bronze</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-primary" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promo Banner Slider -->
            <div class="promo-slider mb-4">
                <h6 class="fw-bold mb-3">Promo yang wajib dicek</h6>
                <div id="promoCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card border-0 shadow-sm">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&h=400&fit=crop" class="card-img-top" alt="Promo 1">
                                <div class="card-body">
                                    <span class="badge bg-success mb-2">FLASH SALE</span>
                                    <h6 class="fw-bold">Diskon s.d. 70%</h6>
                                    <p class="small text-muted mb-0">Berlaku untuk makanan pilihan</p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card border-0 shadow-sm">
                                <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=800&h=400&fit=crop" class="card-img-top" alt="Promo 2">
                                <div class="card-body">
                                    <span class="badge bg-danger mb-2">GRATIS ONGKIR</span>
                                    <h6 class="fw-bold">Hemat hingga Rp25.000</h6>
                                    <p class="small text-muted mb-0">Min. belanja Rp50.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <!-- Recent Orders -->
            <?php if(isLoggedIn()): ?>
            <div class="recent-orders mb-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h6 class="fw-bold mb-0">Pesanan Terakhir</h6>
                    <a href="order.php" class="text-primary text-decoration-none small">Lihat Semua <i class="fas fa-chevron-right"></i></a>
                </div>
                <div class="card border-0 shadow-sm mb-2">
                    <div class="card-body p-3">
                        <div class="d-flex">
                            <div class="icon-wrapper bg-danger bg-opacity-10 rounded p-2 me-3">
                                <i class="fas fa-utensils text-danger"></i>
                            </div>
                            <div class="flex-fill">
                                <h6 class="mb-1">FlintFood</h6>
                                <p class="mb-1 small text-muted">Ayam Goreng Crispy, Es Teh Manis</p>
                                <p class="mb-0 small"><span class="badge bg-success">Selesai</span></p>
                            </div>
                            <div class="text-end">
                                <p class="mb-0 fw-bold"><?php echo formatRupiah(45000); ?></p>
                                <p class="mb-0 small text-muted">2 jam lalu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
</div>

<!-- Bottom Navigation (Mobile) -->
<?php include '../app/views/components/bottom-nav.php'; ?>

<?php include '../app/views/layouts/footer.php'; ?>
