# test
Clone the project

# clone laradock
git clone https://github.com/Laradock/laradock.git

cp env-example .env

# open .env file and update to this
APP_CODE_PATH_HOST=../blog/

# go to laradock folder 
docker-compose build workspace php-fpm nginx mysql selenium


docker-compose up -d nginx mysql selenium

docker-compose exec workspace bash

cp .env.example .env
composer update or composer install


# setup database
connect from sequel pro or workbench
user root
password root
and create new database

update .env file inside blog 

# in workspace 
php artisan migrate
