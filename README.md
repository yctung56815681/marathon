"# marathon"

git clone https://github.com/yctung56815681/marathon.git<br/>
cd marathon<br/>
composer install --no-plugins --no-scripts<br/>

shell : cp .env.example .env<br/>
or<br/>
ms-windows : copy .env.example .env<br/>

"# phpmyadmin create database, only doing once"<br/>
DB name:marathon<br/>
select:utf8mb4_unicode_ci<br/>
mysql -u root -p<br/>
--> create database if not exists marathon default character set utf8mb4 collate utf8mb4_unicode_ci;<br/>
--> exit<br/>
php artisan migrate<br/>
php artisan db:seed<br/>

php artisan key:generate<br/>
php artisan serve<br/>
1111
