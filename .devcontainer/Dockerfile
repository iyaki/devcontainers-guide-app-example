FROM dunglas/frankenphp:1-php8.4

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install mysqli \
    && apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        mariadb-client \
        unzip \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
