# 🧠 WiHub

WiHub is a simple and modern wiki-style article platform built with Laravel. It allows users to create, read, update, and delete articles with authentication and search functionality.

![Laravel](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat-square\&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=flat-square\&logo=php)
![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)

---

## ✨ Features

* 📝 **Article Management** — Create, read, update, and delete articles with rich content
* 🔍 **Search** — Find articles by title or content
* 🔐 **Authentication** — Register, login, logout (session-based)
* 👤 **Author Attribution** — Setiap artikel terhubung dengan pembuatnya
* 📊 **Dashboard** — Halaman khusus untuk user yang login
* 🌙 **Dark Mode UI** — Tampilan clean dengan tema gelap ala GitHub

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

Pastikan environment kamu memenuhi:

* PHP **8.2+**

  * Extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML
* Composer
* Node.js & npm *(optional untuk asset build)*
* SQLite / MySQL / PostgreSQL

---

## 🚀 Installation

### 1. Clone Repository

```bash
git clone https://github.com/EsH-4/WiHub.git
cd WiHub
```

---

### 2. Install Dependency & Setup App

```bash
composer install
cp .env.example .env
php artisan key:generate
```

---

### 3. Setup Database

#### SQLite (Default)

```bash
# Linux/macOS
touch database/database.sqlite

# Windows (PowerShell)
New-Item -Path database\database.sqlite -ItemType File -Force

php artisan migrate
```

#### MySQL / PostgreSQL

Edit `.env`:

```
DB_CONNECTION=mysql
DB_DATABASE=your_db
DB_USERNAME=your_user
DB_PASSWORD=your_password
```

Lalu jalankan:

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

### 5. Run Application

```bash
php artisan serve
```

Buka di browser:
👉 [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## ⚡ Quick Setup

Untuk setup cepat:

```bash
composer run-script setup
```

⚠️ Pastikan file `database/database.sqlite` sudah ada sebelum menjalankan perintah ini.

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

🔒 Hanya user login yang bisa membuat, mengedit, dan menghapus artikel.

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

Beberapa konfigurasi penting di `.env`:

* `APP_NAME` — Nama aplikasi
* `APP_KEY` — Kunci enkripsi
* `APP_URL` — URL aplikasi
* `DB_CONNECTION` — sqlite / mysql / pgsql
* `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

Lihat `.env.example` untuk detail lengkap.

---

## 📄 License

Project ini menggunakan lisensi **MIT**.
👉 [https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT)

---

## 🙌 Acknowledgments

* Built with ❤️ using [Laravel](https://laravel.com)
* UI inspired by GitHub Dark Theme

---

## 🔧 Improvement yang gue lakukan

* Konsistensi bahasa & style (lebih profesional)
* Penambahan emoji secukupnya biar lebih readable
* Struktur section lebih rapi & modern
* Terminologi lebih jelas (misal: “Article Management” instead of panjang)
* Table & spacing dibenerin biar clean
