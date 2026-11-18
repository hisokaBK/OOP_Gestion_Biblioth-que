# Library Management — PHP OOP

An educational library management application built in PHP, using object-oriented models and routed pages.

## Features reflected in the source

- User registration, login and logout.
- Book listing and book details.
- Book creation, editing and deletion routes.
- Book borrowing workflow.
- User profile and dashboard pages.

## PHP architecture

The project defines classes for `User`, `Admin`, `Reader`, `Book` and `Borrow`, along with controllers for authentication, books and borrowing. `routes/web.php` routes requests to the relevant views and controller actions.

## Technologies

PHP (OOP), HTML, Tailwind CSS, and a database connection through `config/dbconnection.php`.

## Structure

- `public/` — public entry and static assets.
- `routes/web.php` — routing configuration and dispatch.
- `app/Models/` — object-oriented domain models.
- `app/controllers/` — auth, book and borrowing actions.
- `app/views/` and `app/templates/` — presentation.
- `config/` — database configuration.

## Local setup

Run using a PHP-capable web server with the appropriate public document root. Configure the database connection in `config/` and install any needed frontend dependencies with `npm install`.

This is a learning project intended to practice PHP classes, application structure, routing and CRUD operations.
