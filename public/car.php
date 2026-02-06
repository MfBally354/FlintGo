<?php
require_once '../includes/init.php';

$pageTitle = 'FlintCar - Mobil Online';
$bodyClass = 'car-page';

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Car Service Page -->
<div class="car-wrapper bg-light min-vh-100">
    <div class="container py-4">
        
        <!-- Header Section -->
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="dashboard.php" class="btn btn-light rounded-circle me-3" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div>
                    <h4 class="mb-0 fw-bold">FlintCar</h4>
                    <p class="mb-0 small text-muted">Mobil untuk perjalanan nyaman</p>
                </div>
            </div>
        </div>

        <!-- Promo Banner -->
        <div class="card border-0 shadow-sm mb-4" style="background: linear-gradient(135deg, #3B82F6, #1D4ED8);">
            <div class="card-body p-3 text-white">
                <div class="d-flex align-items-center">
                    <i class="fas fa-gift fs-3 me-3"></i>
                    <div class="flex-fill">
                        <h6 class="mb-1 fw-bold">Diskon 50% untuk 5 perjalanan pertama!</h6>
                        <p class="mb-0 small opacity-75">Khusus pengguna baru FlintCar</p>
                    </div>
                    <span class="badge bg-warning text-dark">-50%</span>
                </div>
            </div>
        </div>

        <!-- Map Container -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-0">
                <div class="map-container bg-light d-flex align-items-center justify-content-center" style="height: 300px; border-radius: 12px; overflow: hidden; position: relative;">
                    <img src="https://api.mapbox.com/styles/v1/mapbox/streets-v11/static/106.8456,-6.2088,12,0/800x300@2x?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw" 
                         alt="Map" class="w-100 h-100" style="object-fit: cover;">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <i class="fas fa-map-marker-alt text-danger fs-1" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Location Input -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <!-- Pickup Location -->
                <div class="mb-3">
                    <label class="form-label fw-bold small text-muted mb-2">
                        <i class="fas fa-circle text-primary me-2"></i>Lokasi Penjemputan
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Lokasi penjemputan" value="Jl. Sudirman No. 123">
                        <button class="btn btn-light border">
                            <i class="fas fa-crosshairs"></i>
                        </button>
                    </div>
                </div>

                <!-- Destination -->
                <div class="mb-3">
                    <label class="form-label fw-bold small text-muted mb-2">
                        <i class="fas fa-map-pin text-danger me-2"></i>Tujuan
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="fas fa-map-marker-alt text-danger"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Mau kemana hari ini?">
                    </div>
                </div>

                <!-- Quick Access -->
                <div class="d-flex gap-2 overflow-auto pb-2">
                    <button class="btn btn-sm btn-outline-primary rounded-pill flex-shrink-0">
                        <i class="fas fa-home me-1"></i> Rumah
                    </button>
                    <button class="btn btn-sm btn-outline-primary rounded-pill flex-shrink-0">
                        <i class="fas fa-briefcase me-1"></i> Kantor
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill flex-shrink-0">
                        <i class="fas fa-hospital me-1"></i> RS Terdekat
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill flex-shrink-0">
                        <i class="fas fa-shopping-bag me-1"></i> Mall
                    </button>
                </div>
            </div>
        </div>

        <!-- Car Type Selection -->
        <div class="mb-4">
            <h6 class="fw-bold mb-3">Pilih Jenis Mobil</h6>
            
            <!-- Economy Car -->
            <div class="card border-0 shadow-sm mb-3 car-option active">
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="car-image text-center">
                                <i class="fas fa-car text-primary" style="font-size: 48px;"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-1 fw-bold">FlintCar Economy</h6>
                            <small class="text-muted d-block mb-2">Toyota Avanza, Daihatsu Xenia</small>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-users me-1"></i>4 kursi
                                </span>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-suitcase me-1"></i>2 koper
                                </span>
                                <span class="badge bg-success-subtle text-success">-50%</span>
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <h6 class="mb-0 fw-bold text-primary"><?php echo formatRupiah(25000); ?></h6>
                            <small class="text-decoration-line-through text-muted"><?php echo formatRupiah(50000); ?></small>
                            <div class="mt-2">
                                <i class="fas fa-check-circle text-primary fs-4"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comfort Car -->
            <div class="card border-0 shadow-sm mb-3 car-option">
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="car-image text-center">
                                <i class="fas fa-car-side text-success" style="font-size: 48px;"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-1 fw-bold">FlintCar Comfort</h6>
                            <small class="text-muted d-block mb-2">Honda CR-V, Toyota Innova</small>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-users me-1"></i>6 kursi
                                </span>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-suitcase me-1"></i>4 koper
                                </span>
                                <span class="badge bg-warning-subtle text-warning">Rekomendasi</span>
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <h6 class="mb-0 fw-bold"><?php echo formatRupiah(45000); ?></h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Premium Car -->
            <div class="card border-0 shadow-sm mb-3 car-option">
                <div class="card-body p-3">
                    <div class="row align-items-center">
                        <div class="col-3">
                            <div class="car-image text-center">
                                <i class="fas fa-car-luxury text-warning" style="font-size: 48px;"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <h6 class="mb-1 fw-bold">FlintCar Premium</h6>
                            <small class="text-muted d-block mb-2">Mercedes, BMW, Alphard</small>
                            <div class="d-flex gap-2 flex-wrap">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-users me-1"></i>4 kursi
                                </span>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-star text-warning me-1"></i>Luxury
                                </span>
                                <span class="badge bg-dark">VIP</span>
                            </div>
                        </div>
                        <div class="col-3 text-end">
                            <h6 class="mb-0 fw-bold"><?php echo formatRupiah(120000); ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Schedule Options -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <h6 class="fw-bold mb-3">Waktu Penjemputan</h6>
                <div class="row g-2">
                    <div class="col-6">
                        <button class="btn btn-primary w-100 active">
                            <i class="fas fa-bolt me-2"></i>Sekarang
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-outline-primary w-100" data-bs-toggle="modal" data-bs-target="#scheduleModal">
                            <i class="fas fa-clock me-2"></i>Jadwalkan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Services -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <h6 class="fw-bold mb-3">Layanan Tambahan</h6>
                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="airportService">
                    <label class="form-check-label d-flex justify-content-between w-100" for="airportService">
                        <span>
                            <i class="fas fa-plane me-2 text-primary"></i>
                            Layanan Bandara (+<?php echo formatRupiah(10000); ?>)
                        </span>
                    </label>
                </div>
                
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="childSeat">
                    <label class="form-check-label d-flex justify-content-between w-100" for="childSeat">
                        <span>
                            <i class="fas fa-baby-carriage me-2 text-info"></i>
                            Kursi Anak (+<?php echo formatRupiah(5000); ?>)
                        </span>
                    </label>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="petFriendly">
                    <label class="form-check-label d-flex justify-content-between w-100" for="petFriendly">
                        <span>
                            <i class="fas fa-paw me-2 text-warning"></i>
                            Pet Friendly (+<?php echo formatRupiah(15000); ?>)
                        </span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Payment Method -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fw-bold mb-1">Metode Pembayaran</h6>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-wallet text-primary me-2"></i>
                            <span class="small">FlintPay - Saldo: <?php echo formatRupiah(getUserData('balance') ?? 150000); ?></span>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-light">Ubah</button>
                </div>
            </div>
        </div>

        <!-- Fare Summary -->
        <div class="card border-0 shadow-sm mb-5">
            <div class="card-body p-3">
                <h6 class="fw-bold mb-3">Rincian Tarif</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Tarif dasar (5.2 km)</span>
                    <span class="small"><?php echo formatRupiah(50000); ?></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Diskon pengguna baru (50%)</span>
                    <span class="small text-success">-<?php echo formatRupiah(25000); ?></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Biaya platform</span>
                    <span class="small"><?php echo formatRupiah(2000); ?></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold">Total Pembayaran</span>
                    <span class="fw-bold text-primary fs-5"><?php echo formatRupiah(27000); ?></span>
                </div>
            </div>
        </div>

    </div>

    <!-- Bottom Order Button -->
    <div class="fixed-bottom bg-white border-top p-3 d-md-none">
        <button class="btn btn-primary w-100 btn-lg rounded-pill shadow" onclick="bookCar()">
            <i class="fas fa-car me-2"></i>Pesan Sekarang - <?php echo formatRupiah(27000); ?>
        </button>
    </div>

    <!-- Desktop Order Button -->
    <div class="container d-none d-md-block mb-4">
        <button class="btn btn-primary w-100 btn-lg rounded-pill shadow" onclick="bookCar()">
            <i class="fas fa-car me-2"></i>Pesan Sekarang - <?php echo formatRupiah(27000); ?>
        </button>
    </div>
</div>

<!-- Schedule Modal -->
<div class="modal fade" id="scheduleModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Jadwalkan Penjemputan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Waktu</label>
                    <input type="time" class="form-control">
                </div>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan Jadwal</button>
            </div>
        </div>
    </div>
</div>

<script>
function bookCar() {
    const btn = event.target;
    const originalHTML = btn.innerHTML;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Mencari driver...';
    btn.disabled = true;
    
    setTimeout(() => {
        alert('Pesanan berhasil! Driver sedang menuju lokasi Anda.');
        window.location.href = 'order.php';
    }, 2000);
}

// Car option selection
document.querySelectorAll('.car-option').forEach(option => {
    option.addEventListener('click', function() {
        document.querySelectorAll('.car-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

<style>
.car-option {
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent !important;
}

.car-option:hover {
    border-color: var(--primary-color) !important;
    transform: translateY(-2px);
}

.car-option.active {
    border-color: var(--primary-color) !important;
    background-color: #EFF6FF;
}

@media (max-width: 767px) {
    body {
        padding-bottom: 90px;
    }
}
</style>

<?php include '../app/views/components/bottom-nav.php'; ?>
<?php include '../app/views/layouts/footer.php'; ?>
