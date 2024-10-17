# Laravel Practice


## Description

This repository contains a basic CRUD (Create, Read, Update, Delete) practice using Laravel. This app allows you to manage a list of items (motorbikes in my case), making it ideal to understanding the fundamentals of Laravel.


## Requirements

- Laravel v11.27.2
- PHP v8.3.12
- MySQL v8.0.30
- Nodejs v20.18


## Installation

1. Create a new project with Laravel 
	laravel new project

2. Choose database (MySQL). Default migrations

3. Navigate to the project directory
	cd repository_project

4. Install dependencies with composer
	composer install

5. Migrate the database
	php artisan migrate

6. Run the server. You can access the application at http://localhost:8000
	php artisan serve

7. Some useful commands:
	php artisan make:migration table_name //Create a migration
	php artisan make:seeder table_seeder //Create a seeder
	php artisan db:seed --class=table_seeder //Execute seeder
	php artisan make:model Name //Create a model
	php artisan make:controller NameController //Create a controller
	php artisan make:view view.name //Create a view
	

## Usage

The application allows you to perform the next operations:
- Create: Add new motorbikes to the list 
- Read: View all existing motorbikes
- Update: Modify the information of a selected motorbike
- Delete: Remove motorbikes from the list


## Project structure

- "app/" Contains controllers and logic model
- "resources/views/" Contains the application views
- "routes/web.php" Contains the application routes


##Juan Carlos Bolaños Ojeda - 2ºDAWT


