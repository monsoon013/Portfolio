FROM php:apache
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        $PHPIZE_DEPS \
        libssl-dev \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb \
    && apt-get purge -y --auto-remove $PHPIZE_DEPS \
    && rm -rf /var/lib/apt/lists/*

COPY . /var/www/html
EXPOSE 80