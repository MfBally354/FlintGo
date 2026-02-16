# 🚀 Panduan Instalasi FlintGo Super App

## 📋 Persyaratan Sistem

### Software yang Diperlukan:
- **PHP** 7.4 atau lebih tinggi
- **MySQL** 5.7+ atau **MariaDB** 10.3+
- **Apache** atau **Nginx** web server
- **Composer** (opsional)

### Untuk Development Lokal:
- **XAMPP** (Windows/Mac/Linux) - Recommended!
- **WAMP** (Windows)
- **MAMP** (Mac)
- **Laragon** (Windows)

---

## 🎯 Instalasi dengan XAMPP (Paling Mudah!)

### Langkah 1: Install XAMPP
1. Download XAMPP dari: https://www.apachefriends.org/
2. Install XAMPP
3. Jalankan XAMPP Control Panel
4. Start **Apache** dan **MySQL**

### Langkah 2: Setup Project
1. Extract folder `flintgo-php` ke:
   ```
   C:\xampp\htdocs\flintgo-php    (Windows)
   /opt/lampp/htdocs/flintgo-php  (Linux)
   /Applications/XAMPP/htdocs/flintgo-php  (Mac)
   ```

### Langkah 3: Buat Database
1. Buka browser, akses: `http://localhost/phpmyadmin`
2. Klik tab **SQL**
3. Copy-paste isi file `database/schema.sql`
4. Klik **Go/Kirim**

### Langkah 4: Konfigurasi Database
Edit file `app/config/database.php`:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');           // Default XAMPP
define('DB_PASS', '');               // Kosongkan untuk XAMPP
define('DB_NAME', 'flintgo_db');
```

### Langkah 5: Akses Website
Buka browser dan akses:
```
http://localhost/flintgo-php/public/
```

🎉 **Selesai!** Website FlintGo Anda sudah berjalan!

---

## 🖥️ Instalasi di Linux Server

### Langkah 1: Install Dependencies
```bash
# Ubuntu/Debian
sudo apt update
sudo apt install apache2 mysql-server php php-mysql php-mbstring php-xml php-gd

# CentOS/RHEL
sudo yum install httpd mariadb-server php php-mysqlnd php-mbstring php-xml php-gd
```

### Langkah 2: Upload Project
```bash
# Upload project ke server
cd /var/www/html/
sudo mkdir flintgo-php
sudo chown -R $USER:$USER flintgo-php
# Upload files menggunakan FTP/SFTP atau Git
```

### Langkah 3: Set Permissions
```bash
sudo chmod 755 -R /var/www/html/flintgo-php
sudo chmod 777 -R /var/www/html/flintgo-php/uploads
```

### Langkah 4: Setup Database
```bash
mysql -u root -p
```
```sql
CREATE DATABASE flintgo_db;
USE flintgo_db;
SOURCE /var/www/html/flintgo-php/database/schema.sql;
```

### Langkah 5: Configure Apache
Create file: `/etc/apache2/sites-available/flintgo.conf`
```apache
<VirtualHost *:80>
    ServerName flintgo.local
    DocumentRoot /var/www/html/flintgo-php/public
    
    <Directory /var/www/html/flintgo-php/public>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/flintgo-error.log
    CustomLog ${APACHE_LOG_DIR}/flintgo-access.log combined
</VirtualHost>
```

Enable site:
```bash
sudo a2ensite flintgo.conf
sudo a2enmod rewrite
sudo systemctl restart apache2
```

---

## 🌐 Instalasi di Hosting (cPanel)

### Langkah 1: Upload Files
1. Login ke cPanel
2. Buka **File Manager**
3. Upload `flintgo-php.zip` ke `public_html/`
4. Extract file

### Langkah 2: Setup Database
1. Buka **MySQL Databases**
2. Buat database baru: `flintgo_db`
3. Buat user dan password
4. Tambahkan user ke database dengan **All Privileges**

### Langkah 3: Import Database
1. Buka **phpMyAdmin**
2. Pilih database `flintgo_db`
3. Klik tab **Import**
4. Upload file `database/schema.sql`

### Langkah 4: Edit Config
Edit `app/config/database.php`:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'username_anda');
define('DB_PASS', 'password_anda');
define('DB_NAME', 'flintgo_db');
```

### Langkah 5: Fix File Paths
Edit `.htaccess` di root:
```apache
RewriteBase /
```

---

## 📱 Struktur File Project

```
flintgo-php/
├── public/              # Web accessible files
│   ├── index.php       # Landing page
│   ├── dashboard.php   # Main dashboard
│   ├── ride.php        # FlintRide
│   ├── car.php         # FlintCar
│   ├── food.php        # FlintFood
│   ├── mart.php        # FlintMart
│   └── assets/
│       ├── css/
│       ├── js/
│       ├── images/
│       └── icons/
├── app/
│   ├── config/         # Configuration
│   ├── controllers/    # Controllers
│   ├── models/         # Models
│   ├── views/          # Views
│   └── helpers/        # Helper functions
├── database/
│   └── schema.sql      # Database structure
└── includes/
    └── init.php        # App initialization
```

---

## 🎨 Tema Warna FlintGo

```css
Primary:   #10B981  (Green Modern)
Secondary: #059669  (Dark Green)
Background: #F8FAFC (Light Gray)
Text:      #0F172A  (Dark Slate)
```

---

## 🔧 Troubleshooting

### Error: "Connection failed"
**Solusi:**
- Pastikan MySQL sudah running
- Check username/password di `app/config/database.php`
- Pastikan database `flintgo_db` sudah dibuat

### Error: "404 Not Found"
**Solusi:**
- Pastikan mod_rewrite Apache sudah enabled
- Check `.htaccess` file ada di root folder
- Restart Apache

### Error: "Permission denied"
**Solusi:**
```bash
sudo chmod 755 -R flintgo-php/
sudo chmod 777 -R flintgo-php/uploads/
```

### CSS/JS tidak load
**Solusi:**
- Clear browser cache
- Check path di `app/views/layouts/header.php`
- Pastikan folder `public/assets/` ada didalam perangka

---

## 📞 Support

Jika mengalami kesulitan:
1. Check dokumentasi di `README.md`
2. Lihat error log di `error.log`
3. Debug dengan: `error_reporting(E_ALL)`

---

## 🎓 Tips Development

### Enable Debug Mode
Edit `app/config/config.php`:
```php
error_reporting(E_ALL);
ini_set('display_errors', 1);
```

### Disable di Production:
```php
error_reporting(0);
ini_set('display_errors', 0);
```

---

## 🚀 Next Steps

Setelah instalasi berhasil:

1. ✅ Buka `http://localhost/flintgo-php/public/`
2. ✅ Test semua halaman (index, dashboard, ride, food, dll)
3. ✅ Customize sesuai kebutuhan
4. ✅ Tambahkan fitur baru
5. ✅ Deploy ke production!

---

**FlintGo** - Satu App untuk Semua Kebutuhan! 🚀

Happy Coding! 💚
