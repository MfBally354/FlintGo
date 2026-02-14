# FlintGo Docker Makefile
# Mempermudah perintah Docker untuk pengembangan

.PHONY: help build up down restart logs shell mysql clean install

# Default
help:
	@echo "==================== FlintGo Docker Commands ===================="
	@echo "make build      - Build Docker images"
	@echo "make up         - Start semua containers"
	@echo "make down       - Stop semua containers"
	@echo "make restart    - Restart semua containers"
	@echo "make logs       - Lihat logs dari semua containers"
	@echo "make shell      - Masuk ke container web (bash)"
	@echo "make mysql      - Masuk ke MySQL CLI"
	@echo "make clean      - Hapus semua containers dan volumes"
	@echo "make install    - Build dan start containers untuk pertama kali"
	@echo "================================================================="

# Build Docker images
build:
	@echo "🔨 Building Docker images..."
	docker-compose build

# Start containers
up:
	@echo "🚀 Starting FlintGo containers..."
	docker-compose up -d
	@echo "✅ FlintGo sudah berjalan!"
	@echo "   🌐 Website: http://localhost:8090"
	@echo "   🗄️  phpMyAdmin: http://localhost:8091"
	@echo "   🔌 MySQL Port: 3307"

# Stop containers
down:
	@echo "⏹️  Stopping FlintGo containers..."
	docker-compose down

# Restart containers
restart:
	@echo "🔄 Restarting FlintGo containers..."
	docker-compose restart
	@echo "✅ FlintGo sudah di-restart!"

# View logs
logs:
	@echo "📋 Menampilkan logs..."
	docker-compose logs -f

# Enter web container shell
shell:
	@echo "💻 Masuk ke web container..."
	docker-compose exec web bash

# Enter MySQL CLI
mysql:
	@echo "🗄️  Masuk ke MySQL CLI..."
	docker-compose exec mysql mysql -u root -proot flintgo_db

# Clean up everything
clean:
	@echo "🧹 Cleaning up containers and volumes..."
	docker-compose down -v
	@echo "✅ Cleanup selesai!"

# First time installation
install:
	@echo "📦 Installing FlintGo untuk pertama kali..."
	@echo "1️⃣  Building images..."
	docker-compose build
	@echo "2️⃣  Starting containers..."
	docker-compose up -d
	@echo "3️⃣  Waiting for MySQL to be ready..."
	sleep 15
	@echo "✅ Installation selesai!"
	@echo ""
	@echo "==================== FlintGo Siap Digunakan ===================="
	@echo "   🌐 Website: http://localhost:8090"
	@echo "   🗄️  phpMyAdmin: http://localhost:8091"
	@echo "   🔌 MySQL Port: 3307"
	@echo "   👤 MySQL User: root / root"
	@echo "================================================================="

# Update database configuration
update-config:
	@echo "⚙️  Updating database configuration..."
	docker-compose exec web sed -i "s/define('DB_HOST', 'localhost');/define('DB_HOST', 'mysql');/" /var/www/html/app/config/database.php
	docker-compose exec web sed -i "s/define('DB_USER', 'root');/define('DB_USER', 'flintgo_user');/" /var/www/html/app/config/database.php
	docker-compose exec web sed -i "s/define('DB_PASS', '');/define('DB_PASS', 'flintgo_pass');/" /var/www/html/app/config/database.php
	@echo "✅ Configuration updated!"
