# Proxicore CRM – Technical Assignment

This project is a small CRM-style application built as part of a technical assignment.

The application is implemented using Laravel and Livewire with a server-driven UI approach, similar to Razor Pages or Blazor Server, and focuses on clean structure and scalability rather than feature breadth.

## Installation

1. Clone repository
2. Install PHP dependencies
   composer install
3. Install frontend dependencies
   npm install
4. Create .env fil
   cp .env.example .env
5. Generate APP_KEY
   php artisan key:generate
6. Create SQLite database
   touch database/database.sqlite
7. Run migrations and seed data
   php artisan migrate:fresh --seed
8. Start development servers
   php artisan serve
9. In another terminal run:
   npm run dev
10. Go to http://127.0.0.1:8000

## Tech stack

-   PHP
-   Laravel
-   Livewire
-   SQLite
-   Tailwind CSS

## Requirements

-   PHP
-   Composer
-   Node.js + npm

## Local setup

1. Install backend dependencies  
   composer install

2. Install frontend dependencies  
   npm install

3. Environment  
   Copy `.env.example` to `.env`

4. Generate application key  
   php artisan key:generate

5. Database  
   SQLite is used for simplicity.  
   Create `database/database.sqlite`  
   php artisan migrate

6. Run locally  
   npm run dev  
   php artisan serve

## Notes

-   No separate AP
