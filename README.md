# 🍽️ Ristorante — Web Application

Web application per la gestione di un ristorante, sviluppata con **Laravel**.

Il progetto è stato realizzato per mettere in pratica lo sviluppo di una web application completa, dalla gestione del database all'autenticazione degli utenti, fino alla gestione del menu e delle prenotazioni.

## ✨ Funzionalità

### 👤 Autenticazione

* Registrazione e accesso degli utenti
* Gestione del profilo personale
* Aggiornamento della password
* Recupero della password
* Verifica dell'indirizzo email

### 🍴 Gestione del menu

* Visualizzazione del menu
* Creazione di nuovi elementi
* Modifica degli elementi del menu
* Eliminazione degli elementi
* Gestione del menu tramite area amministrativa

### 📅 Gestione delle prenotazioni

* Creazione di nuove prenotazioni
* Visualizzazione delle prenotazioni
* Gestione delle prenotazioni dall'area amministrativa
* Pagina di conferma della prenotazione
* Invio di email relative alle prenotazioni

### 🔐 Area amministrativa

Area dedicata alla gestione del menu e delle prenotazioni del ristorante.

## 🛠️ Tecnologie utilizzate

| Tecnologia       | Utilizzo                           |
| ---------------- | ---------------------------------- |
| **PHP**          | Linguaggio di programmazione       |
| **Laravel**      | Framework backend                  |
| **MySQL**        | Database                           |
| **Blade**        | Template engine                    |
| **Tailwind CSS** | Styling e interfaccia              |
| **JavaScript**   | Funzionalità frontend              |
| **Vite**         | Build tool e gestione degli asset  |
| **Git**          | Versionamento del codice           |
| **GitHub**       | Repository e gestione del progetto |

## 📂 Struttura del progetto

```text
app/                Logica applicativa
bootstrap/          Bootstrap dell'applicazione
config/             Configurazione
database/           Migrazioni, factory e seeders
public/             File pubblici e entry point
resources/          Viste Blade, CSS e JavaScript
routes/             Route dell'applicazione
storage/             File generati dall'applicazione
tests/              Test automatici
```

## 🚀 Installazione

### Requisiti

Per eseguire il progetto sono necessari:

* PHP
* Composer
* Node.js
* npm
* MySQL
* Git

### 1. Clonare il repository

```bash
git clone https://github.com/MariB3195/ristorante.git
cd ristorante
```

### 2. Installare le dipendenze PHP

```bash
composer install
```

### 3. Installare le dipendenze frontend

```bash
npm install
```

### 4. Configurare l'ambiente

Copiare il file `.env.example` e creare il file `.env`.

Su Windows:

```bash
copy .env.example .env
```

Su macOS/Linux:

```bash
cp .env.example .env
```

Generare la chiave dell'applicazione:

```bash
php artisan key:generate
```

Successivamente configurare nel file `.env` i parametri relativi al database.

### 5. Configurare il database

Creare un database MySQL e inserire le relative credenziali nel file `.env`.

Eseguire quindi le migrazioni:

```bash
php artisan migrate
```

### 6. Avviare Laravel

```bash
php artisan serve
```

### 7. Avviare Vite

In un secondo terminale:

```bash
npm run dev
```

L'applicazione sarà disponibile normalmente all'indirizzo:

```text
http://127.0.0.1:8000
```

## 🔒 Sicurezza

Il file `.env` contiene configurazioni e credenziali dell'ambiente locale e **non deve essere caricato nel repository**.

Il progetto utilizza `.gitignore` per escludere file e directory che non devono essere versionati, come configurazioni locali e dipendenze generate.

## 🎯 Obiettivi del progetto

Attraverso questo progetto ho messo in pratica diversi aspetti dello sviluppo web con Laravel:

* architettura MVC
* routing
* controller e model
* migrations e gestione del database
* autenticazione
* validazione dei dati
* gestione dei form
* invio di email
* sviluppo di interfacce con Blade
* styling con Tailwind CSS
* gestione degli asset con Vite
* test automatici
* utilizzo di Git e GitHub

## 🔗 Repository

Il codice sorgente del progetto è disponibile su GitHub:

https://github.com/MariB3195/ristorante

## 👨‍💻 Autore

**MariB3195**

Progetto realizzato come esercizio pratico di sviluppo web con **PHP e Laravel**.
