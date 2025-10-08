# Script PowerShell per avviare il progetto Pizzeria Egidio su Windows
# Eseguire come: .\start-project.ps1

Write-Host "🍕 Avvio Pizzeria Egidio..." -ForegroundColor Green
Write-Host ""

# Controlla se Docker è installato
if (-not (Get-Command "docker" -ErrorAction SilentlyContinue)) {
    Write-Host "❌ Docker non è installato. Installalo prima di continuare." -ForegroundColor Red
    Write-Host "   Scarica Docker Desktop da: https://www.docker.com/products/docker-desktop"
    Read-Host "Premi Enter per uscire"
    exit 1
}

# Controlla se Docker Compose è disponibile
$dockerComposeCmd = $null
if (Get-Command "docker-compose" -ErrorAction SilentlyContinue) {
    $dockerComposeCmd = "docker-compose"
} elseif (docker compose version 2>$null) {
    $dockerComposeCmd = "docker compose"
} else {
    Write-Host "❌ Docker Compose non è disponibile. Assicurati che Docker Desktop sia installato e avviato." -ForegroundColor Red
    Read-Host "Premi Enter per uscire"
    exit 1
}

# Controlla se il file backup.sql esiste
if (-not (Test-Path "backup.sql")) {
    Write-Host "❌ File backup.sql non trovato nella directory corrente." -ForegroundColor Red
    Write-Host "   Assicurati che il file backup.sql sia presente per l'inizializzazione del database."
    Read-Host "Premi Enter per uscire"
    exit 1
}

Write-Host "✅ Tutti i prerequisiti sono soddisfatti." -ForegroundColor Green
Write-Host ""

# Chiedi se è il primo avvio
$firstRun = Read-Host "È il primo avvio del progetto? (y/n)"

if ($firstRun -match "^[Yy]$") {
    Write-Host ""
    Write-Host "🔄 Primo avvio rilevato. Rimuovo eventuali volumi esistenti per garantire l'inizializzazione pulita..." -ForegroundColor Yellow

    if ($dockerComposeCmd -eq "docker-compose") {
        & docker-compose down -v 2>$null
    } else {
        & docker compose down -v 2>$null
    }
    Write-Host ""
}

Write-Host "🚀 Avvio dei container..." -ForegroundColor Cyan

if ($dockerComposeCmd -eq "docker-compose") {
    & docker-compose up -d
} else {
    & docker compose up -d
}

if ($LASTEXITCODE -ne 0) {
    Write-Host "❌ Errore durante l'avvio dei container." -ForegroundColor Red
    Read-Host "Premi Enter per uscire"
    exit 1
}

# Attendi che i container siano pronti
Write-Host ""
Write-Host "⏳ Attendo che i servizi siano pronti..." -ForegroundColor Yellow

# Attendi che il database sia pronto (versione semplificata per Windows)
Write-Host "   - Controllo database MySQL..."
$timeout = 30
$dbReady = $false

for ($i = 0; $i -lt $timeout; $i++) {
    Start-Sleep -Seconds 2

    $result = & docker exec pizzeria_egidio_db mysql -u root -proot_password -e "SELECT 1" 2>$null
    if ($LASTEXITCODE -eq 0) {
        $dbReady = $true
        break
    }
    Write-Host "." -NoNewline
}

if ($dbReady) {
    Write-Host " ✅ Database pronto!" -ForegroundColor Green
} else {
    Write-Host " ⚠️ Database potrebbe non essere completamente pronto, ma continuo..." -ForegroundColor Yellow
}

# Controlla WordPress (versione semplificata)
Write-Host "   - Controllo WordPress..."
Start-Sleep -Seconds 5
Write-Host " ✅ WordPress dovrebbe essere pronto!" -ForegroundColor Green

Write-Host ""
Write-Host "🎉 Pizzeria Egidio è ora attiva!" -ForegroundColor Green
Write-Host ""
Write-Host "📍 Servizi disponibili:" -ForegroundColor Cyan
Write-Host "   🌐 WordPress:   http://localhost:8080"
Write-Host "   🗄️  phpMyAdmin:  http://localhost:8081"
Write-Host ""
Write-Host "🔑 Credenziali phpMyAdmin:" -ForegroundColor Cyan
Write-Host "   Server:   db"
Write-Host "   Username: root"
Write-Host "   Password: root_password"
Write-Host ""

if ($firstRun -match "^[Yy]$") {
    Write-Host "✨ Il database è stato inizializzato con i dati dal file backup.sql" -ForegroundColor Green
    Write-Host ""
}

Write-Host "💡 Comandi utili:" -ForegroundColor Cyan
if ($dockerComposeCmd -eq "docker-compose") {
    Write-Host "   Per fermare i servizi: docker-compose down"
    Write-Host "   Per vedere i log: docker-compose logs -f"
} else {
    Write-Host "   Per fermare i servizi: docker compose down"
    Write-Host "   Per vedere i log: docker compose logs -f"
}

Write-Host ""
Read-Host "Premi Enter per chiudere"