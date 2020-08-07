# test
Clone the project

# clone laradock
git clone https://github.com/Laradock/laradock.git

cp env-example .env

# open .env file and update to this
APP_CODE_PATH_HOST=../blog/

# go to laradock folder 
docker-compose build workspace php-fpm nginx mysql


docker-compose up -d nginx mysql

docker-compose exec workspace bash

composer-update or composer-install
