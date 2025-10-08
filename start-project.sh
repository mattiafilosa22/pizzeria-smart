#!/bin/bash

# Script per avviare il progetto Pizzeria Egidio
# Questo script si assicura che il database venga inizializzato correttamente

echo "🍕 Avvio Pizzeria Egidio..."
echo ""

# Controlla se Docker è installato
if ! command -v docker &> /dev/null; then
    echo "❌ Docker non è installato. Installalo prima di continuare."
    exit 1
fi

# Controlla se Docker Compose è installato
if ! command -v docker-compose &> /dev/null; then
    echo "❌ Docker Compose non è installato. Installalo prima di continuare."
    exit 1
fi

# Controlla se il file backup.sql esiste
if [ ! -f "backup.sql" ]; then
    echo "❌ File backup.sql non trovato nella directory corrente."
    echo "   Assicurati che il file backup.sql sia presente per l'inizializzazione del database."
    exit 1
fi

echo "✅ Tutti i prerequisiti sono soddisfatti."
echo ""

# Chiedi se è il primo avvio
read -p "È il primo avvio del progetto? (y/n): " first_run

if [[ $first_run =~ ^[Yy]$ ]]; then
    echo ""
    echo "🔄 Primo avvio rilevato. Rimuovo eventuali volumi esistenti per garantire l'inizializzazione pulita..."
    docker-compose down -v 2>/dev/null || true
    echo ""
fi

echo "🚀 Avvio dei container..."
docker-compose up -d

# Attendi che i container siano pronti
echo ""
echo "⏳ Attendo che i servizi siano pronti..."

# Attendi che il database sia pronto
echo "   - Controllo database MySQL..."
timeout=60
while ! docker-compose exec -T db mysql -u root -proot_password -e "SELECT 1" &> /dev/null; do
    if [ $timeout -le 0 ]; then
        echo "❌ Timeout: il database non è diventato disponibile in tempo."
        exit 1
    fi
    sleep 2
    timeout=$((timeout-2))
    echo -n "."
done
echo " ✅ Database pronto!"

# Attendi che WordPress sia pronto
echo "   - Controllo WordPress..."
timeout=60
while ! curl -s http://localhost:8080 &> /dev/null; do
    if [ $timeout -le 0 ]; then
        echo "❌ Timeout: WordPress non è diventato disponibile in tempo."
        exit 1
    fi
    sleep 2
    timeout=$((timeout-2))
    echo -n "."
done
echo " ✅ WordPress pronto!"

echo ""
echo "🎉 Pizzeria Egidio è ora attiva!"
echo ""
echo "📍 Servizi disponibili:"
echo "   🌐 WordPress:   http://localhost:8080"
echo "   🗄️  phpMyAdmin:  http://localhost:8081"
echo ""
echo "🔑 Credenziali phpMyAdmin:"
echo "   Server:   db"
echo "   Username: root"
echo "   Password: root_password"
echo ""

if [[ $first_run =~ ^[Yy]$ ]]; then
    echo "✨ Il database è stato inizializzato con i dati dal file backup.sql"
    echo ""
fi

echo "💡 Per fermare i servizi: docker-compose down"
echo "💡 Per vedere i log: docker-compose logs -f"