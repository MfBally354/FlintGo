/**
 * FlintGo - Dashboard JavaScript
 */

document.addEventListener('DOMContentLoaded', function() {
    
    // Initialize search functionality
    initSearch();
    
    // Initialize service cards
    initServiceCards();
    
    // Initialize wallet features
    initWallet();
    
    // Update real-time data
    updateRealTimeData();
    
    console.log('Dashboard initialized!');
});

/**
 * Initialize search functionality
 */
function initSearch() {
    const searchInput = document.querySelector('.search-bar-wrapper input');
    
    if (searchInput) {
        searchInput.addEventListener('input', FlintGo.debounce(function(e) {
            const query = e.target.value.toLowerCase();
            
            if (query.length >= 2) {
                performSearch(query);
            }
        }, 300));
    }
}

/**
 * Perform search
 */
function performSearch(query) {
    console.log('Searching for:', query);
    
    // Example: Filter services
    const services = document.querySelectorAll('.service-item');
    services.forEach(service => {
        const name = service.querySelector('.service-name').textContent.toLowerCase();
        if (name.includes(query)) {
            service.style.display = 'block';
            service.style.animation = 'fadeIn 0.3s ease-in';
        } else {
            service.style.display = 'none';
        }
    });
}

/**
 * Initialize service cards
 */
function initServiceCards() {
    const serviceItems = document.querySelectorAll('.service-item');
    
    serviceItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const serviceName = this.querySelector('.service-name').textContent;
            const href = this.getAttribute('href');
            
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Navigate to service page
            if (href && href !== '#') {
                setTimeout(() => {
                    window.location.href = href;
                }, 200);
            } else {
                FlintGo.showToast(`Layanan ${serviceName} sedang dalam pengembangan`, 'info');
            }
        });
    });
}

/**
 * Initialize wallet features
 */
function initWallet() {
    const topUpBtn = document.querySelector('[data-action="topup"]');
    const payBtn = document.querySelector('[data-action="pay"]');
    
    if (topUpBtn) {
        topUpBtn.addEventListener('click', function() {
            showTopUpModal();
        });
    }
    
    if (payBtn) {
        payBtn.addEventListener('click', function() {
            showPaymentModal();
        });
    }
}

/**
 * Show top-up modal
 */
function showTopUpModal() {
    // Example implementation
    FlintGo.showToast('Fitur Top Up akan segera hadir!', 'info');
}

/**
 * Show payment modal
 */
function showPaymentModal() {
    // Example implementation
    FlintGo.showToast('Fitur Pembayaran akan segera hadir!', 'info');
}

/**
 * Update real-time data (simulated)
 */
function updateRealTimeData() {
    // Simulate real-time updates every 30 seconds
    setInterval(() => {
        updateBalance();
        updateOrders();
        updatePromos();
    }, 30000);
}

/**
 * Update balance display
 */
function updateBalance() {
    const balanceElements = document.querySelectorAll('[data-balance]');
    
    // Simulated balance update
    // In real app, this would fetch from API
    balanceElements.forEach(el => {
        const currentBalance = parseInt(el.dataset.balance || '0');
        // Update UI if needed
    });
}

/**
 * Update orders
 */
function updateOrders() {
    // Fetch latest orders from API
    // Update UI accordingly
    console.log('Checking for new orders...');
}

/**
 * Update promos
 */
function updatePromos() {
    // Fetch latest promos from API
    // Update carousel if needed
    console.log('Checking for new promos...');
}

/**
 * Track service click
 */
function trackServiceClick(serviceName) {
    console.log('Service clicked:', serviceName);
    
    // Send analytics
    if (typeof gtag !== 'undefined') {
        gtag('event', 'service_click', {
            'service_name': serviceName
        });
    }
}

/**
 * Initialize promo carousel auto-play
 */
function initPromoCarousel() {
    const carousel = document.querySelector('#promoCarousel');
    
    if (carousel) {
        const bsCarousel = new bootstrap.Carousel(carousel, {
            interval: 5000,
            ride: 'carousel'
        });
    }
}

/**
 * Handle location updates
 */
function updateLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            position => {
                const lat = position.coords.latitude;
                const lng = position.coords.longitude;
                console.log('Location updated:', lat, lng);
                
                // Update location in backend
                // updateUserLocation(lat, lng);
            },
            error => {
                console.error('Location error:', error);
            }
        );
    }
}

// Initialize carousel on load
initPromoCarousel();
