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

POST /api/register  
POST /api/login  

### Tasks

GET /api/tasks  
POST /api/tasks  
PUT /api/tasks/{id}  
DELETE /api/tasks/{id}  

## Task Structure

{
  "id": 1,
  "title": "Finish API",
  "description": "Build Laravel REST API",
  "status": "pending",
  "due_date": null,
  "created_at": "2026-03-16T16:46:14.000000Z",
  "updated_at": "2026-03-16T16:46:14.000000Z"
}

## Tech Stack

- Laravel
- MySQL
- Laravel Sanctum

## Installation

git clone https://github.com/jilljungbluth-dev/laravel-task-management-api.git
cd laravel-task-management-api

composer install

cp .env.example .env

php artisan key:generate

Configure your database in `.env`, then run:

php artisan migrate

Start the server:

php artisan serve

## Authentication

This API uses Laravel Sanctum for token-based authentication.

After login, include the token in the request header:

Authorization: Bearer YOUR_TOKEN

## Example Response

{
  "id": 1,
  "title": "Finish API",
  "description": "Build Laravel REST API",
  "status": "pending"
}