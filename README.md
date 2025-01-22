# Rental Website

Een Laravel-website waarmee gebruikers woningen te huur aan kunnen bieden. Gebruikers kunnen woningen toevoegen en beheren, inclusief details zoals het aantal vierkante meters. Dit project maakt gebruik van het Laravel-framework voor een gebruiksvriendelijke en efficiënte ervaring.

## Functies

- **Gebruikersbeheer**: Registreren, inloggen en gebruikersprofielen beheren.
- **Woningbeheer**: Gebruikers kunnen woningen toevoegen, inclusief details zoals:
  - Adres
  - Aantal vierkante meters
  - Beschrijving
- **Zoekfunctie**: Doorzoek beschikbare woningen.
- **Responsief ontwerp**: Werkt op desktop en mobiel.

## Installatie-instructies

Volg deze stappen om de applicatie lokaal op te zetten:

### 1. Vereisten

Zorg ervoor dat je de volgende software hebt geïnstalleerd:

- PHP (≥ 8.1)
- Composer
- MySQL
- Node.js en npm (voor frontend assets)
- Git

### 2. Clone de repository

Gebruik Git om de repository te clonen:

```bash
git clone <repository-url>
cd <repository-map>
```

### 3. Installeer afhankelijkheden

Voer de volgende commandos uit om alle benodigde afhankelijkheden te installeren:

```bash
composer install
npm install
```

### 4. Configureer de omgeving

Kopieer het voorbeeld `.env`-bestand en pas het aan:

```bash
cp .env.example .env
```

Pas de volgende instellingen aan in het `.env`-bestand:

- **APP_NAME**: Naam van de applicatie
- **DB_DATABASE**: Naam van je database
- **DB_USERNAME**: Je databasegebruikersnaam
- **DB_PASSWORD**: Je databasewachtwoord

### 5. Genereer een applicatiesleutel

```bash
php artisan key:generate
```

### 6. Voer database migraties uit

```bash
php artisan migrate
```

### 7. Start de server

Start de ontwikkelserver met het volgende commando:

```bash
php artisan serve
```

De applicatie is nu beschikbaar op [http://localhost:8000](http://localhost:8000).

### 8. Frontend assets bouwen

Bouw de frontend assets:

```bash
npm run dev
```

## Testgegevens toevoegen (optioneel)

Voer de volgende command uit om voorbeeldgegevens toe te voegen aan de database:

```bash
php artisan db:seed
```

## Gebruik

1. Registreer een gebruiker of log in.
2. Voeg een nieuwe woning toe met details zoals adres en aantal vierkante meters.
3. Bekijk en beheer je aangeboden woningen.

## Ondersteuning

Als je problemen tegenkomt of vragen hebt, neem dan contact op via [support@example.com](mailto:support@example.com).

## Bijdragen

Bijdragen aan dit project zijn welkom. Maak een fork van de repository, maak een feature branch, en dien een pull request in.

## Licentie

Dit project is gelicentieerd onder de MIT-licentie. Zie het bestand `LICENSE` voor meer informatie.

