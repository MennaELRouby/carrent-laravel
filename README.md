<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Car Rental Web Application

# Thanks for checking out the Car Rental, the Owner / Admin has a dashboard

to add, edit, show the tables, or delete the data of [car, users, categories of car, testimonials], and show frequent messages coming from the customers.

# customers

on the other side, the web app has [Home, Listing, Info for each car, Testimonials, Blog, About, Contact] pages, and customers can [Comments, send messages].

# Acknowledgements

-   [CarRental Repo](https://github.com/MennaELRouby/carrent-laravel.git)

-   [CarRental README](https://github.com/MennaELRouby/carrent-laravel/blob/main/README.md)

**Use this workspace to list resources you find helpful and would like to give credit to. I've included the following**

## Requirements workspace

-   Git bash
-   visual studio code - XAMPP control panel Apache HTTP Server - Composer php dependency manager
-   OpenSSL PHP
-   Laravel breeze

---

# Roadmap

# Install Project

## Clone repo in Visual Studio code

    $gh repo clone MennaELRouby/carrent-laravel
    cd xampp/htdocs/

## install project dependencies

### Composer

     composer install

### install npm

    npm install
    npm run dev

## Create environment config file

    cp .env .example .env

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

## Set Environment Variables

### Path :

    - Git\cmd
    - xampp\php
    - ComposeSetup\bin
    - mysql\bin

### Create environment config file

    - cp .env .example .env
    - vim .env

### Edit Configuration in .env:

    - mail smtp:
    MAIL_MAILER=smtp
    MAIL_HOST=sandbox.smtp.mailtrap.io
    MAIL_PORT=587
    MAIL_USERNAME=84afc2122d0c86
    MAIL_PASSWORD=b2ff23c87f3213
    MAIL_ENCRYPTION=STARTTLS
    MAIL_FROM_ADDRESS="roubymenna@gmail.com"
    MAIL_FROM_NAME="${APP_NAME}"

    - Database Configuration
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=carrent_laravel
    DB_USERNAME=root
    DB_PASSWORD=

    - Vite
    VITE_APP_NAME="${APP_NAME}"
    VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
    VITE_PUSHER_HOST="${PUSHER_HOST}"
    VITE_PUSHER_PORT="${PUSHER_PORT}"
    VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
    VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

## Configure Authentication

    - composer require laravel/ui
    - $php artisan ui bootstrap --auth

---

# Migrate

## AppServiceProvider

**Make sure to comment on the following function before running the migrations**

    //public function boot(): void{}

## Run db migration

    - $php artisan migrate

---

# Mail:

    - mailtrap.io

---

# Run the Development server through XAMPP-Control

    	- http://localhost/carrent-laravel/public/		        # access carrental web app
    	- http://localhost/carrent-laravel/public/admin/		# access admin dashboard

# or artisan serve

        php artisan serve
            -http://127.0.0.1:8000                            #access car rental web app
            -http://127.0.0.1:8000/admin                      #access admin dashboard

---

# Code overview

## Development main folders

    -CRUD Controllers
    	- app/Http/Controllers/CarRentalController	    # contains car rental webpages controller
    	- app/Http/Controllers/Admin		            # contains all Admin controllers
    	- app/Http/Controllers/Auth			            # contains Authentications controllers
    	 - database/migrations			                # contains all the database schema migrations
    	 - app\Models\ 				                    # contains all the Eloquent models
    	 - app\Mail\contactMail.php			            # contains Envelope & email template
    - Routes: routes/web.php
    	- Show All Routes
    		- $php artisan route:list
    -AppService Provider
    	-app\Providers\AppServiceProvider.php           # Define Globla Variable

## Environment variables

    - `.env` - Environment variables can be set in this file

## Parameters

    - active: in user table:
        admins can enter the dashboard by email verification or by Adding a user and changing active to 1

                    | column     | Type  | Description                       |
        			| :-------- | :------| :-------------------------------- |
        			| `Active`  | boolean| **Required**. If active = 1 user can enter Dashboard else 0 These credentials do not match our records.

    -published: in cars and testimonials tables
        can't publish any recodes unless published = 1

                    | column     | Type  | Description                       |
        			| :-------- | :------| :-------------------------------- |
        			| `published`  | boolean| **Required**. If published = 1 row recodes can show on the carrental website.

## **_Note_** : You can quickly set the database information and other variables in this file and have the application fully working.

# DataBase overview

## Tables names

    (cars, categories, comments, messages, testimonials, users)

## DB Design:

    - Eloquent ORM through
            Database/Eloquent/Models
    - check db config:
            config/database.php

    - DB Relationship
        	- cars - categories one to many

        		categories table
        			| column     | Type     | Description                       |
        			| :-------- | :------- | :-------------------------------- |
        			| `id`      | interger| **Required**. Id Autoincrement
        		cars table
        			| column    | Type     | Description                       |
        			| :-------- | :------- | :-------------------------------- |
        			| `cat_id`  | integer  | **Required**. foreign key

        	- comments - cars one to many

        		cars table
        			| column    | Type     | Description                       |
        			| :--------| :------- | :-------------------------------- |
        			| `id`     | interger | **Required**. Id Autoincrement
        		comments table
        			| column     | Type     | Description                       |
        			| :--------- | :------- | :-------------------------------- |
        			| `car_id`   | integer  | **Required**. foreign key

---

# Route List

## [CMD] php artisan route:list --json

---

# Contact

# Menna Elrouby

     - E-Mail: roubymenna@gmail.com
       [LinkedIN](https://www.linkedin.com/in/menna-rouby)
       [GitHub](https://github.com/MennaELRouby)
