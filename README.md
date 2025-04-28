<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
Set Up Laravel Backend
 Install Laravel
Create a new Laravel project:

Open a terminal or command prompt and run:
composer create-project --prefer-dist laravel/laravel backend
This will create a new Laravel project in the backend folder.

Navigate to the project directory:
cd backend

Configure the database:

Open the .env file and configure the database settings according to your MySQL setup. For example:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

Generate the application key:
Run the following command:
php artisan key:generate

Then run the command
php artisan config:publish cors
This will public the cors.php file to config folder 

in there fix following config 
   'paths' => ['api/*'], // or just '*' to allow all API routes

    'allowed_methods' => ['*'], // or specify which methods (e.g., GET, POST, PUT, DELETE)

    'allowed_origins' => // Add your frontend origin here

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'], // or specify specific headers

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

NOTE: the database script will be include in root directory name test_api.sql
It already include some mockup data
