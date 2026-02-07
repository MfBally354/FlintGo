# FlintGo - Super App Platform (PHP)

![FlintGo Logo](https://img.shields.io/badge/FlintGo-Super%20App-10B981?style=for-the-badge)

FlintGo adalah platform super app berbasis PHP yang terinspirasi dari Gojek, menawarkan berbagai layanan dalam satu aplikasi yang responsif dan modern.

## 🎨 Color Scheme

- **Primary**: `#10B981` (Green Modern)
- **Secondary**: `#059669` (Dark Green)
- **Background**: `#F8FAFC` (Light Gray)
- **Text**: `#0F172A` (Dark Slate)

## 📱 Layanan FlintGo

1. **FlintRide** - Layanan ojek online cepat dan aman
2. **FlintCar** - Layanan mobil untuk perjalanan nyaman
3. **FlintFood** - Pesan antar makanan favorit
4. **FlintMart** - Belanja kebutuhan sehari-hari
5. **FlintSend** - Kirim paket dengan mudah
6. **FlintPay** - Dompet digital terintegrasi

## 🚀 Quick Start

### Instalasi Cepat (XAMPP)

1. Extract project ke `C:\xampp\htdocs\Fl`
2. Buka phpMyAdmin: `http://localhost/phpmyadmin`
3. Import database dari `database/schema.sql`
4. Buka browser: `http://localhost/flintgo-php/public/`

**Lihat file `INSTALLATION_GUIDE.md` untuk panduan lengkap!**

## 📂 Struktur Project

```
flintgo-php/
├── public/              # Document root
│   ├── index.php       # Landing page  
│   ├── dashboard.php   # Main dashboard
│   └── assets/         # CSS, JS, Images
├── app/                # Application core
│   ├── config/         # Configuration
│   ├── controllers/    # Controllers (MVC)
│   ├── models/         # Models
│   ├── views/          # Views
│   └── helpers/        # Helper functions
├── database/           # SQL files
└── includes/           # Core includes
```

## 💻 Tech Stack

- **Backend**: PHP 7.4+ / PHP 8.x
- **Frontend**: Bootstrap 5.3 (Responsif)
- **Database**: MySQL / MariaDB
- **Icons**: Font Awesome 6
- **JavaScript**: Vanilla JS

## ✨ Fitur Utama

- ✅ **Fully Responsive** - Mobile, Tablet, Desktop
- ✅ **Modern UI/UX** - Clean & Professional
- ✅ **MVC Architecture** - Terstruktur & Maintainable
- ✅ **Multiple Services** - Ride, Food, Mart, dll
- ✅ **User Dashboard** - Interactive & Real-time
- ✅ **Bottom Navigation** - Mobile-friendly
- ✅ **Gradient Design** - Modern color scheme

## 📱 Screenshots

### Desktop View
- Landing page dengan hero section
- Service cards dengan hover effects
- Dashboard dengan promo banner

### Mobile View (Seperti Gojek)
- Responsive layout
- Bottom navigation
- Touch-optimized buttons
- Service grid 2x4

## 🛠️ Konfigurasi

Edit `app/config/database.php`:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'flintgo_db');
```

## 📄 Halaman Tersedia

| Page | File | Description |
|------|------|-------------|
| Landing | `index.php` | Homepage dengan info layanan |
| Dashboard | `dashboard.php` | Main app (seperti Gojek home) |
| FlintRide | `ride.php` | Booking ojek |
| FlintCar | `car.php` | Booking mobil |
| FlintFood | `food.php` | Order makanan |
| FlintMart | `mart.php` | Belanja groceries |

## 🎯 Development Roadmap

- [x] Basic structure
- [x] Responsive design  
- [x] Dashboard layout
- [x] Color scheme
- [ ] User authentication
- [ ] Order system
- [ ] Payment integration
- [ ] Admin panel

## 📝 License

© 2026 FlintGo. All rights reserved.

---

**FlintGo** - Satu App untuk Semua Kebutuhan 🚀
