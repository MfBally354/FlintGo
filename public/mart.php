<?php
require_once '../includes/init.php';

$pageTitle = 'FlintMart - Belanja Kebutuhan';
$bodyClass = 'mart-page';

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Mart Service Page -->
<div class="mart-wrapper bg-light min-vh-100">
    
    <!-- Header -->
    <div class="bg-white sticky-top shadow-sm">
        <div class="container py-3">
            <div class="d-flex align-items-center mb-3">
                <a href="dashboard.php" class="btn btn-light rounded-circle me-3" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div class="flex-fill">
                    <h5 class="mb-0 fw-bold">FlintMart</h5>
                    <small class="text-muted">
                        <i class="fas fa-map-marker-alt me-1 text-danger"></i>Jl. Borobudur XII No.24
                    </small>
                </div>
                <button class="btn btn-light position-relative">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        5
                    </span>
                </button>
            </div>
            
            <!-- Search Bar -->
            <div class="input-group">
                <span class="input-group-text bg-white">
                    <i class="fas fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-start-0" placeholder="Cari produk kebutuhan...">
                <button class="btn btn-light border">
                    <i class="fas fa-barcode"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container py-4">
        
        <!-- Promo Banner -->
        <div class="card border-0 shadow-sm mb-4" style="background: linear-gradient(135deg, #F59E0B, #D97706);">
            <div class="card-body p-3 text-white">
                <div class="row align-items-center">
                    <div class="col-8">
                        <span class="badge bg-white text-warning mb-2">30 MENIT</span>
                        <h6 class="fw-bold mb-1">Belanja Sampai dalam 30 Menit!</h6>
                        <p class="mb-0 small opacity-75">Gratis ongkir untuk pembelian pertama</p>
                    </div>
                    <div class="col-4 text-end">
                        <i class="fas fa-shipping-fast" style="font-size: 48px; opacity: 0.3;"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Categories -->
        <div class="mb-4">
            <h6 class="fw-bold mb-3">Kategori</h6>
            <div class="row g-2">
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-success bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-apple-alt text-success fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Buah & Sayur</small>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-danger bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-drumstick-bite text-danger fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Daging & Ikan</small>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-warning bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-bread-slice text-warning fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Roti & Kue</small>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-info bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-wine-bottle text-info fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Minuman</small>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-primary bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-cheese text-primary fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Dairy</small>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-danger bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-cookie-bite text-danger fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Snack</small>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-success bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-pump-soap text-success fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Kebersihan</small>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0 shadow-sm text-center h-100 category-item">
                        <div class="card-body p-2">
                            <div class="category-icon bg-secondary bg-opacity-10 rounded-3 p-2 mb-2 mx-auto" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-ellipsis-h text-secondary fs-4"></i>
                            </div>
                            <small class="fw-bold d-block">Lainnya</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Flash Sale -->
        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">
                    <i class="fas fa-bolt text-warning me-2"></i>Flash Sale
                </h6>
                <div class="countdown">
                    <span class="badge bg-danger px-3 py-2">
                        <i class="fas fa-clock me-1"></i>Berakhir dalam 02:45:30
                    </span>
                </div>
            </div>

            <div class="row g-3">
                <!-- Product 1 -->
                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1610832958506-aa56368176cf?w=300&h=200&fit=crop" 
                                 class="card-img-top" alt="Product" style="height: 140px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-25%</span>
                            <button class="btn btn-sm btn-light rounded-circle position-absolute top-0 end-0 m-2">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Kellogg's Froot Loops</h6>
                            <p class="mb-2 small text-muted">300g</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold text-danger d-block"><?php echo formatRupiah(37500); ?></span>
                                    <small class="text-decoration-line-through text-muted"><?php echo formatRupiah(50000); ?></small>
                                </div>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1600788907416-456670e51f46?w=300&h=200&fit=crop" 
                                 class="card-img-top" alt="Product" style="height: 140px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 start-0 m-2">-30%</span>
                            <button class="btn btn-sm btn-light rounded-circle position-absolute top-0 end-0 m-2">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Susu Ultra Milk</h6>
                            <p class="mb-2 small text-muted">1 Liter</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold text-danger d-block"><?php echo formatRupiah(14000); ?></span>
                                    <small class="text-decoration-line-through text-muted"><?php echo formatRupiah(20000); ?></small>
                                </div>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rekomendasi untuk Anda -->
        <div class="mb-4">
            <h6 class="fw-bold mb-3">Rekomendasi untuk Anda</h6>
            
            <div class="row g-3">
                <!-- Product Item -->
                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1587563871167-1ee9c731aefb?w=300&h=200&fit=crop" 
                                 class="card-img-top" alt="Product" style="height: 140px; object-fit: cover;">
                            <button class="btn btn-sm btn-light rounded-circle position-absolute top-0 end-0 m-2">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Indomie Goreng</h6>
                            <p class="mb-2 small text-muted">1 Pack (5 pcs)</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-danger"><?php echo formatRupiah(12500); ?></span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1568252542512-9fe8fe9c87bb?w=300&h=200&fit=crop" 
                                 class="card-img-top" alt="Product" style="height: 140px; object-fit: cover;">
                            <span class="badge bg-success position-absolute top-0 start-0 m-2">Baru</span>
                            <button class="btn btn-sm btn-light rounded-circle position-absolute top-0 end-0 m-2">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Roti Tawar Sari Roti</h6>
                            <p class="mb-2 small text-muted">400g</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-danger"><?php echo formatRupiah(18000); ?></span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1600617257036-bc8c8d1f59a3?w=300&h=200&fit=crop" 
                                 class="card-img-top" alt="Product" style="height: 140px; object-fit: cover;">
                            <button class="btn btn-sm btn-light rounded-circle position-absolute top-0 end-0 m-2">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Aqua Botol</h6>
                            <p class="mb-2 small text-muted">600ml x 24</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-danger"><?php echo formatRupiah(45000); ?></span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 product-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1599599810769-bcde5a160d32?w=300&h=200&fit=crop" 
                                 class="card-img-top" alt="Product" style="height: 140px; object-fit: cover;">
                            <span class="badge bg-warning position-absolute top-0 start-0 m-2">Best</span>
                            <button class="btn btn-sm btn-light rounded-circle position-absolute top-0 end-0 m-2">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Telur Ayam Kampung</h6>
                            <p class="mb-2 small text-muted">10 butir</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-danger"><?php echo formatRupiah(28000); ?></span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Supported Brands -->
        <div class="mb-5">
            <h6 class="fw-bold mb-3">Brand Partner</h6>
            <div class="card border-0 shadow-sm">
                <div class="card-body p-3">
                    <div class="row g-3">
                        <div class="col-4 text-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/8/82/Indomaret_logo.svg" 
                                 alt="Indomaret" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <div class="col-4 text-center">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Logo_Alfamart.png" 
                                 alt="Alfamart" class="img-fluid" style="max-height: 40px;">
                        </div>
                        <div class="col-4 text-center">
                            <div class="bg-light rounded p-2">
                                <i class="fas fa-store fs-3 text-muted"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bottom Cart Bar -->
<div class="fixed-bottom bg-white border-top p-3 d-md-none">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <small class="text-muted d-block">Total Belanja (5 items)</small>
            <h5 class="mb-0 fw-bold text-primary"><?php echo formatRupiah(125000); ?></h5>
        </div>
        <button class="btn btn-primary rounded-pill px-4">
            Lihat Keranjang <i class="fas fa-arrow-right ms-2"></i>
        </button>
    </div>
</div>

<style>
.category-item {
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.1) !important;
}

.product-card {
    cursor: pointer;
    transition: all 0.3s ease;
}

.product-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15) !important;
}

@media (max-width: 767px) {
    body {
        padding-bottom: 100px;
    }
}
</style>

<script>
// Add to cart functionality
document.querySelectorAll('.product-card .btn-primary').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        this.innerHTML = '<i class="fas fa-check"></i>';
        setTimeout(() => {
            this.innerHTML = '<i class="fas fa-plus"></i>';
        }, 1000);
    });
});

// Wishlist functionality
document.querySelectorAll('.btn-light .fa-heart').forEach(heart => {
    heart.parentElement.addEventListener('click', function(e) {
        e.stopPropagation();
        const icon = this.querySelector('i');
        if (icon.classList.contains('far')) {
            icon.classList.remove('far');
            icon.classList.add('fas');
            icon.style.color = '#EF4444';
        } else {
            icon.classList.remove('fas');
            icon.classList.add('far');
            icon.style.color = '';
        }
    });
});
</script>

<?php include '../app/views/components/bottom-nav.php'; ?>
<?php include '../app/views/layouts/footer.php'; ?>
