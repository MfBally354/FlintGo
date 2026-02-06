<?php
require_once '../includes/init.php';

$pageTitle = 'FlintFood - Pesan Makanan';
$bodyClass = 'food-page';

include '../app/views/layouts/header.php';
include '../app/views/layouts/navbar.php';
?>

<!-- Food Service Page -->
<div class="food-wrapper bg-light min-vh-100">
    
    <!-- Header with Search -->
    <div class="bg-white sticky-top shadow-sm">
        <div class="container py-3">
            <div class="d-flex align-items-center mb-3">
                <a href="dashboard.php" class="btn btn-light rounded-circle me-3" style="width: 40px; height: 40px; padding: 0; display: flex; align-items: center; justify-content: center;">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <div class="flex-fill">
                    <h5 class="mb-0 fw-bold">FlintFood</h5>
                    <small class="text-muted">
                        <i class="fas fa-map-marker-alt me-1"></i>Jl. Borobudur XII No.24
                    </small>
                </div>
            </div>
            
            <!-- Search Bar -->
            <div class="input-group">
                <span class="input-group-text bg-white">
                    <i class="fas fa-search text-muted"></i>
                </span>
                <input type="text" class="form-control border-start-0" placeholder="Cari makanan atau restoran...">
            </div>
        </div>
    </div>

    <div class="container py-4">
        
        <!-- Promo Banner Slider -->
        <div class="promo-banner mb-4">
            <div id="foodPromoCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3 overflow-hidden">
                    <div class="carousel-item active">
                        <div class="card border-0 bg-danger text-white">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <span class="badge bg-warning text-dark mb-2">FLASH SALE</span>
                                        <h5 class="fw-bold mb-2">Diskon s.d. 70%</h5>
                                        <p class="mb-0 small">Berlaku untuk menu pilihan hari ini!</p>
                                    </div>
                                    <div class="col-5 text-end">
                                        <i class="fas fa-utensils" style="font-size: 64px; opacity: 0.3;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card border-0 bg-success text-white">
                            <div class="card-body p-4">
                                <div class="row align-items-center">
                                    <div class="col-7">
                                        <span class="badge bg-light text-success mb-2">GRATIS ONGKIR</span>
                                        <h5 class="fw-bold mb-2">Hemat Rp25.000</h5>
                                        <p class="mb-0 small">Min. belanja Rp50.000</p>
                                    </div>
                                    <div class="col-5 text-end">
                                        <i class="fas fa-motorcycle" style="font-size: 64px; opacity: 0.3;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Category Filter -->
        <div class="category-filter mb-4">
            <div class="d-flex gap-2 overflow-auto pb-2">
                <button class="btn btn-primary rounded-pill flex-shrink-0">
                    <i class="fas fa-star me-1"></i>Semua
                </button>
                <button class="btn btn-outline-secondary rounded-pill flex-shrink-0">
                    <i class="fas fa-fire me-1"></i>Promo
                </button>
                <button class="btn btn-outline-secondary rounded-pill flex-shrink-0">
                    <i class="fas fa-bolt me-1"></i>Terdekat
                </button>
                <button class="btn btn-outline-secondary rounded-pill flex-shrink-0">
                    <i class="fas fa-heart me-1"></i>Favorit
                </button>
                <button class="btn btn-outline-secondary rounded-pill flex-shrink-0">
                    <i class="fas fa-hamburger me-1"></i>Fast Food
                </button>
                <button class="btn btn-outline-secondary rounded-pill flex-shrink-0">
                    <i class="fas fa-coffee me-1"></i>Minuman
                </button>
            </div>
        </div>

        <!-- Resto Terdekat Section -->
        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Resto Terdekat</h6>
                <a href="#" class="text-primary text-decoration-none small">Lihat Semua</a>
            </div>

            <!-- Restaurant Card 1 -->
            <div class="card border-0 shadow-sm mb-3 restaurant-card">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=300&h=200&fit=crop" 
                             class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="Restaurant">
                        <span class="badge bg-danger position-absolute m-2">-36%</span>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1">Roti'O + Kopi'O Aren - BrandDay</h6>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-star text-warning me-1"></i>4.8
                                </span>
                                <span class="small text-muted">Roti & Kue</span>
                                <span class="small text-muted">• 2.1 km</span>
                            </div>
                            <p class="mb-2 small text-muted">
                                <i class="fas fa-clock me-1"></i>20-30 min
                                • <i class="fas fa-motorcycle ms-1 me-1"></i><?php echo formatRupiah(7000); ?>
                            </p>
                            <div class="d-flex gap-1">
                                <span class="badge bg-success-subtle text-success small">Promo</span>
                                <span class="badge bg-warning-subtle text-warning small">Populer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Restaurant Card 2 -->
            <div class="card border-0 shadow-sm mb-3 restaurant-card">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="https://images.unsplash.com/photo-1513104890138-7c749659a591?w=300&h=200&fit=crop" 
                             class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="Restaurant">
                        <span class="badge bg-success position-absolute m-2">-25%</span>
                    </div>
                    <div class="col-8">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1">Ayam Goreng Crispy Chicken</h6>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-star text-warning me-1"></i>4.9
                                </span>
                                <span class="small text-muted">Ayam & Bebek</span>
                                <span class="small text-muted">• 1.5 km</span>
                            </div>
                            <p class="mb-2 small text-muted">
                                <i class="fas fa-clock me-1"></i>15-25 min
                                • <i class="fas fa-motorcycle ms-1 me-1"></i><?php echo formatRupiah(5000); ?>
                            </p>
                            <div class="d-flex gap-1">
                                <span class="badge bg-danger-subtle text-danger small">Gratis Ongkir</span>
                                <span class="badge bg-info-subtle text-info small">Best Seller</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Restaurant Card 3 -->
            <div class="card border-0 shadow-sm mb-3 restaurant-card">
                <div class="row g-0">
                    <div class="col-4">
                        <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=300&h=200&fit=crop" 
                             class="img-fluid h-100 rounded-start" style="object-fit: cover;" alt="Restaurant">
                    </div>
                    <div class="col-8">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1">Pizza Hut - Delivery</h6>
                            <div class="d-flex align-items-center gap-2 mb-2">
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-star text-warning me-1"></i>4.7
                                </span>
                                <span class="small text-muted">Pizza & Pasta</span>
                                <span class="small text-muted">• 3.2 km</span>
                            </div>
                            <p class="mb-2 small text-muted">
                                <i class="fas fa-clock me-1"></i>25-35 min
                                • <i class="fas fa-motorcycle ms-1 me-1"></i><?php echo formatRupiah(10000); ?>
                            </p>
                            <div class="d-flex gap-1">
                                <span class="badge bg-primary-subtle text-primary small">New</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu Rekomendasi -->
        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-bold mb-0">Menu Rekomendasi</h6>
                <a href="#" class="text-primary text-decoration-none small">Lihat Semua</a>
            </div>

            <div class="row g-3">
                <!-- Menu Item 1 -->
                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 menu-card">
                        <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=300&h=200&fit=crop" 
                             class="card-img-top" alt="Menu" style="height: 140px; object-fit: cover;">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Nasi Goreng Spesial</h6>
                            <p class="mb-1 small text-muted">Warung Pak Haji</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-danger"><?php echo formatRupiah(25000); ?></span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 2 -->
                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 menu-card">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?w=300&h=200&fit=crop" 
                                 class="card-img-top" alt="Menu" style="height: 140px; object-fit: cover;">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2">-40%</span>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Burger Jumbo Cheese</h6>
                            <p class="mb-1 small text-muted">Burger King</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <span class="fw-bold text-danger"><?php echo formatRupiah(35000); ?></span>
                                    <small class="text-decoration-line-through text-muted d-block"><?php echo formatRupiah(58000); ?></small>
                                </div>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 3 -->
                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 menu-card">
                        <img src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?w=300&h=200&fit=crop" 
                             class="card-img-top" alt="Menu" style="height: 140px; object-fit: cover;">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Sushi Platter Mix</h6>
                            <p class="mb-1 small text-muted">Sushi Tei</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-danger"><?php echo formatRupiah(85000); ?></span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Menu Item 4 -->
                <div class="col-6">
                    <div class="card border-0 shadow-sm h-100 menu-card">
                        <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?w=300&h=200&fit=crop" 
                             class="card-img-top" alt="Menu" style="height: 140px; object-fit: cover;">
                        <div class="card-body p-3">
                            <h6 class="fw-bold mb-1 small">Es Kopi Susu Gula Aren</h6>
                            <p class="mb-1 small text-muted">Kopi Kenangan</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-danger"><?php echo formatRupiah(18000); ?></span>
                                <button class="btn btn-sm btn-primary rounded-pill">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori Makanan -->
        <div class="mb-5">
            <h6 class="fw-bold mb-3">Kategori Makanan</h6>
            <div class="row g-2">
                <div class="col-4">
                    <div class="card border-0 shadow-sm text-center category-card">
                        <div class="card-body p-3">
                            <i class="fas fa-hamburger text-danger fs-2 mb-2"></i>
                            <p class="mb-0 small fw-bold">Fast Food</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-0 shadow-sm text-center category-card">
                        <div class="card-body p-3">
                            <i class="fas fa-drumstick-bite text-warning fs-2 mb-2"></i>
                            <p class="mb-0 small fw-bold">Ayam & Bebek</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-0 shadow-sm text-center category-card">
                        <div class="card-body p-3">
                            <i class="fas fa-fish text-info fs-2 mb-2"></i>
                            <p class="mb-0 small fw-bold">Seafood</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-0 shadow-sm text-center category-card">
                        <div class="card-body p-3">
                            <i class="fas fa-pizza-slice text-danger fs-2 mb-2"></i>
                            <p class="mb-0 small fw-bold">Pizza</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-0 shadow-sm text-center category-card">
                        <div class="card-body p-3">
                            <i class="fas fa-ice-cream text-primary fs-2 mb-2"></i>
                            <p class="mb-0 small fw-bold">Dessert</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-0 shadow-sm text-center category-card">
                        <div class="card-body p-3">
                            <i class="fas fa-coffee text-success fs-2 mb-2"></i>
                            <p class="mb-0 small fw-bold">Minuman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Shopping Cart FAB (Floating Action Button) -->
<button class="btn btn-primary rounded-circle position-fixed bottom-0 end-0 m-4 shadow-lg d-none" 
        id="cartFab" style="width: 60px; height: 60px; z-index: 999;">
    <i class="fas fa-shopping-cart"></i>
    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        3
    </span>
</button>

<style>
.restaurant-card {
    cursor: pointer;
    transition: all 0.3s ease;
}

.restaurant-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 24px rgba(0,0,0,0.15) !important;
}

.menu-card {
    cursor: pointer;
    transition: all 0.3s ease;
}

.menu-card:hover {
    transform: translateY(-4px);
}

.category-card {
    cursor: pointer;
    transition: all 0.3s ease;
}

.category-card:hover {
    background-color: var(--primary-color);
    color: white;
}

.category-card:hover i {
    color: white !important;
}

@media (max-width: 767px) {
    body {
        padding-bottom: 80px;
    }
}
</style>

<script>
// Show cart button if items added
let cartItems = 0;
document.querySelectorAll('.menu-card .btn-primary').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.stopPropagation();
        cartItems++;
        document.getElementById('cartFab').classList.remove('d-none');
        alert('Item ditambahkan ke keranjang!');
    });
});

// Restaurant card click
document.querySelectorAll('.restaurant-card').forEach(card => {
    card.addEventListener('click', function() {
        alert('Membuka halaman restoran...');
        // window.location.href = 'restaurant-detail.php?id=1';
    });
});
</script>

<?php include '../app/views/components/bottom-nav.php'; ?>
<?php include '../app/views/layouts/footer.php'; ?>
