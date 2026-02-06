<?php
require_once '../includes/init.php';

$pageTitle = 'Pesanan Saya';
$bodyClass = 'order-page';

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Order Page -->
<div class="order-wrapper bg-light min-vh-100">
    
    <!-- Header -->
    <div class="bg-white sticky-top shadow-sm">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="dashboard.php" class="btn btn-light rounded-circle me-3" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h5 class="mb-0 fw-bold">Aktivitas Pesanan</h5>
            </div>
        </div>
    </div>

    <div class="container py-4">
        
        <!-- Tab Navigation -->
        <div class="mb-4">
            <ul class="nav nav-pills nav-fill gap-2" id="orderTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-pill" id="ongoing-tab" data-bs-toggle="pill" 
                            data-bs-target="#ongoing" type="button">
                        Berlangsung
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill" id="history-tab" data-bs-toggle="pill" 
                            data-bs-target="#history" type="button">
                        Riwayat
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="orderTabsContent">
            
            <!-- Ongoing Orders Tab -->
            <div class="tab-pane fade show active" id="ongoing" role="tabpanel">
                
                <!-- Active Order 1 -->
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body p-0">
                        <!-- Order Header -->
                        <div class="p-3 bg-light border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="fw-bold mb-1">FlintFood</h6>
                                    <small class="text-muted">Order ID: #FLT20260205001</small>
                                </div>
                                <span class="badge bg-warning text-dark">Sedang Dikirim</span>
                            </div>
                        </div>

                        <!-- Order Timeline -->
                        <div class="p-3 border-bottom">
                            <div class="order-timeline">
                                <div class="timeline-item completed">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <small class="text-muted">15:30</small>
                                        <p class="mb-0 small fw-bold">Pesanan Dikonfirmasi</p>
                                        <small class="text-muted">Restoran mulai memproses pesanan</small>
                                    </div>
                                </div>
                                <div class="timeline-item completed">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <small class="text-muted">15:45</small>
                                        <p class="mb-0 small fw-bold">Pesanan Siap</p>
                                        <small class="text-muted">Driver sedang menuju restoran</small>
                                    </div>
                                </div>
                                <div class="timeline-item active">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <small class="text-muted">16:00</small>
                                        <p class="mb-0 small fw-bold">Dalam Perjalanan</p>
                                        <small class="text-muted">Estimasi tiba: 10 menit lagi</small>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-marker"></div>
                                    <div class="timeline-content">
                                        <p class="mb-0 small fw-bold">Pesanan Tiba</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Order Details -->
                        <div class="p-3 border-bottom">
                            <div class="d-flex align-items-start mb-3">
                                <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=80&h=80&fit=crop" 
                                     class="rounded me-3" width="60" height="60" alt="Restaurant">
                                <div class="flex-fill">
                                    <h6 class="fw-bold mb-1">Ayam Goreng Crispy</h6>
                                    <p class="mb-1 small text-muted">2x Ayam Goreng, 1x Es Teh Manis</p>
                                    <p class="mb-0 fw-bold text-primary"><?php echo formatRupiah(45000); ?></p>
                                </div>
                            </div>
                            
                            <!-- Driver Info -->
                            <div class="driver-info bg-light rounded p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img src="https://ui-avatars.com/api/?name=Budi+Santoso&background=10B981&color=fff" 
                                             class="rounded-circle me-3" width="40" height="40" alt="Driver">
                                        <div>
                                            <p class="mb-0 fw-bold small">Budi Santoso</p>
                                            <small class="text-muted">
                                                <i class="fas fa-motorcycle me-1"></i>H 1234 AB
                                            </small>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2">
                                        <button class="btn btn-sm btn-outline-primary rounded-circle">
                                            <i class="fas fa-phone"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-primary rounded-circle">
                                            <i class="fas fa-comment"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="p-3">
                            <div class="d-flex gap-2">
                                <button class="btn btn-outline-danger btn-sm flex-fill rounded-pill">
                                    Batalkan Pesanan
                                </button>
                                <button class="btn btn-primary btn-sm flex-fill rounded-pill">
                                    Lacak Pesanan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Empty State if no ongoing orders -->
                <!-- Uncomment this if needed -->
                <!--
                <div class="text-center py-5">
                    <i class="fas fa-clipboard-list text-muted" style="font-size: 64px;"></i>
                    <h6 class="fw-bold mt-3">Belum Ada Pesanan</h6>
                    <p class="text-muted">Pesanan yang sedang berlangsung akan muncul di sini</p>
                    <a href="dashboard.php" class="btn btn-primary rounded-pill px-4 mt-2">
                        Mulai Pesan
                    </a>
                </div>
                -->

            </div>

            <!-- History Orders Tab -->
            <div class="tab-pane fade" id="history" role="tabpanel">
                
                <!-- Completed Order 1 -->
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="d-flex align-items-start">
                                <div class="service-icon bg-danger bg-opacity-10 rounded p-2 me-3">
                                    <i class="fas fa-utensils text-danger"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">FlintFood</h6>
                                    <p class="mb-1 small text-muted">Nasi Goreng Spesial, Es Jeruk</p>
                                    <small class="text-muted">4 Feb 2026 · 19:45</small>
                                </div>
                            </div>
                            <span class="badge bg-success">Selesai</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <div>
                                <small class="text-muted d-block">Total Pembayaran</small>
                                <h6 class="fw-bold mb-0"><?php echo formatRupiah(35000); ?></h6>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary rounded-pill">
                                    Pesan Lagi
                                </button>
                                <button class="btn btn-sm btn-outline-secondary rounded-pill">
                                    Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Completed Order 2 -->
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="d-flex align-items-start">
                                <div class="service-icon bg-success bg-opacity-10 rounded p-2 me-3">
                                    <i class="fas fa-motorcycle text-success"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">FlintRide</h6>
                                    <p class="mb-1 small text-muted">Jl. Sudirman - Plaza Indonesia</p>
                                    <small class="text-muted">3 Feb 2026 · 08:30</small>
                                </div>
                            </div>
                            <span class="badge bg-success">Selesai</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <div>
                                <small class="text-muted d-block">Total Pembayaran</small>
                                <h6 class="fw-bold mb-0"><?php echo formatRupiah(15000); ?></h6>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Completed Order 3 -->
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="d-flex align-items-start">
                                <div class="service-icon bg-warning bg-opacity-10 rounded p-2 me-3">
                                    <i class="fas fa-shopping-cart text-warning"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">FlintMart</h6>
                                    <p class="mb-1 small text-muted">Indomie, Susu, Telur, Roti</p>
                                    <small class="text-muted">2 Feb 2026 · 16:20</small>
                                </div>
                            </div>
                            <span class="badge bg-success">Selesai</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <div>
                                <small class="text-muted d-block">Total Pembayaran</small>
                                <h6 class="fw-bold mb-0"><?php echo formatRupiah(125000); ?></h6>
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-primary rounded-pill">
                                    Pesan Lagi
                                </button>
                                <button class="btn btn-sm btn-outline-secondary rounded-pill">
                                    Detail
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cancelled Order -->
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body p-3">
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <div class="d-flex align-items-start">
                                <div class="service-icon bg-primary bg-opacity-10 rounded p-2 me-3">
                                    <i class="fas fa-car text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold mb-1">FlintCar</h6>
                                    <p class="mb-1 small text-muted">Jl. Thamrin - Bandara Soekarno-Hatta</p>
                                    <small class="text-muted">1 Feb 2026 · 05:00</small>
                                </div>
                            </div>
                            <span class="badge bg-danger">Dibatalkan</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                            <div>
                                <small class="text-muted d-block">Dana dikembalikan</small>
                                <h6 class="fw-bold mb-0 text-muted"><?php echo formatRupiah(75000); ?></h6>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary rounded-pill px-4">
                        Muat Lebih Banyak
                    </button>
                </div>

            </div>
        </div>

    </div>
</div>

<style>
.order-timeline {
    position: relative;
    padding-left: 30px;
}

.timeline-item {
    position: relative;
    padding-bottom: 20px;
}

.timeline-item:not(:last-child):before {
    content: '';
    position: absolute;
    left: -22px;
    top: 20px;
    width: 2px;
    height: calc(100% - 10px);
    background-color: #E5E7EB;
}

.timeline-item.completed:not(:last-child):before {
    background-color: var(--primary-color);
}

.timeline-item.active:not(:last-child):before {
    background: linear-gradient(to bottom, var(--primary-color) 50%, #E5E7EB 50%);
}

.timeline-marker {
    position: absolute;
    left: -28px;
    top: 0;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    background-color: #E5E7EB;
    border: 3px solid #fff;
    box-shadow: 0 0 0 2px #E5E7EB;
}

.timeline-item.completed .timeline-marker {
    background-color: var(--primary-color);
    box-shadow: 0 0 0 2px var(--primary-color);
}

.timeline-item.active .timeline-marker {
    background-color: var(--primary-color);
    box-shadow: 0 0 0 2px var(--primary-color);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% {
        box-shadow: 0 0 0 2px var(--primary-color);
    }
    50% {
        box-shadow: 0 0 0 6px rgba(16, 185, 129, 0.3);
    }
}

.service-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

@media (max-width: 767px) {
    body {
        padding-bottom: 80px;
    }
}
</style>

<?php include '../app/views/components/bottom-nav.php'; ?>
<?php include '../app/views/layouts/footer.php'; ?>
