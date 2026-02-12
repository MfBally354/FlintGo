# 🐳 FlintGo Docker Setup

Panduan lengkap untuk menjalankan FlintGo menggunakan Docker.

## 📋 Prerequisites

Pastikan Anda sudah menginstall:
- **Docker** (versi 20.10 atau lebih baru)
- **Docker Compose** (versi 1.29 atau lebih baru)

Cek versi Docker Anda:
```bash
docker -v # Example: Docker version 29.2.1, build a5c7197
docker compose version # Example: Docker Compose version v5.0.2
```

## 🚀 Quick Start

### Metode 1: Menggunakan Makefile (Recommended)

```bash
# Gunakan
# Install dan jalankan untuk pertama kali
make install # Ini dilakukan saat pertama kali saja

# Atau step by step:
make build    # Build Docker images
make up       # Start containers
```

### Metode 2: Menggunakan Docker Compose

```bash
# Build images
docker-compose build

# Start containers
docker-compose up -d

# Check status
docker-compose ps
```

## 🌐 Akses Aplikasi

Setelah containers berjalan:

- **Website FlintGo**: http://localhost:8090
- **phpMyAdmin**: http://localhost:8091
- **MySQL Port**: 3307 (host), 3306 (container)

## 🔑 Kredensial Default

### MySQL
- **Host**: localhost (dari host machine) atau `mysql` (dari container)
- **Port**: 3307 (dari host), 3306 (dari container)
- **Root Password**: root
- **Database**: flintgo_db
- **User**: flintgo_user
- **Password**: flintgo_pass

### phpMyAdmin
- **URL**: http://localhost:8091
- **Username**: root
- **Password**: root

## 📝 Perintah Berguna

### Menggunakan Makefile

```bash
make help      # Lihat semua perintah available
make up        # Start containers
make down      # Stop containers
make restart   # Restart containers
make logs      # Lihat logs
make shell     # Masuk ke web container
make mysql     # Masuk ke MySQL CLI
make clean     # Hapus semua containers dan volumes
```

### Menggunakan Docker Compose

```bash
# Start containers
docker-compose up -d

# Stop containers
docker-compose down

# Restart containers
docker-compose restart

# Lihat logs
docker-compose logs -f

# Lihat logs service tertentu
docker-compose logs -f web
docker-compose logs -f mysql

# Masuk ke container
docker-compose exec web bash
docker-compose exec mysql bash

# Rebuild containers
docker-compose up -d --build
```

## 🗄️ Database Management

### Import Database

Database akan otomatis ter-import saat pertama kali container dijalankan dari file `database/schema.sql`.

Jika ingin import manual:

```bash
# Menggunakan docker-compose
docker-compose exec mysql mysql -u root -proot flintgo_db < database/schema.sql

# Atau dari host machine
mysql -h 127.0.0.1 -P 3307 -u root -proot flintgo_db < database/schema.sql
```

### Backup Database

```bash
# Backup menggunakan docker-compose
docker-compose exec mysql mysqldump -u root -proot flintgo_db > backup.sql

# Atau dari host machine
mysqldump -h 127.0.0.1 -P 3307 -u root -proot flintgo_db > backup.sql
```

### Restore Database

```bash
# Restore menggunakan docker-compose
docker-compose exec -T mysql mysql -u root -proot flintgo_db < backup.sql

# Atau dari host machine
mysql -h 127.0.0.1 -P 3307 -u root -proot flintgo_db < backup.sql
```

## 🔧 Troubleshooting

### Port sudah digunakan

Jika port 8090 atau 3307 sudah digunakan, edit file `docker-compose.yml`:

```yaml
services:
  web:
    ports:
      - "9090:80"  # Ganti 8090 ke port lain
  
  mysql:
    ports:
      - "3308:3306"  # Ganti 3307 ke port lain
```

### Container tidak bisa start

```bash
# Check logs
docker-compose logs

# Restart containers
docker-compose restart

# Rebuild everything
docker-compose down -v
docker-compose up -d --build
```

### MySQL Connection Error

Pastikan konfigurasi database sudah benar di `app/config/database.php`:

```php
define('DB_HOST', 'mysql');  // Bukan 'localhost'
define('DB_USER', 'flintgo_user');
define('DB_PASS', 'flintgo_pass');
define('DB_NAME', 'flintgo_db');
```

### Permission Issues

```bash
# Fix permissions
docker-compose exec web chown -R www-data:www-data /var/www/html
docker-compose exec web chmod -R 755 /var/www/html
docker-compose exec web chmod -R 777 /var/www/html/uploads
```

## 📁 Struktur Docker

```
FlintGo/
├── Dockerfile                 # PHP Apache image
├── docker-compose.yml         # Services configuration
├── .dockerignore             # Files to ignore
├── Makefile                  # Helper commands
├── docker/
│   └── apache/
│       └── 000-default.conf  # Apache config
└── database/
    └── schema.sql            # Database schema
```

## 🔄 Update Aplikasi

Jika ada perubahan code:

```bash
# Restart web container
docker-compose restart web

# Atau rebuild jika ada perubahan Dockerfile
docker-compose up -d --build web
```

## 🛑 Stop dan Hapus Semua

```bash
# Stop containers
docker-compose down

# Stop dan hapus volumes
docker-compose down -v

# Atau menggunakan Makefile
make clean
```

## 📊 Monitoring

### Check Container Status

```bash
docker-compose ps
```

### Check Resource Usage

```bash
docker stats
```

### View Logs

```bash
# All services
docker-compose logs -f

# Specific service
docker-compose logs -f web
docker-compose logs -f mysql
```

## 🎯 Production Deployment

Untuk production, jangan lupa:

1. Ganti password MySQL
2. Set `APP_DEBUG=false`
3. Ganti `SECURE_KEY`
4. Setup SSL/HTTPS
5. Gunakan volume untuk uploads
6. Setup regular backup

## 📞 Support

Jika ada masalah:
1. Check logs: `docker-compose logs`
2. Restart containers: `docker-compose restart`
3. Rebuild: `docker-compose up -d --build`

---

**FlintGo** - Satu App untuk Semua Kebutuhan! 🚀💚
