<?php
require_once '../includes/init.php';

$pageTitle = 'FlintRide - Ojek Online';
$bodyClass = 'ride-page';

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Ride Service Page -->
<div class="ride-wrapper bg-light min-vh-100">
    <div class="container py-4">
        
        <!-- Header Section -->
        <div class="mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="dashboard.php" class="btn btn-light rounded-circle me-3" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div>
                    <h4 class="mb-0 fw-bold">FlintRide</h4>
                    <p class="mb-0 small text-muted">Ojek online cepat & aman</p>
                </div>
            </div>
        </div>

        <!-- Promo Banner -->
        <div class="card border-0 shadow-sm mb-4 bg-success text-white">
            <div class="card-body p-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-ticket-alt fs-3 me-3"></i>
                    <div class="flex-fill">
                        <h6 class="mb-1 fw-bold">Diskon 30% untuk pengguna baru!</h6>
                        <p class="mb-0 small">Gunakan kode: NEWRIDE30</p>
                    </div>
                    <span class="badge bg-warning text-dark">-30%</span>
                </div>
            </div>
        </div>

        <!-- Map Container -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-0">
                <div class="map-container bg-light d-flex align-items-center justify-content-center" style="height: 300px; border-radius: 12px; overflow: hidden;">
                    <div class="text-center text-muted">
                        <i class="fas fa-map-marked-alt fs-1 mb-3"></i>
                        <p class="mb-0">Peta akan muncul di sini</p>
                        <small>Lokasi pickup dan tujuan Anda</small>
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
                        <i class="fas fa-circle text-success me-2"></i>Lokasi Penjemputan
                    </label>
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="fas fa-map-marker-alt text-success"></i>
                        </span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Masukkan lokasi penjemputan" value="Jl. Borobudur XII No.24">
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
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Mau kemana?" id="destinationInput">
                    </div>
                </div>

                <!-- Saved Addresses -->
                <div class="saved-addresses d-flex gap-2 mb-3">
                    <button class="btn btn-sm btn-outline-primary rounded-pill">
                        <i class="fas fa-home me-1"></i> Rumah
                    </button>
                    <button class="btn btn-sm btn-outline-primary rounded-pill">
                        <i class="fas fa-building me-1"></i> Kantor
                    </button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill">
                        <i class="fas fa-clock me-1"></i> Riwayat
                    </button>
                </div>

                <!-- Distance & Duration -->
                <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-route text-primary me-2"></i>
                        <span class="small"><strong>3.2 km</strong> · 12 menit</span>
                    </div>
                    <span class="badge bg-success">Tersedia</span>
                </div>
            </div>
        </div>

        <!-- Vehicle Options -->
        <div class="mb-4">
            <h6 class="fw-bold mb-3">Pilih Kendaraan</h6>
            
            <!-- FlintRide Option -->
            <div class="card border-0 shadow-sm mb-3 vehicle-option active">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <div class="vehicle-icon bg-success bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-motorcycle text-success fs-3"></i>
                        </div>
                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-start mb-1">
                                <div>
                                    <h6 class="mb-0 fw-bold">FlintRide</h6>
                                    <small class="text-muted">Ojek motor · 1 penumpang</small>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-0 fw-bold text-success"><?php echo formatRupiah(12000); ?></h6>
                                    <small class="text-decoration-line-through text-muted"><?php echo formatRupiah(17000); ?></small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 mt-2">
                                <span class="badge bg-success-subtle text-success">-30%</span>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-clock me-1"></i>5 min
                                </span>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-star text-warning me-1"></i>4.8
                                </span>
                            </div>
                        </div>
                        <div class="ms-2">
                            <i class="fas fa-check-circle text-success fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FlintRide Plus Option -->
            <div class="card border-0 shadow-sm mb-3 vehicle-option">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center">
                        <div class="vehicle-icon bg-primary bg-opacity-10 rounded-3 p-3 me-3">
                            <i class="fas fa-motorcycle text-primary fs-3"></i>
                        </div>
                        <div class="flex-fill">
                            <div class="d-flex justify-content-between align-items-start mb-1">
                                <div>
                                    <h6 class="mb-0 fw-bold">FlintRide Plus</h6>
                                    <small class="text-muted">Driver berpengalaman</small>
                                </div>
                                <div class="text-end">
                                    <h6 class="mb-0 fw-bold"><?php echo formatRupiah(15000); ?></h6>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 mt-2">
                                <span class="badge bg-warning-subtle text-warning">Premium</span>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-star text-warning me-1"></i>4.9+
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Options -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-shield-alt text-primary me-2"></i>
                        <span class="small fw-bold">PerjalananAman+</span>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="safetySwitch" checked>
                    </div>
                </div>
                
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-comment-dots text-info me-2"></i>
                        <span class="small">Tambah catatan untuk driver</span>
                    </div>
                    <button class="btn btn-sm btn-light" data-bs-toggle="modal" data-bs-target="#notesModal">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Payment Method -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <h6 class="fw-bold mb-3">Metode Pembayaran</h6>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary bg-opacity-10 rounded p-2 me-3">
                            <i class="fas fa-wallet text-primary"></i>
                        </div>
                        <div>
                            <p class="mb-0 fw-bold small">FlintPay</p>
                            <p class="mb-0 small text-muted">Saldo: <?php echo formatRupiah(getUserData('balance') ?? 150000); ?></p>
                        </div>
                    </div>
                    <button class="btn btn-sm btn-light">Ubah</button>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <h6 class="fw-bold mb-3">Ringkasan Pembayaran</h6>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Tarif perjalanan</span>
                    <span class="small"><?php echo formatRupiah(17000); ?></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Diskon (30%)</span>
                    <span class="small text-success">-<?php echo formatRupiah(5000); ?></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="small text-muted">Biaya platform</span>
                    <span class="small"><?php echo formatRupiah(1000); ?></span>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="fw-bold">Total Pembayaran</span>
                    <span class="fw-bold text-primary"><?php echo formatRupiah(13000); ?></span>
                </div>
            </div>
        </div>

    </div>

    <!-- Bottom Order Button -->
    <div class="fixed-bottom bg-white border-top p-3 d-md-none">
        <button class="btn btn-primary w-100 btn-lg rounded-pill" onclick="processOrder()">
            <i class="fas fa-check-circle me-2"></i>Pesan FlintRide - <?php echo formatRupiah(13000); ?>
        </button>
    </div>

    <!-- Desktop Order Button -->
    <div class="container d-none d-md-block mb-4">
        <button class="btn btn-primary w-100 btn-lg rounded-pill" onclick="processOrder()">
            <i class="fas fa-check-circle me-2"></i>Pesan FlintRide - <?php echo formatRupiah(13000); ?>
        </button>
    </div>
</div>

<!-- Notes Modal -->
<div class="modal fade" id="notesModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title fw-bold">Catatan untuk Driver</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" rows="4" placeholder="Contoh: Tolong hubungi saya jika sudah sampai"></textarea>
            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
            </div>
        </div>
    </div>
</div>

<script>
function processOrder() {
    // Show loading
    const btn = event.target;
    const originalText = btn.innerHTML;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Memproses...';
    btn.disabled = true;
    
    // Simulate API call
    setTimeout(() => {
        alert('Pesanan berhasil! Driver sedang mencari...');
        window.location.href = 'order.php';
    }, 2000);
}

// Vehicle option selection
document.querySelectorAll('.vehicle-option').forEach(option => {
    option.addEventListener('click', function() {
        document.querySelectorAll('.vehicle-option').forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
    });
});
</script>

<style>
.vehicle-option {
    cursor: pointer;
    transition: all 0.3s ease;
    border: 2px solid transparent !important;
}

.vehicle-option:hover {
    border-color: var(--primary-color) !important;
    transform: translateY(-2px);
}

.vehicle-option.active {
    border-color: var(--primary-color) !important;
    background-color: #F0FDF4;
}

@media (max-width: 767px) {
    body {
        padding-bottom: 80px;
    }
}
</style>

<?php include '../app/views/components/bottom-nav.php'; ?>
<?php include '../app/views/layouts/footer.php'; ?>
