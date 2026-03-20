# 🧠 WiHub

**WiHub** is a simple and modern wiki-style article platform built with Laravel. It allows users to create, read, update, and delete articles with authentication and search functionality.

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square\&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square\&logo=php)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)

---

## ✨ Features

* 📝 **Article Management** — Create, read, update, and delete articles with rich content
* 🔍 **Search** — Find articles by title or content
* 🔐 **Authentication** — Register, login, and logout (session-based)
* 👤 **Author Attribution** — Each article is linked to its creator
* 📊 **Dashboard** — Dedicated dashboard for authenticated users
* 🌙 **Dark UI** — Clean interface with a GitHub-inspired dark theme

---

## 🛠️ Tech Stack

| Layer       | Technology                     |
| ----------- | ------------------------------ |
| Backend     | Laravel 12, PHP 8.2+           |
| Frontend    | Blade Templates, Vanilla JS    |
| Styling     | Custom CSS (GitHub Dark Theme) |
| Database    | SQLite (default), MySQL ready  |
| Build Tools | Vite (optional)                |

---

## 📋 Requirements

Make sure your environment meets the following:

* PHP **8.2+**

  * Extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
* Composer
* Node.js & npm *(optional for frontend assets)*
* SQLite / MySQL / PostgreSQL

---

## 🚀 Installation

### 1. Clone Repository

```bash
git clone https://github.com/EsH-4/WiHub.git
cd WiHub
```

---

### 2. Install Dependencies & Setup

```bash
composer install
cp .env.example .env
php artisan key:generate
```

---

### 3. Database Setup

#### SQLite (Default)

```bash
# Linux/macOS
touch database/database.sqlite

# Windows (PowerShell)
New-Item -Path database\database.sqlite -ItemType File -Force

php artisan migrate
```

#### MySQL / PostgreSQL

Update your `.env` file:

```
DB_CONNECTION=mysql
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password
```

Then run:

```bash
php artisan migrate
```

---

### 4. (Optional) Build Frontend Assets

```bash
npm install
npm run build
```

---

### 5. Run the Application

```bash
php artisan serve
```

Open in your browser:
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## ⚡ Quick Setup

For a faster setup:

```bash
composer run-script setup
```

⚠️ Make sure `database/database.sqlite` exists before running this command if using SQLite.

---

## 📚 Usage

| Feature        | Route                     |
| -------------- | ------------------------- |
| Home           | `/`                       |
| Articles       | `/articles`               |
| View Article   | `/articles/{id}`          |
| Create Article | `/articles/create` (auth) |
| Edit Article   | `/articles/{id}/edit`     |
| Login          | `/login`                  |
| Register       | `/register`               |
| Dashboard      | `/dashboard` (auth)       |

🔒 Only authenticated users can create, edit, and delete articles.

---

## 📁 Project Structure

```
WiHub/
├── app/
│   ├── Http/Controllers/
│   │   ├── ArticleController.php
│   │   └── AuthController.php
│   └── Models/
│       ├── Article.php
│       └── User.php
├── database/migrations/
├── resources/views/
│   ├── layouts/
│   ├── articles/
│   ├── auth/
│   └── dashboard.blade.php
├── routes/web.php
└── public/css/github-dark.css
```

---

## ⚙️ Environment Variables

Key variables in `.env`:

* `APP_NAME` — Application name
* `APP_KEY` — Encryption key
* `APP_URL` — Application URL
* `DB_CONNECTION` — sqlite / mysql / pgsql
* `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

See `.env.example` for the full list.

---

## 📄 License

This project is licensed under the **MIT License**.
👉 [https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT)

---

## 🙌 Acknowledgments

* Built with ❤️ using [Laravel](https://laravel.com)
* UI inspired by GitHub Dark Theme
