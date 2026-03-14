# WiHub

A simple, modern wiki-style article platform built with Laravel. Create, read, update, and delete articles with user authentication and search.

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square&logo=php)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)

---

## Features

- **Articles** — List, create, edit, delete, and view articles with rich content
- **Search** — Find articles by title or content
- **Authentication** — Register, login, and logout with session-based auth
- **Author attribution** — Each article is tied to the user who created it
- **Dashboard** — Simple dashboard for logged-in users
- **Dark UI** — Clean, readable interface with a GitHub-inspired dark theme

---

## Tech Stack

| Layer        | Technology                    |
| ------------ | ----------------------------- |
| Backend      | Laravel 12, PHP 8.2+          |
| Frontend     | Blade templates, vanilla JS   |
| Styling      | Custom CSS (github-dark theme)|
| Database     | SQLite (default), MySQL ready |
| Build        | Vite (optional for assets)    |

---

## Requirements

- **PHP** 8.2 or higher (with extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML)
- **Composer**
- **Node.js** & **npm** (for frontend assets, if using Vite)
- **SQLite** (or MySQL/PostgreSQL — adjust `.env` accordingly)

---

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/EsH-4/WiHub.git
cd WiHub
```

### 2. Install dependencies and configure

```bash
composer install
cp .env.example .env
php artisan key:generate
```

### 3. Database setup (SQLite)

Create the SQLite database file and run migrations:

```bash
# On Linux/macOS
touch database/database.sqlite

# On Windows (PowerShell)
New-Item -Path database\database.sqlite -ItemType File -Force

# Run migrations
php artisan migrate
```

If you prefer **MySQL** or **PostgreSQL**, set `DB_CONNECTION`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in `.env`, then run `php artisan migrate`.

### 4. (Optional) Frontend assets

```bash
npm install
npm run build
```

### 5. Run the application

```bash
php artisan serve
```

Open **http://127.0.0.1:8000** in your browser.

---

## Quick setup (all-in-one)

After cloning and copying `.env.example` to `.env`, you can run:

```bash
composer run-script setup
```

This runs `composer install`, generates `APP_KEY`, runs migrations, installs npm dependencies, and builds assets. Ensure `database/database.sqlite` exists before running it when using SQLite.

---

## Usage

| Action              | URL / Route              |
| ------------------- | ------------------------ |
| Home                | `/`                      |
| All articles        | `/articles`              |
| View article        | `/articles/{id}`         |
| Create article      | `/articles/create` (auth)|
| Edit article        | `/articles/{id}/edit` (auth) |
| Login               | `/login`                 |
| Register            | `/register`              |
| Dashboard           | `/dashboard` (auth)      |

Only authenticated users can create, edit, and delete articles. Search is available on the articles index page.

---

## Project structure (overview)

```
WiHub/
├── app/
│   ├── Http/Controllers/
│   │   ├── ArticleController.php   # Article CRUD
│   │   └── AuthController.php      # Login, register, logout
│   └── Models/
│       ├── Article.php
│       └── User.php
├── database/migrations/            # Users, articles, cache, jobs
├── resources/views/
│   ├── layouts/app.blade.php        # Main layout with nav
│   ├── articles/                   # Index, show, create, edit
│   ├── auth/                       # Login, register (or welcome)
│   └── dashboard.blade.php
├── routes/web.php                  # All web routes
└── public/css/github-dark.css      # Main stylesheet
```

---

## Environment

Key variables in `.env`:

- `APP_NAME` — Application name
- `APP_KEY` — Encryption key (required; generate with `php artisan key:generate`)
- `APP_URL` — Base URL (e.g. `http://localhost:8000`)
- `DB_CONNECTION` — `sqlite`, `mysql`, or `pgsql`
- For MySQL: `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

See `.env.example` for the full list.

---

## License

This project is open-sourced under the [MIT License](https://opensource.org/licenses/MIT).

---

## Acknowledgments

- Built with [Laravel](https://laravel.com).
- UI inspired by GitHub’s dark theme.
