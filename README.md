# Proxicore CRM – Technical Assignment

This project is a small CRM-style application built as part of a technical assignment.

The application is implemented using Laravel and Livewire with a server-driven UI approach, similar to Razor Pages or Blazor Server, and focuses on clean structure and scalability rather than feature breadth.

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
