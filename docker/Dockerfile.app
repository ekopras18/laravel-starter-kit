FROM dunglas/frankenphp:1.3.3-php8.3.14

LABEL maintainer="Optima Team"

# Set the FRANKENPHP_CONFIG environment variable to configure FrankenPHP
ENV FRANKENPHP_CONFIG="worker /app/public/frankenphp-worker.php"

# install php extensions
RUN install-php-extensions \
    pcntl \
    pdo_mysql \
    gd \
    intl \
    zip \
    opcache

# update and install supervisor
RUN apt update \
    && apt install -y supervisor \
    && apt -y autoremove \
    && apt clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# configure php.ini & supervisor to run multiple processes
COPY php.ini /usr/local/etc/php/
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY Caddyfile /etc/caddy/Caddyfile

# Start Supervisor
CMD ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisor/conf.d/supervisord.conf"]
