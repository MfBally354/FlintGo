<!-- Footer -->
<footer class="footer bg-dark text-white mt-5">
    <div class="container py-5">
        <div class="row g-4">
            <!-- Company Info -->
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-bolt text-primary"></i> FlintGo
                </h5>
                <p class="text-light small">
                    FlintGo adalah super app yang menghadirkan berbagai layanan untuk memudahkan aktivitas sehari-hari Anda.
                </p>
                <div class="social-links mt-3">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Layanan</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="ride.php" class="text-light text-decoration-none small"><i class="fas fa-motorcycle me-2"></i>FlintRide</a></li>
                    <li class="mb-2"><a href="car.php" class="text-light text-decoration-none small"><i class="fas fa-car me-2"></i>FlintCar</a></li>
                    <li class="mb-2"><a href="food.php" class="text-light text-decoration-none small"><i class="fas fa-utensils me-2"></i>FlintFood</a></li>
                    <li class="mb-2"><a href="mart.php" class="text-light text-decoration-none small"><i class="fas fa-shopping-cart me-2"></i>FlintMart</a></li>
                </ul>
            </div>
            
            <!-- Company -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Perusahaan</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Tentang Kami</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Karir</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Blog</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Hubungi Kami</a></li>
                </ul>
            </div>
            
            <!-- Support -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Bantuan</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Pusat Bantuan</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Syarat & Ketentuan</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">Kebijakan Privasi</a></li>
                    <li class="mb-2"><a href="#" class="text-light text-decoration-none small">FAQ</a></li>
                </ul>
            </div>
            
            <!-- Download App -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-bold mb-3">Download App</h6>
                <a href="#" class="d-block mb-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" 
                         alt="Google Play" class="img-fluid" style="max-width: 140px;">
                </a>
                <a href="#" class="d-block">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg" 
                         alt="App Store" class="img-fluid" style="max-width: 140px;">
                </a>
            </div>
        </div>
        
        <hr class="my-4 border-secondary">
        
        <!-- Copyright -->
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="small mb-0">&copy; <?php echo date('Y'); ?> FlintGo. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <p class="small mb-0">Made with <i class="fas fa-heart text-danger"></i> in Indonesia</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5.3 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script src="assets/js/main.js"></script>
<?php if(isset($pageJS)): ?>
    <script src="assets/js/<?php echo $pageJS; ?>"></script>
<?php endif; ?>

</body>
</html>
