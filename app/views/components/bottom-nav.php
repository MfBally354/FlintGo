<!-- Bottom Navigation (Mobile Only) -->
<nav class="bottom-nav d-md-none fixed-bottom bg-white border-top shadow-lg">
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col">
                <a href="dashboard.php" class="bottom-nav-item <?php echo isActive('dashboard') ? 'active' : ''; ?>">
                    <i class="fas fa-home"></i>
                    <span>Beranda</span>
                </a>
            </div>
            <div class="col">
                <a href="#" class="bottom-nav-item">
                    <i class="fas fa-percent"></i>
                    <span>Promo</span>
                </a>
            </div>
            <div class="col">
                <a href="order.php" class="bottom-nav-item <?php echo isActive('order') ? 'active' : ''; ?>">
                    <i class="fas fa-receipt"></i>
                    <span>Aktivitas</span>
                    <?php if(isLoggedIn()): ?>
                        <span class="badge bg-danger rounded-circle position-absolute top-0 end-0 translate-middle">3</span>
                    <?php endif; ?>
                </a>
            </div>
            <div class="col">
                <a href="profile.php" class="bottom-nav-item <?php echo isActive('profile') ? 'active' : ''; ?>">
                    <i class="fas fa-user"></i>
                    <span>Akun</span>
                </a>
            </div>
        </div>
    </div>
</nav>

<style>
.bottom-nav {
    z-index: 1000;
    padding: 8px 0;
}

.bottom-nav-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 8px;
    text-decoration: none;
    color: #6B7280;
    font-size: 12px;
    transition: all 0.2s;
    position: relative;
}

.bottom-nav-item i {
    font-size: 20px;
    margin-bottom: 4px;
}

.bottom-nav-item.active {
    color: var(--primary-color);
}

.bottom-nav-item:hover {
    color: var(--primary-color);
    background-color: rgba(16, 185, 129, 0.05);
}

/* Add padding to body when bottom nav is visible */
@media (max-width: 767px) {
    body {
        padding-bottom: 70px;
    }
}
</style>
