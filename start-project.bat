@echo off
chcp 65001 >nul
title Pizzeria Egidio - Avvio Progetto

echo 🍕 Avvio Pizzeria Egidio...
echo.

REM Controlla se Docker è installato
docker --version >nul 2>&1
if errorlevel 1 (
    echo ❌ Docker non è installato. Installalo prima di continuare.
    echo    Scarica Docker Desktop da: https://www.docker.com/products/docker-desktop
    pause
    exit /b 1
)

REM Controlla se il file backup.sql esiste
if not exist "backup.sql" (
    echo ❌ File backup.sql non trovato nella directory corrente.
    echo    Assicurati che il file backup.sql sia presente per l'inizializzazione del database.
    pause
    exit /b 1
)

echo ✅ Tutti i prerequisiti sono soddisfatti.
echo.

REM Determina quale comando Docker Compose usare
set DOCKER_COMPOSE_CMD=
docker-compose --version >nul 2>&1
if not errorlevel 1 (
    set DOCKER_COMPOSE_CMD=docker-compose
) else (
    docker compose version >nul 2>&1
    if not errorlevel 1 (
        set DOCKER_COMPOSE_CMD=docker compose
    ) else (
        echo ❌ Docker Compose non è disponibile. Assicurati che Docker Desktop sia installato e avviato.
        pause
        exit /b 1
    )
)

REM Chiedi se è il primo avvio
set "first_run="
set /p "first_run=È il primo avvio del progetto? (y/n): "

if /i "%first_run%"=="y" (
    echo.
    echo 🔄 Primo avvio rilevato. Rimuovo eventuali volumi esistenti per garantire l'inizializzazione pulita...
    %DOCKER_COMPOSE_CMD% down -v >nul 2>&1
    echo.
)

echo 🚀 Avvio dei container...
%DOCKER_COMPOSE_CMD% up -d

if errorlevel 1 (
    echo ❌ Errore durante l'avvio dei container.
    pause
    exit /b 1
)

echo.
echo ⏳ Attendo che i servizi siano pronti...

REM Attesa semplificata
echo    - Attendo 10 secondi per l'inizializzazione...
timeout /t 10 /nobreak >nul

echo.
echo 🎉 Pizzeria Egidio è ora attiva!
echo.
echo 📍 Servizi disponibili:
echo    🌐 WordPress:   http://localhost:8080
echo    🗄️  phpMyAdmin:  http://localhost:8081
echo.
echo 🔑 Credenziali phpMyAdmin:
echo    Server:   db
echo    Username: root
echo    Password: root_password
echo.

if /i "%first_run%"=="y" (
    echo ✨ Il database è stato inizializzato con i dati dal file backup.sql
    echo.
)

echo 💡 Comandi utili:
echo    Per fermare i servizi: %DOCKER_COMPOSE_CMD% down
echo    Per vedere i log: %DOCKER_COMPOSE_CMD% logs -f
echo.

REM Apri automaticamente WordPress nel browser
echo 🌐 Aprendo WordPress nel browser...
start "" "http://localhost:8080"

echo.
pause