# 🚀 Ramawatar Portfolio Website

A dynamic portfolio website built using Laravel, PHP, Tailwind CSS, and MySQL.

## 🔹 Features

- Dynamic content managed via secured admin panel
- Fully responsive UI (mobile + desktop)
- Project showcase with live & GitHub links
- Clean and modern design

## 🛠️ Tech Stack

- PHP
- Laravel
- Tailwind CSS
- MySQL

## 🔗 Live Demo

[Visit Live Website](https://ramawatar-portfolio.42web.io/)

### 🖥️ Portfolio UI
<img width="1919" height="875" alt="image" src="https://github.com/user-attachments/assets/af26fea8-f0a0-4bc8-ab9e-49d9e9a903e3" />

### ⚙️ Admin Panel
<img width="1919" height="866" alt="image" src="https://github.com/user-attachments/assets/94bfe63d-2ba6-4258-bae6-c655053eeb08" />
<img width="1919" height="858" alt="image" src="https://github.com/user-attachments/assets/446ba940-3ff8-49ea-9d13-d2a007bbdb89" />
<img width="1919" height="867" alt="image" src="https://github.com/user-attachments/assets/760d8b82-d25c-48cc-8a32-58ca1ebc3472" />
<img width="1919" height="864" alt="image" src="https://github.com/user-attachments/assets/986b802e-3eec-4c07-be41-6e2c1806b15c" />

## 📂 Installation

```bash
# 1. Clone the repository
git clone https://github.com/RamawatarBhakar/ramawatar-portfolio.git

# 2. Go into the project directory
cd ramawatar-portfolio

# 3. Install PHP dependencies
composer install

# 4. Create the environment file
cp .env.example .env

# 5. Generate application key
php artisan key:generate

# 🛑 STOP: Open the .env file and update your Database credentials 
# (DB_DATABASE, DB_USERNAME, DB_PASSWORD) before running the next step!

# 6. Run database migrations
php artisan migrate

# 7. Start the local development server
php artisan serve
