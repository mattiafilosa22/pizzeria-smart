# 🍕 Pizzeria Egidio - Guida Windows

## 🚀 Come Avviare su Windows

### Metodo 1: File Batch (Raccomandato - Più Semplice)

1. Apri **Esplora File** e vai nella cartella del progetto
2. **Doppio clic** su `start-project.bat`
3. Segui le istruzioni nella finestra che si apre

### Metodo 2: PowerShell (Avanzato)

1. **Tasto destro** nella cartella del progetto → "Apri in PowerShell" (o "Apri finestra PowerShell qui")
2. Digita: `.\start-project.ps1`
3. Se appare un errore di policy, esegui prima:
   ```powershell
   Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned
   ```

### Metodo 3: Comando Manuale

1. Apri **Command Prompt** o **PowerShell**
2. Vai nella cartella del progetto:
   ```cmd
   cd "C:\percorso\verso\pizzeria-egidio"
   ```
3. Esegui:
   ```cmd
   docker-compose up -d
   ```

## 🔧 Requisiti Windows

- **Docker Desktop per Windows** (scarica da: https://www.docker.com/products/docker-desktop)
- Docker Desktop deve essere **avviato** prima di usare gli script

## ⚠️ Problemi Comuni su Windows

### "Docker non trovato"
- Assicurati che Docker Desktop sia installato e avviato
- Riavvia il computer dopo l'installazione di Docker Desktop

### "File non eseguibile"
- Su Windows, gli script `.sh` non funzionano
- Usa `start-project.bat` invece di `start-project.sh`

### "Execution Policy"
Per PowerShell, se ricevi errori di policy:
```powershell
Set-ExecutionPolicy -Scope CurrentUser -ExecutionPolicy RemoteSigned
```

### "docker-compose vs docker compose"
- Script rileva automaticamente quale versione usare
- Docker Desktop recente usa `docker compose` (senza trattino)
- Versioni più vecchie usano `docker-compose` (con trattino)

## 🎯 Risultato Atteso

Una volta avviato, dovresti vedere:
- ✅ Controllo prerequisiti
- 🔄 Avvio container
- 🎉 Servizi attivi
- 🌐 Browser si apre automaticamente su WordPress

## 📍 URL Servizi

- **WordPress**: http://localhost:8080
- **phpMyAdmin**: http://localhost:8081

## 🛑 Come Fermare

Nella stessa cartella, esegui:
```cmd
docker-compose down
```

Oppure usa Docker Desktop per fermare i container graficamente.