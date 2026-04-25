# 📝 Laravel Blog Application

A simple blog application built using **Laravel** with features like post creation, categories, image upload, likes/dislikes, and AJAX interactions.

---

## 🚀 Features

- Create, edit, and delete blog posts
- Category system for posts
- Image upload for posts
- Slug-based URLs for posts
- Like & Dislike system (AJAX, no page reload)
- Modern UI using Tailwind CSS
- Pagination support
- Seeder & Factory support for dummy data

---

## 🛠️ Tech Stack

- Laravel
- PHP
- MySQL / SQLite
- Tailwind CSS
- JavaScript (AJAX Fetch API)

---

## 📦 Installation

### 1. Clone the repository
```bash
git clone https://github.com/your-username/blog-app.git
cd blog-app
2. Install dependencies
composer install
npm install
3. Setup environment
cp .env.example .env
php artisan key:generate
4. Configure database

Update .env file:

DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password

For SQLite:

DB_CONNECTION=sqlite

Then create database file:

touch database/database.sqlite
5. Run migrations & seed data
php artisan migrate --seed

OR (fresh setup):

php artisan migrate:fresh --seed
6. Run the application
php artisan serve

Visit:

http://127.0.0.1:8000
