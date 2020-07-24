Server Requirements

 Все эти требования удовлетворяются виртуальной машиной Laravel Homestead,поэтому настоятельно рекомендуется использовать Homestead в качестве локальной среды разработки Laravel.

Однако, если вы не используете Homestead, вам необходимо убедиться, что ваш сервер соответствует следующим требованиям:
    PHP >= 7.2.5
    BCMath PHP Extension
    Ctype PHP Extension
    Fileinfo PHP extension
    JSON PHP Extension
    Mbstring PHP Extension
    OpenSSL PHP Extension
    PDO PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension


Установка

git clone git@github.com:gothinkster/laravel-testapp.git

Переключиться в папку testapp

cd testapp

Установите все зависимости, используя composer

composer install

Скопируйте пример файла env и внесите необходимые изменения в конфигурацию файла .env.

cp .env.example .env

Создать новый ключ приложения

php artisan key:generate

Запустите локальный сервер разработки

php artisan serve

Теперь вы можете получить доступ к серверу по адресу http://localhost:8000
