# enablecors

## _Opensource solution to overcome CORS in Frontend Development_

EnableCORS is an Opensource Solution to override the CORS error on frontend development.

## Features

- Easy to host
- Based on Lumen fast micro-framework by Laravel.
- /query api fetches data that are blocked by browsers due to CORS error
- /mock api mocks the expected response from server.

Documentation can be viewed at [enablecors]

[enablecors]: <https://www.enablecors.com>


php -S localhost:8000 -t public
php -S localhost:9000 -t public

copy paste .env.example and rename .env

optional
credits: https://stackoverflow.com/questions/30344141/lumen-micro-framework-php-artisan-keygenerate
{baseurl}/key will generate the key. Copy paste in .env file

comment this line after generating key from routes/web.php
$router->get('/key', function() {
    return \Illuminate\Support\Str::random(32);
});


https://lumen.laravel.com/docs/master/configuration

https://github.com/fruitcake/laravel-cors#lumen

To allow specific origin, use, config/cors.php

base64=true