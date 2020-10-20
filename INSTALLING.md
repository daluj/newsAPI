# Project requirements
* [Apache](https://httpd.apache.org/download.cgi) or [nginx](https://nginx.org/en/download.html) server
* At least [PHP 7.3](https://www.php.net/releases/7_3_0.php)
* [MySQL](https://www.mysql.com/)
* [Composer](https://getcomposer.org/)

## How to run it
1. Clone the repo:
```
git clone https://github.com/daluj/newsAPI.git
```
2. Create `.env` file by renaming `env.local` to `.env`
3. Run the following commands to initialize project:
```
composer install
```

```
php artisan migrate
```

```
php artisan db:seed
```

```
php artisan serve
```
(or you can use Laravel/Homestead or XAMPP as development environments)

## Installation with Laravel/Homestead (recommended)
In order to set up the development environment in your local machine, [Laravel Homestead] (https://laravel.com/docs/8.x/homestead) provides a wonderful development environment without requiring to install PHP, a web server, and any other server software on your local machine. 

I recommend installing [per project] (https://laravel.com/docs/8.x/homestead#per-project-installation)

## Installation with XAMPP
For [XAMPP] (https://www.apachefriends.org/download.html) installation and set up, please check this [video] (https://www.youtube.com/watch?v=k9em7Ey00xQ)
