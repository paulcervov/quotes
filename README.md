#

docker run -it --rm --name quotes-php-cli \
-v "$PWD":/usr/src/app -w /usr/src/app \
php:7.4-cli php index.php
