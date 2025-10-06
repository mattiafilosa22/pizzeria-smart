# Pizzeria Egidio - WordPress Docker Setup

Questo progetto utilizza Docker Compose per eseguire WordPress 6.8.3 con MySQL e phpMyAdmin in container separati.

## Struttura dei Container

- **wordpress**: WordPress 6.8.3 con PHP 8.1 e Apache
- **db**: MySQL 8.0 per il database
- **phpmyadmin**: phpMyAdmin per la gestione del database

## Prerequisiti

- Docker
- Docker Compose

## Installazione e Avvio

1. Clona o scarica il progetto
2. Posizionati nella directory del progetto
3. Avvia i container:

```bash
docker-compose up -d
```

## Accesso ai Servizi

- **WordPress**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081
  - Server: db
  - Username: root
  - Password: root_password

## Configurazione Database

Il database viene creato automaticamente con le seguenti credenziali:
- Database: pizzeria_egidio
- Username: wordpress
- Password: wordpress_password

## Comandi Utili

### Avviare i container
```bash
docker-compose up -d
```

### Fermare i container
```bash
docker-compose down
```

### Vedere i log
```bash
docker-compose logs -f
```

### Riavviare un singolo container
```bash
docker-compose restart wordpress
```

### Accedere al container WordPress
```bash
docker exec -it pizzeria_egidio_wordpress bash
```

### Backup del database
```bash
docker exec pizzeria_egidio_db mysqldump -u root -proot_password pizzeria_egidio > backup.sql
```

### Ripristino del database
```bash
docker exec -i pizzeria_egidio_db mysql -u root -proot_password pizzeria_egidio < backup.sql
```

## Personalizzazione

- I file di WordPress sono montati nel volume `wordpress_data`
- La cartella `wp-content` è montata localmente per facilitare lo sviluppo
- Le configurazioni del database sono nel file `.env`

## Sicurezza

⚠️ **IMPORTANTE**: Cambia le password predefinite prima di utilizzare in produzione!

Modifica il file `.env` per cambiare:
- MYSQL_ROOT_PASSWORD
- MYSQL_PASSWORD
- WORDPRESS_DB_PASSWORD

## Troubleshooting

### WordPress non si connette al database
1. Verifica che il container db sia in esecuzione: `docker-compose ps`
2. Controlla i log: `docker-compose logs db`
3. Verifica le credenziali nel file `.env`

### Permessi dei file
Se hai problemi con i permessi:
```bash
docker exec pizzeria_egidio_wordpress chown -R www-data:www-data /var/www/html
```

### Reset completo
Per ricominciare da capo:
```bash
docker-compose down -v
docker-compose up -d
```