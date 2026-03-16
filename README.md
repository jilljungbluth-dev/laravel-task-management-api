# Laravel Task Management REST API

A RESTful API built with Laravel for managing tasks with authentication using Laravel Sanctum.

## Features

- Laravel REST API
- API authentication with Laravel Sanctum
- User registration and login
- CRUD operations for tasks
- User-specific tasks
- MySQL database
- JSON responses
- Input validation

## API Endpoints

### Auth

- `POST /api/register`
- `POST /api/login`

### Tasks

- `GET /api/tasks`
- `POST /api/tasks`
- `PUT /api/tasks/{id}`
- `DELETE /api/tasks/{id}`

## Task Structure

```json
{
  "id": 1,
  "title": "Finish API",
  "description": "Build Laravel REST API",
  "status": "pending",
  "due_date": null,
  "created_at": "2026-03-16T16:46:14.000000Z",
  "updated_at": "2026-03-16T16:46:14.000000Z"
}
```

## Tech Stack

- Laravel
- MySQL
- Laravel Sanctum

## Installation

### Clone the repository

```bash
git clone https://github.com/jilljungbluth-dev/laravel-task-management-api.git
cd laravel-task-management-api
```

### Install dependencies

```bash
composer install
```

### Copy the environment file

```bash
cp .env.example .env
```

### Generate the application key

```bash
php artisan key:generate
```

### Configure your database and run migrations

Update your `.env` file with your database credentials, then run:

```bash
php artisan migrate
```

### Start the development server

```bash
php artisan serve
```

## Authentication

This API uses Laravel Sanctum for token-based authentication.

After login, include the token in the request header:

```http
Authorization: Bearer YOUR_TOKEN
```

## Example Response

```json
{
  "id": 1,
  "title": "Finish API",
  "description": "Build Laravel REST API",
  "status": "pending"
}
```