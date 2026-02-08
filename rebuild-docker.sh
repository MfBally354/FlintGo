#!/bin/bash
# FlintGo - Rebuild Docker Script

echo "🧹 Cleaning up old containers and images..."
docker compose down -v

echo ""
echo "🗑️  Removing old images..."
docker rmi flintgo-web 2>/dev/null || true

echo ""
echo "🔨 Building new Docker images..."
docker compose build --no-cache

echo ""
echo "🚀 Starting FlintGo containers..."
docker compose up -d

echo ""
echo "⏳ Waiting for MySQL to be ready..."
sleep 15

echo ""
echo "✅ FlintGo is ready!"
echo ""
echo "==================== Access URLs ===================="
echo "🌐 Website:    http://localhost:8090"
echo "🗄️  phpMyAdmin: http://localhost:8091"
echo "🔌 MySQL Port: 3307"
echo "===================================================="
echo ""
echo "📋 Check status: docker compose ps"
echo "📋 View logs:    docker compose logs -f"
