# URL Shortener - Laravel Application

<p align="center">
  <a href="https://laravel.com" target="_blank" rel="noopener">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  </a>
</p>

---

## About This Project

This **URL Shortener** application is built with Laravel, leveraging its robust features and elegant syntax to deliver a scalable, secure, and maintainable web solution. Designed with role-based access control, it supports **SuperAdmin**, **Admin**, and **Member** roles, each with tailored permissions to manage users and URLs effectively.

## Key Features

- Role-based user management with granular permissions.
- User invitation system for controlled onboarding.
- URL shortening and management with intuitive UI.
- Secure authentication and session management.
- Database migrations and seeders for easy setup.
- Clean, responsive design powered by Bootstrap 5.

## Prerequisites

- PHP >= 8.0
- Composer
- MySQL or compatible database
- Node.js & npm (optional for frontend asset compilation)


## Getting Started

### 1. Clone the Repository

### 2. Install Dependencies

### 3. Configure Environment

Copy the example environment file and update it:

Update `.env` with your database and app settings:

APP_NAME=URL_Shortener
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=url_shortener
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password

SESSION_DRIVER=file
SESSION_LIFETIME=120

### 4. Generate Application Key

php artisan key:generate

### 5. Setup Database

- Create a MySQL database named `url_shortener` (or your chosen name).
- Run migrations:

php artisan migrate

### 6. Setup Roles and Permissions

Run the following commands to create roles and permissions:

php artisan permission:create-role SuperAdmin
php artisan permission:create-role Admin
php artisan permission:create-role Member

php artisan permission:create-permission create-short-url
php artisan permission:create-permission view-company-short-urls
php artisan permission:create-permission view-all-short-urls
php artisan permission:create-permission invite-user

### 7. Seed the Database

php artisan db:seed

### 8. Start the Development Server

php artisan serve

Open your browser and visit [http://localhost:8000](http://localhost:8000).

---

## Default User Credentials

| Role       | Email                   | Password    |
|------------|-------------------------|-------------|
| SuperAdmin | superadmin@sembark.com  | Admin@123   |
| Admin      | admin@sembark.com       | Admin@123   |
| Member     | member@sembark.com      | Admin@123   |

> **Note:** Please change these credentials immediately after first login for security.


## Resources & Documentation

- [Laravel Official Documentation](https://laravel.com/docs)
- [Spatie Laravel Permission Package](https://spatie.be/docs/laravel-permission)
- [Laracasts Video Tutorials](https://laracasts.com)
- [Bootstrap 5 Documentation](https://getbootstrap.com/docs/5.3/getting-started/introduction/)
