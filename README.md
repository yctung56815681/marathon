"# marathon"

git clone https://github.com/yctung56815681/marathon.git<br/>
cd marathon<br/>
composer install<br/>

shell : cp .env.example .env<br/>
or<br/>
ms-windows : copy .env.example .env<br/>

--至phpmyadmin手動建置資料庫--<br/>
DB name:marathon <br/>
格式:utf8mb4_general_ci <br/>
---

php artisan key:generate<br/>
php artisan migrate<br/>
php artisan serve<br/>
