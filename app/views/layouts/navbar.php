<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="index.php">
            <i class="fas fa-bolt text-primary me-2 fs-4"></i>
            <span class="brand-text">Flint</span><span class="text-primary">Go</span>
        </a>
        
        <!-- Mobile menu toggle -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Navbar items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link <?php echo isActive('index'); ?>" href="index.php">
                        <i class="fas fa-home me-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo isActive('dashboard'); ?>" href="dashboard.php">
                        <i class="fas fa-th-large me-1"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-layer-group me-1"></i> Layanan
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="ride.php"><i class="fas fa-motorcycle me-2 text-primary"></i> FlintRide</a></li>
                        <li><a class="dropdown-item" href="car.php"><i class="fas fa-car me-2 text-primary"></i> FlintCar</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="food.php"><i class="fas fa-utensils me-2 text-danger"></i> FlintFood</a></li>
                        <li><a class="dropdown-item" href="mart.php"><i class="fas fa-shopping-cart me-2 text-warning"></i> FlintMart</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="order.php">
                        <i class="fas fa-receipt me-1"></i> Pesanan
                    </a>
                </li>
                
                <?php if(isLoggedIn()): ?>
                    <!-- Logged in user -->
                    <li class="nav-item dropdown ms-lg-2">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode(getUserData('name') ?? 'User'); ?>&background=10B981&color=fff" 
                                 class="rounded-circle me-2" width="32" height="32" alt="Profile">
                            <span class="d-none d-lg-inline"><?php echo getUserData('name') ?? 'User'; ?></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="profile.php"><i class="fas fa-user me-2"></i> Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-wallet me-2"></i> Saldo: <?php echo formatRupiah(getUserData('balance') ?? 0); ?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i> Keluar</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <!-- Not logged in -->
                    <li class="nav-item ms-lg-2">
                        <a class="btn btn-outline-primary btn-sm rounded-pill px-3 me-2" href="login.php">
                            <i class="fas fa-sign-in-alt me-1"></i> Masuk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary btn-sm rounded-pill px-3" href="register.php">
                            <i class="fas fa-user-plus me-1"></i> Daftar
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<?php 
// Display flash messages
$flash = getFlash();
if($flash): 
?>
<div class="container mt-3">
    <div class="alert alert-<?php echo $flash['type']; ?> alert-dismissible fade show" role="alert">
        <i class="fas fa-<?php echo $flash['type'] == 'success' ? 'check-circle' : 'exclamation-circle'; ?> me-2"></i>
        <?php echo $flash['message']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
</div>
<?php endif; ?>
