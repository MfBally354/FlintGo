-- ====================================================================
-- FlintGo Complete Database Schema
-- Version: 2.0
-- Date: 2026-02-06
-- ====================================================================

DROP DATABASE IF EXISTS flintgo_db;
CREATE DATABASE flintgo_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE flintgo_db;

-- ====================================================================
-- USERS & AUTHENTICATION
-- ====================================================================

-- Users Table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    balance DECIMAL(15,2) DEFAULT 0.00,
    coins INT DEFAULT 0,
    xp_points INT DEFAULT 0,
    member_level ENUM('bronze', 'silver', 'gold', 'platinum') DEFAULT 'bronze',
    profile_photo VARCHAR(255) DEFAULT NULL,
    is_verified BOOLEAN DEFAULT FALSE,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_email (email),
    INDEX idx_phone (phone)
) ENGINE=InnoDB;

-- Saved Addresses
CREATE TABLE user_addresses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    address_type ENUM('home', 'work', 'other') DEFAULT 'other',
    label VARCHAR(50),
    address TEXT NOT NULL,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    is_default BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- Payment Methods
CREATE TABLE payment_methods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    method_type ENUM('flintpay', 'credit_card', 'debit_card', 'bank_transfer') DEFAULT 'flintpay',
    card_number VARCHAR(20),
    card_holder VARCHAR(100),
    expiry_date VARCHAR(7),
    is_default BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ====================================================================
-- DRIVERS
-- ====================================================================

CREATE TABLE drivers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(20) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    vehicle_type ENUM('motorcycle', 'car') NOT NULL,
    vehicle_number VARCHAR(20) NOT NULL,
    vehicle_brand VARCHAR(50),
    license_number VARCHAR(50) NOT NULL,
    rating DECIMAL(3,2) DEFAULT 5.00,
    total_trips INT DEFAULT 0,
    is_online BOOLEAN DEFAULT FALSE,
    is_verified BOOLEAN DEFAULT FALSE,
    current_latitude DECIMAL(10, 8),
    current_longitude DECIMAL(11, 8),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_phone (phone),
    INDEX idx_location (current_latitude, current_longitude),
    INDEX idx_online (is_online)
) ENGINE=InnoDB;

-- ====================================================================
-- RIDE & CAR SERVICES
-- ====================================================================

CREATE TABLE ride_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_code VARCHAR(20) UNIQUE NOT NULL,
    user_id INT NOT NULL,
    driver_id INT,
    service_type ENUM('ride', 'car') NOT NULL,
    vehicle_class ENUM('economy', 'comfort', 'premium') DEFAULT 'economy',
    pickup_address TEXT NOT NULL,
    pickup_latitude DECIMAL(10, 8) NOT NULL,
    pickup_longitude DECIMAL(11, 8) NOT NULL,
    destination_address TEXT NOT NULL,
    destination_latitude DECIMAL(10, 8) NOT NULL,
    destination_longitude DECIMAL(11, 8) NOT NULL,
    distance_km DECIMAL(6,2),
    duration_minutes INT,
    base_fare DECIMAL(10,2) NOT NULL,
    discount_amount DECIMAL(10,2) DEFAULT 0,
    platform_fee DECIMAL(10,2) DEFAULT 0,
    total_fare DECIMAL(10,2) NOT NULL,
    payment_method ENUM('flintpay', 'cash', 'card') DEFAULT 'flintpay',
    status ENUM('pending', 'accepted', 'picked_up', 'completed', 'cancelled') DEFAULT 'pending',
    notes TEXT,
    cancelled_by ENUM('user', 'driver', 'system'),
    cancellation_reason TEXT,
    rating INT,
    review TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (driver_id) REFERENCES drivers(id),
    INDEX idx_user (user_id),
    INDEX idx_driver (driver_id),
    INDEX idx_status (status),
    INDEX idx_order_code (order_code)
) ENGINE=InnoDB;

-- ====================================================================
-- FOOD SERVICE
-- ====================================================================

-- Restaurants
CREATE TABLE restaurants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    description TEXT,
    address TEXT NOT NULL,
    latitude DECIMAL(10, 8),
    longitude DECIMAL(11, 8),
    phone VARCHAR(20),
    category VARCHAR(50),
    rating DECIMAL(3,2) DEFAULT 5.00,
    total_reviews INT DEFAULT 0,
    delivery_time_minutes INT DEFAULT 30,
    delivery_fee DECIMAL(10,2) DEFAULT 0,
    min_order DECIMAL(10,2) DEFAULT 0,
    is_open BOOLEAN DEFAULT TRUE,
    is_verified BOOLEAN DEFAULT FALSE,
    image_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_location (latitude, longitude),
    INDEX idx_rating (rating)
) ENGINE=InnoDB;

-- Menu Items
CREATE TABLE menu_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    restaurant_id INT NOT NULL,
    name VARCHAR(150) NOT NULL,
    description TEXT,
    category VARCHAR(50),
    price DECIMAL(10,2) NOT NULL,
    discount_percent INT DEFAULT 0,
    image_url VARCHAR(255),
    is_available BOOLEAN DEFAULT TRUE,
    is_recommended BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (restaurant_id) REFERENCES restaurants(id) ON DELETE CASCADE,
    INDEX idx_restaurant (restaurant_id)
) ENGINE=InnoDB;

-- Food Orders
CREATE TABLE food_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_code VARCHAR(20) UNIQUE NOT NULL,
    user_id INT NOT NULL,
    restaurant_id INT NOT NULL,
    driver_id INT,
    delivery_address TEXT NOT NULL,
    delivery_latitude DECIMAL(10, 8),
    delivery_longitude DECIMAL(11, 8),
    subtotal DECIMAL(10,2) NOT NULL,
    delivery_fee DECIMAL(10,2) DEFAULT 0,
    discount_amount DECIMAL(10,2) DEFAULT 0,
    platform_fee DECIMAL(10,2) DEFAULT 0,
    total_amount DECIMAL(10,2) NOT NULL,
    payment_method ENUM('flintpay', 'cash', 'card') DEFAULT 'flintpay',
    status ENUM('pending', 'confirmed', 'preparing', 'ready', 'picked_up', 'delivered', 'cancelled') DEFAULT 'pending',
    notes TEXT,
    rating INT,
    review TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (restaurant_id) REFERENCES restaurants(id),
    FOREIGN KEY (driver_id) REFERENCES drivers(id),
    INDEX idx_user (user_id),
    INDEX idx_restaurant (restaurant_id),
    INDEX idx_status (status)
) ENGINE=InnoDB;

-- Food Order Items
CREATE TABLE food_order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    menu_item_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    price DECIMAL(10,2) NOT NULL,
    notes TEXT,
    FOREIGN KEY (order_id) REFERENCES food_orders(id) ON DELETE CASCADE,
    FOREIGN KEY (menu_item_id) REFERENCES menu_items(id)
) ENGINE=InnoDB;

-- ====================================================================
-- MART SERVICE
-- ====================================================================

-- Products
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    description TEXT,
    category VARCHAR(50),
    brand VARCHAR(50),
    price DECIMAL(10,2) NOT NULL,
    discount_percent INT DEFAULT 0,
    stock INT DEFAULT 0,
    unit VARCHAR(20),
    image_url VARCHAR(255),
    is_available BOOLEAN DEFAULT TRUE,
    is_flash_sale BOOLEAN DEFAULT FALSE,
    is_best_seller BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_category (category),
    INDEX idx_price (price)
) ENGINE=InnoDB;

-- Mart Orders
CREATE TABLE mart_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_code VARCHAR(20) UNIQUE NOT NULL,
    user_id INT NOT NULL,
    driver_id INT,
    delivery_address TEXT NOT NULL,
    delivery_latitude DECIMAL(10, 8),
    delivery_longitude DECIMAL(11, 8),
    subtotal DECIMAL(10,2) NOT NULL,
    delivery_fee DECIMAL(10,2) DEFAULT 0,
    discount_amount DECIMAL(10,2) DEFAULT 0,
    total_amount DECIMAL(10,2) NOT NULL,
    payment_method ENUM('flintpay', 'cash', 'card') DEFAULT 'flintpay',
    status ENUM('pending', 'confirmed', 'packing', 'ready', 'picked_up', 'delivered', 'cancelled') DEFAULT 'pending',
    notes TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (driver_id) REFERENCES drivers(id),
    INDEX idx_user (user_id),
    INDEX idx_status (status)
) ENGINE=InnoDB;

-- Mart Order Items
CREATE TABLE mart_order_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    price DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES mart_orders(id) ON DELETE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id)
) ENGINE=InnoDB;

-- ====================================================================
-- TRANSACTIONS & WALLET
-- ====================================================================

-- Wallet Transactions
CREATE TABLE wallet_transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    transaction_type ENUM('topup', 'payment', 'refund', 'cashback', 'bonus') NOT NULL,
    amount DECIMAL(15,2) NOT NULL,
    balance_before DECIMAL(15,2) NOT NULL,
    balance_after DECIMAL(15,2) NOT NULL,
    description TEXT,
    reference_type ENUM('ride', 'food', 'mart', 'topup'),
    reference_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    INDEX idx_user (user_id),
    INDEX idx_type (transaction_type)
) ENGINE=InnoDB;

-- ====================================================================
-- PROMOS & VOUCHERS
-- ====================================================================

CREATE TABLE vouchers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    code VARCHAR(50) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    discount_type ENUM('percentage', 'fixed') NOT NULL,
    discount_value DECIMAL(10,2) NOT NULL,
    min_transaction DECIMAL(10,2) DEFAULT 0,
    max_discount DECIMAL(10,2),
    service_type ENUM('all', 'ride', 'car', 'food', 'mart'),
    usage_limit INT,
    used_count INT DEFAULT 0,
    valid_from TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    valid_until TIMESTAMP,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_code (code)
) ENGINE=InnoDB;

-- User Vouchers
CREATE TABLE user_vouchers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    voucher_id INT NOT NULL,
    used_at TIMESTAMP NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (voucher_id) REFERENCES vouchers(id) ON DELETE CASCADE
) ENGINE=InnoDB;

-- ====================================================================
-- FAVORITES & RATINGS
-- ====================================================================

CREATE TABLE favorites (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    favorite_type ENUM('restaurant', 'product') NOT NULL,
    favorite_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    UNIQUE KEY unique_favorite (user_id, favorite_type, favorite_id)
) ENGINE=InnoDB;

-- ====================================================================
-- NOTIFICATIONS
-- ====================================================================

CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    title VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    type ENUM('order', 'promo', 'system', 'payment') DEFAULT 'system',
    is_read BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    INDEX idx_user (user_id),
    INDEX idx_read (is_read)
) ENGINE=InnoDB;

-- ====================================================================
-- SAMPLE DATA
-- ====================================================================

-- Insert Sample Users
INSERT INTO users (name, email, phone, password, balance, coins, xp_points, member_level) VALUES
('Ahmad Fauzi', 'ahmad.fauzi@email.com', '081234567890', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 150000.00, 100, 245, 'bronze'),
('Siti Nurhaliza', 'siti.nur@email.com', '081234567891', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 250000.00, 200, 580, 'silver'),
('Budi Santoso', 'budi.santoso@email.com', '081234567892', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 75000.00, 50, 120, 'bronze');
-- Password for all: "password"

-- Insert Sample Drivers
INSERT INTO drivers (name, phone, password, vehicle_type, vehicle_number, license_number, rating, total_trips, is_online) VALUES
('Budi Santoso', '081111111111', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'motorcycle', 'B 1234 AB', 'SIM001', 4.8, 250, TRUE),
('Agus Setiawan', '081111111112', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'motorcycle', 'B 5678 CD', 'SIM002', 4.9, 180, TRUE),
('Dedi Kurniawan', '081111111113', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'car', 'B 9012 EF', 'SIM003', 4.7, 120, FALSE);

-- Insert Sample Restaurants
INSERT INTO restaurants (name, description, address, category, rating, delivery_time_minutes, delivery_fee, image_url, is_open) VALUES
('Ayam Goreng Crispy', 'Ayam goreng renyah dan nikmat', 'Jl. Sudirman No. 123, Jakarta', 'Ayam & Bebek', 4.8, 25, 7000, 'https://images.unsplash.com/photo-1626082927389-6cd097cdc6ec', TRUE),
('Roti O + Kopi O', 'Roti dan kopi segar setiap hari', 'Jl. Gatot Subroto No. 45, Jakarta', 'Roti & Kue', 4.9, 20, 5000, 'https://images.unsplash.com/photo-1509440159596-0249088772ff', TRUE),
('Pizza Hut Delivery', 'Pizza Italia terbaik di kota', 'Jl. Thamrin No. 78, Jakarta', 'Pizza & Pasta', 4.7, 35, 10000, 'https://images.unsplash.com/photo-1513104890138-7c749659a591', TRUE),
('Sushi Tei', 'Sushi dan Japanese food autentik', 'Jl. Kemang Raya No. 12, Jakarta', 'Japanese', 4.9, 30, 12000, 'https://images.unsplash.com/photo-1579584425555-c3ce17fd4351', TRUE);

-- Insert Sample Menu Items
INSERT INTO menu_items (restaurant_id, name, description, category, price, discount_percent, is_available, is_recommended) VALUES
(1, 'Paket Ayam Goreng Crispy', '1 Ayam Goreng + Nasi + Es Teh', 'Paket', 45000, 0, TRUE, TRUE),
(1, 'Ayam Goreng Spesial', 'Ayam goreng dengan bumbu rahasia', 'Utama', 25000, 0, TRUE, FALSE),
(2, 'Roti O Original', 'Roti butter klasik', 'Roti', 15000, 0, TRUE, TRUE),
(2, 'Kopi O Aren', 'Kopi dengan gula aren asli', 'Minuman', 18000, 0, TRUE, FALSE),
(3, 'Pizza Meat Lovers', 'Pizza dengan topping daging', 'Pizza', 85000, 20, TRUE, TRUE),
(4, 'Sushi Platter Mix', 'Campuran berbagai sushi pilihan', 'Sushi', 95000, 0, TRUE, TRUE);

-- Insert Sample Products
INSERT INTO products (name, description, category, brand, price, discount_percent, stock, unit, is_available, is_flash_sale) VALUES
('Indomie Goreng', 'Mi instan rasa goreng', 'Makanan', 'Indomie', 12500, 0, 100, '1 Pack (5 pcs)', TRUE, FALSE),
('Susu Ultra Milk', 'Susu UHT rasa coklat', 'Minuman', 'Ultra', 20000, 30, 50, '1 Liter', TRUE, TRUE),
('Roti Tawar Sari Roti', 'Roti tawar putih', 'Roti & Kue', 'Sari Roti', 18000, 0, 30, '400g', TRUE, FALSE),
('Telur Ayam Kampung', 'Telur ayam kampung segar', 'Dairy & Telur', 'Fresh', 28000, 0, 25, '10 butir', TRUE, FALSE),
('Aqua Botol', 'Air mineral dalam kemasan', 'Minuman', 'Aqua', 45000, 0, 80, '600ml x 24', TRUE, FALSE);

-- Insert Sample Vouchers
INSERT INTO vouchers (code, name, description, discount_type, discount_value, min_transaction, max_discount, service_type, usage_limit, valid_until) VALUES
('NEWRIDE30', 'Diskon 30% Ride', 'Diskon 30% untuk pengguna baru FlintRide', 'percentage', 30, 0, 10000, 'ride', 1000, '2026-12-31 23:59:59'),
('FOOD50', 'Diskon 50% Food', 'Diskon 50% untuk pemesanan makanan', 'percentage', 50, 50000, 25000, 'food', 500, '2026-12-31 23:59:59'),
('GRATISONGKIR', 'Gratis Ongkir', 'Gratis ongkir untuk semua layanan', 'fixed', 15000, 30000, 15000, 'all', 200, '2026-12-31 23:59:59');

-- ====================================================================
-- DATABASE SETUP COMPLETE! 🎉
-- ====================================================================