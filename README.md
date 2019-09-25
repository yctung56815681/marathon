"# marathon"

git clone https://github.com/yctung56815681/marathon.git
cd marathon
composer install

shell : cp .env.example .env
or
ms-windows : copy .env.example .env

php artisan key:generate
php artisan serve
