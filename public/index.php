<?php
require_once '../includes/init.php';

$pageTitle = 'Beranda';
$bodyClass = 'landing-page';

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 animate-fade-in">
                <h1 class="display-3 fw-bold mb-3">
                    Satu App untuk<br>
                    <span class="text-primary">Semua Kebutuhan</span>
                </h1>
                <p class="lead text-muted mb-4">
                    FlintGo menghadirkan layanan transportasi, pesan antar makanan, belanja kebutuhan, 
                    dan masih banyak lagi dalam satu aplikasi yang mudah dan cepat.
                </p>
                <div class="d-flex gap-3 flex-wrap mb-4">
                    <a href="#" class="btn btn-primary btn-lg rounded-pill px-4 shadow">
                        <i class="fab fa-google-play me-2"></i>Google Play
                    </a>
                    <a href="#" class="btn btn-outline-dark btn-lg rounded-pill px-4">
                        <i class="fab fa-apple me-2"></i>App Store
                    </a>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <div>
                        <h4 class="fw-bold mb-0 text-primary">500K+</h4>
                        <p class="small text-muted mb-0">Pengguna Aktif</p>
                    </div>
                    <div class="vr"></div>
                    <div>
                        <h4 class="fw-bold mb-0 text-primary">50K+</h4>
                        <p class="small text-muted mb-0">Mitra Driver</p>
                    </div>
                    <div class="vr"></div>
                    <div>
                        <h4 class="fw-bold mb-0 text-primary">10K+</h4>
                        <p class="small text-muted mb-0">Merchant</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image position-relative">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=700&fit=crop" 
                         alt="FlintGo App" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute top-0 start-0 p-3">
                        <div class="badge bg-success px-3 py-2 rounded-pill shadow">
                            <i class="fas fa-star me-1"></i> 4.8 Rating
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Layanan FlintGo</h2>
            <p class="text-muted">Berbagai layanan untuk memudahkan aktivitas sehari-hari Anda</p>
        </div>

        <div class="row g-4">
            <!-- FlintRide -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon ride mx-auto">
                        <i class="fas fa-motorcycle"></i>
                    </div>
                    <h5 class="mt-3 mb-2">FlintRide</h5>
                    <p class="text-muted small mb-2">Ojek online cepat dan aman</p>
                    <span class="badge bg-success-subtle text-success">Diskon 30%</span>
                </div>
            </div>

            <!-- FlintCar -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon car mx-auto">
                        <i class="fas fa-car"></i>
                    </div>
                    <h5 class="mt-3 mb-2">FlintCar</h5>
                    <p class="text-muted small mb-2">Mobil untuk perjalanan nyaman</p>
                    <span class="badge bg-primary-subtle text-primary">Diskon 50%</span>
                </div>
            </div>

            <!-- FlintFood -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon food mx-auto">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h5 class="mt-3 mb-2">FlintFood</h5>
                    <p class="text-muted small mb-2">Pesan makanan favorit Anda</p>
                    <span class="badge bg-danger-subtle text-danger">Diskon 50%</span>
                </div>
            </div>

            <!-- FlintMart -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon mart mx-auto">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h5 class="mt-3 mb-2">FlintMart</h5>
                    <p class="text-muted small mb-2">Belanja kebutuhan sehari-hari</p>
                    <span class="badge bg-warning-subtle text-warning">30 Menit</span>
                </div>
            </div>

            <!-- FlintSend -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon ride mx-auto">
                        <i class="fas fa-box"></i>
                    </div>
                    <h5 class="mt-3 mb-2">FlintSend</h5>
                    <p class="text-muted small mb-2">Kirim paket dengan mudah</p>
                    <span class="badge bg-info-subtle text-info">Instant</span>
                </div>
            </div>

            <!-- FlintPay -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon car mx-auto">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <h5 class="mt-3 mb-2">FlintPay</h5>
                    <p class="text-muted small mb-2">Dompet digital terpercaya</p>
                    <span class="badge bg-success-subtle text-success">Cashback</span>
                </div>
            </div>

            <!-- FlintTix -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon food mx-auto">
                        <i class="fas fa-ticket-alt"></i>
                    </div>
                    <h5 class="mt-3 mb-2">FlintTix</h5>
                    <p class="text-muted small mb-2">Tiket event & hiburan</p>
                    <span class="badge bg-purple-subtle text-purple">Promo</span>
                </div>
            </div>

            <!-- More Services -->
            <div class="col-6 col-md-4 col-lg-3">
                <div class="service-card">
                    <div class="service-icon mart mx-auto">
                        <i class="fas fa-ellipsis-h"></i>
                    </div>
                    <h5 class="mt-3 mb-2">Lainnya</h5>
                    <p class="text-muted small mb-2">Masih banyak layanan lainnya</p>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="dashboard.php" class="btn btn-primary btn-lg rounded-pill px-5">
                Lihat Semua Layanan <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Kenapa Pilih FlintGo?</h2>
            <p class="text-muted">Kami berkomitmen memberikan pengalaman terbaik untuk Anda</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-primary bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-shield-alt text-primary fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Aman & Terpercaya</h5>
                        <p class="text-muted small">Sistem keamanan berlapis untuk melindungi setiap transaksi Anda</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-success bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-bolt text-success fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Cepat & Praktis</h5>
                        <p class="text-muted small">Pesan dengan mudah, dapatkan layanan dalam hitungan menit</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-warning bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-tags text-warning fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Harga Terjangkau</h5>
                        <p class="text-muted small">Harga kompetitif dengan banyak promo menarik setiap hari</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center p-4">
                        <div class="icon-wrapper bg-info bg-opacity-10 rounded-circle mx-auto mb-3" style="width: 64px; height: 64px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-headset text-info fs-3"></i>
                        </div>
                        <h5 class="fw-bold">Dukungan 24/7</h5>
                        <p class="text-muted small">Tim customer service siap membantu Anda kapan saja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Promo Section -->
<section id="promo" class="py-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Promo Spesial</h2>
            <p class="text-muted">Jangan lewatkan penawaran menarik dari kami</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=400&h=250&fit=crop" class="card-img-top" alt="Promo 1">
                    <div class="card-body">
                        <span class="badge bg-danger mb-2">FLASH SALE</span>
                        <h5 class="fw-bold">Diskon s.d. 70%</h5>
                        <p class="text-muted mb-3">Berlaku untuk makanan pilihan. Buruan pesan sekarang!</p>
                        <a href="#" class="btn btn-sm btn-primary rounded-pill">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&h=250&fit=crop" class="card-img-top" alt="Promo 2">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">GRATIS ONGKIR</span>
                        <h5 class="fw-bold">Hemat hingga Rp25.000</h5>
                        <p class="text-muted mb-3">Minimum belanja Rp50.000 untuk pengguna baru</p>
                        <a href="#" class="btn btn-sm btn-primary rounded-pill">Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556742111-a301076d9d18?w=400&h=250&fit=crop" class="card-img-top" alt="Promo 3">
                    <div class="card-body">
                        <span class="badge bg-warning mb-2">CASHBACK</span>
                        <h5 class="fw-bold">Cashback 50%</h5>
                        <p class="text-muted mb-3">Untuk transaksi pertama pakai FlintPay</p>
                        <a href="#" class="btn btn-sm btn-primary rounded-pill">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-5 bg-gradient-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-3">Siap Memulai Perjalanan Anda?</h2>
                <p class="mb-0">Download FlintGo sekarang dan nikmati kemudahan dalam satu genggaman</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="dashboard.php" class="btn btn-light btn-lg rounded-pill px-5">
                    Mulai Sekarang <i class="fas fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../app/views/layouts/footer.php'; ?>
