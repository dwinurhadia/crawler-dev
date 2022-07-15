FROM php:apache
COPY . /var/www/html/
WORKDIR .
CMD [ "php", "./index.php" ]