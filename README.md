<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>





----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x/installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 
## Docker

To install with [Docker](https://www.docker.com), run following commands:

```
git clone https://github.com/duongminhhung/ECommerce-Laravel.git
cd ECommerce-Laravel
cp .env.example.docker .env
docker-compose up -d
You can now access the server nginx http://localhost:7123/
You can now access the server database http://localhost:7124/ 
Username: root
Password: abcxyz123

Clone the repository

    git clone https://github.com/duongminhhung/ECommerce-Laravel.git

Switch to the repo folder

    cd ECommerce-Laravel

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000






```

