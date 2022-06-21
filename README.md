# Oddyssey_UAP_WP
1. git clone this repo
2. run php artisan key:generate
3. run "composer require laravel/passport"
4. run "composer require laravel/ui"
5. Setting database in file .env. and open file config/app.php, copy this code in provider:
   Laravel\Passport\PassportServiceProvider::class,
6. run "php artisan migrate --seed"
7. run "php artisan passport:install"
8. add "Passport::routes();" in app/Providers/AuthServiceProvider.php for function boot()
9. add code in config/auth.php
  'api' => [
       'driver' => 'passport',
       'provider' => 'users',
   ],
10. php artisan serve
