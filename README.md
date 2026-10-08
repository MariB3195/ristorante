# 🍽️ Ristorante — Laravel Web Application

> Full-stack web application for restaurant management, built with PHP and Laravel.

**Ristorante** is a web application developed to practice and demonstrate modern web development with **Laravel**, covering authentication, database management, menu administration and table reservations.

The project combines a Laravel backend with a responsive frontend built using **Blade and Tailwind CSS**.

---

## ✨ Features

### 👤 Authentication

* User registration and login
* Personal profile management
* Password update
* Password recovery
* Email verification

### 🍴 Menu Management

* Menu visualization
* Create menu items
* Edit menu items
* Delete menu items
* Administrative menu management

### 📅 Reservation Management

* Create restaurant reservations
* View reservations
* Administrative reservation management
* Reservation confirmation page
* Email notifications related to reservations

### 🔐 Administration

A dedicated administrative area allows authorized users to manage:

* Restaurant menu
* Reservations
* Application data

---

## 🛠️ Tech Stack

| Technology       | Purpose                      |
| ---------------- | ---------------------------- |
| **PHP**          | Backend programming language |
| **Laravel**      | Web application framework    |
| **MySQL**        | Relational database          |
| **Blade**        | Server-side templating       |
| **Tailwind CSS** | UI styling                   |
| **JavaScript**   | Frontend interactions        |
| **Vite**         | Frontend asset management    |
| **Git**          | Version control              |
| **GitHub**       | Source code management       |

---

## 🏗️ Architecture

The project follows the Laravel MVC architecture.

```text
app/                Application logic
bootstrap/          Framework bootstrap
config/             Application configuration
database/           Migrations, factories and seeders
public/              Public assets and entry point
resources/           Blade views, CSS and JavaScript
routes/              Application routes
storage/             Generated application files
tests/               Automated tests
```

---

## 🗄️ Database

The application uses **MySQL** as its relational database.

Laravel migrations are used to define and manage the database structure.

To initialize the database:

```bash
php artisan migrate
```

---

## 🚀 Installation

### Requirements

Before running the project, make sure you have installed:

* PHP
* Composer
* Node.js
* npm
* MySQL
* Git

---

### 1. Clone the repository

```bash
git clone https://github.com/MariB3195/ristorante.git
cd ristorante
```

---

### 2. Install PHP dependencies

```bash
composer install
```

---

### 3. Install frontend dependencies

```bash
npm install
```

---

### 4. Configure the environment

Create your local `.env` file from the example:

**Windows**

```bash
copy .env.example .env
```

**macOS / Linux**

```bash
cp .env.example .env
```

Generate the Laravel application key:

```bash
php artisan key:generate
```

Then configure the database credentials inside `.env`.

---

### 5. Configure the database

Create a MySQL database and update the corresponding values in `.env`.

Run the migrations:

```bash
php artisan migrate
```

---

### 6. Start Laravel

```bash
php artisan serve
```

---

### 7. Start Vite

Open a second terminal and run:

```bash
npm run dev
```

The application will normally be available at:

```text
http://127.0.0.1:8000
```

---

## 🔒 Security & Configuration

Sensitive environment configuration should never be committed to the repository.

The project uses `.gitignore` to exclude local configuration and generated dependencies.

The `.env` file should remain local and should not be uploaded to GitHub.

---

## 🧪 Testing

The project includes a dedicated `tests/` directory for automated tests.

Laravel's testing tools can be executed with:

```bash
php artisan test
```

---

## 🎯 Learning Goals

This project was created to practice and demonstrate:

* MVC architecture
* Laravel routing
* Controllers and Models
* Database migrations
* MySQL integration
* Authentication
* Form handling
* Data validation
* Email notifications
* Blade templating
* Tailwind CSS
* Vite asset management
* Automated testing
* Git and GitHub workflow

---

## 📸 Screenshots

Screenshots can be added here to showcase:

* Home page
* Restaurant menu
* Reservation page
* User profile
* Administration area

---

## 🔮 Future Improvements

Possible future improvements include:

* Online deployment
* Restaurant availability management
* Improved reservation calendar
* Role-based permissions
* Enhanced administration dashboard
* Automated deployment
* Additional automated tests
* Improved mobile experience

---

## 👨‍💻 Author

**MariB3195**

GitHub: [@MariB3195](https://github.com/MariB3195)

---

⭐ If you find this project interesting, consider giving the repository a star.
