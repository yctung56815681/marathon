"# marathon"

git clone https://github.com/yctung56815681/marathon.git<br/>
cd marathon<br/>
composer install<br/>

shell : cp .env.example .env<br/>
or<br/>
ms-windows : copy .env.example .env<br/>

php artisan migrate<br/>

php artisan key:generate<br/>
php artisan serve<br/>
