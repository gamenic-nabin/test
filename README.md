# test
Clone the project


#go to laradock folder 
docker-compose build workspace php-fpm nginx mysql
docker-compose up -d nginx mysql

docker-compose exec workspace bash

composer-update
