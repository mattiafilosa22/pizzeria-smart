# Istruzioni per l'installazione del tema Pizzeria Egidio

## Installazione

1. **Copia i file del tema**
   - Assicurati che tutti i file siano nella cartella `/wp-content/themes/pizzeria-egidio/`

2. **Attivazione del tema**
   - Vai su **Aspetto > Temi** nel pannello WordPress
   - Seleziona "Pizzeria Egidio" e clicca "Attiva"

3. **Configurazione iniziale**
   - Vai su **Aspetto > Personalizza** per configurare:
     - Titolo e sottotitolo dell'hero banner
     - Informazioni di contatto (telefono, email, indirizzo)
     - Orari di apertura

4. **Creazione delle pagine**
   Crea le seguenti pagine:

   **Menu** (slug: menu)
   - Assegna template: "Menu Page"

   **La Nostra Storia** (slug: la-nostra-storia)
   - Assegna template: "La Nostra Storia"

   **Contatti** (slug: contatti)
   - Assegna template: "Contatti"

5. **Configurazione menu di navigazione**
   - Vai su **Aspetto > Menu**
   - Crea un nuovo menu con i link alle pagine create
   - Assegnalo alla posizione "Menu Principale"

6. **Aggiunta delle pizze**
   - Vai su **Pizze > Aggiungi Pizza** per creare le pizze del menu
   - Configura le categorie in **Pizze > Categorie Pizza**
   - Per ogni pizza aggiungi: nome, descrizione, ingredienti, prezzo e immagine

7. **Personalizzazione immagini**
   - Carica le immagini nella cartella `/assets/images/` del tema
   - Nomi file consigliati:
     - `hero-bg.jpg` (1920x1080px) - Sfondo hero banner
     - `pizza-impasto.jpg` (600x400px) - Immagine impasto
     - `locale-interno.jpg` (600x400px) - Interno locale
     - `storia-egidio-vintage.jpg` - Foto storica
     - `pizza-making.jpg` - Preparazione pizze

## Configurazioni aggiuntive

### Google Maps
- Nel file `page-contatti.php` sostituisci l'iframe della mappa con le coordinate reali della pizzeria

### Social Media
- Aggiorna i link ai social media nel footer.php

### SEO
- Installa un plugin SEO come Yoast SEO o RankMath
- Configura meta title e description per ogni pagina

### Performance
- Installa un plugin di caching come WP Rocket o W3 Total Cache
- Ottimizza le immagini con un plugin come Smush

### Analytics
- Aggiungi Google Analytics tramite Google Site Kit o manualmente

## Personalizzazioni avanzate

### Colori del tema
Modifica le variabili CSS in `style.css`:
```css
:root {
    --primary-color: #d4af37; /* Oro */
    --secondary-color: #2c3e50; /* Blu scuro */
    --accent-color: #e74c3c; /* Rosso */
}
```

### Font personalizzati
- I font sono caricati da Google Fonts nel functions.php
- Per cambiare font, modifica l'URL in `pizzeria_egidio_scripts()`

### Layout responsive
- Il tema è già responsive
- Per personalizzazioni usa il file `assets/css/responsive.css`

## Plugin consigliati

- **Contact Form 7**: Per form di contatto
- **Yoast SEO**: Per ottimizzazione SEO
- **WP Rocket**: Per caching e performance
- **Smush**: Per ottimizzazione immagini
- **UpdraftPlus**: Per backup
- **Wordfence**: Per sicurezza

## Supporto e manutenzione

- Testa sempre gli aggiornamenti su un ambiente di staging
- Fai backup regolari del sito
- Monitora le performance con tools come GTmetrix
- Controlla regolarmente gli errori nel log di WordPress

## Note tecniche

- Tema compatibile con WordPress 5.0+
- Supporta Gutenberg editor
- Responsive design mobile-first
- Codice ottimizzato per velocità
- Standard WordPress coding compliant
- Accessibilità WCAG 2.1 AA

## Licenza

Tema sviluppato specificamente per Pizzeria Egidio.
Tutti i diritti riservati.