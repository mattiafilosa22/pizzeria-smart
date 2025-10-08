# 🍕 Pizzeria Egidio - Guida Rapida

## ⚡ Avvio Veloce

```bash
# Primo avvio (inizializza il DB con backup.sql)
./start-project.sh

# Avvio normale
docker-compose up -d
```

## 📍 URL Servizi

- **WordPress**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081

## 🔑 Credenziali phpMyAdmin

- Server: `db`
- Username: `root`
- Password: `root_password`

## 🛠️ Comandi Utili

```bash
# Stop
docker-compose down

# Stop e rimuovi volumi (reset completo)
docker-compose down -v

# Log in tempo reale
docker-compose logs -f

# Accesso al container WordPress
docker exec -it pizzeria_egidio_wordpress bash
```

## 🔄 Reset Database

Per reinizializzare il database con backup.sql:

```bash
docker-compose down -v
./start-project.sh
```

## 📁 Struttura Importante

- `backup.sql` - Database di inizializzazione
- `wp-content/` - File WordPress personalizzati
- `docker-compose.yml` - Configurazione container